import { ready } from './lib/helpers'
import Swiper from "swiper";
import CategoryBar from "./components/categoryBarComponent";
import KitchenBar from "./components/kitchenTypeComponent";
import { CookieConsent, CookieSettings, CookieSettingsGranular, CookieWall, CookieWallGranular, Notify } from '@takeaway/ui-vanilla'


class App {
    components = {}
}
ready(() => {
    window.app = new App()

    $.fn.isInViewport = function () {
        const elementTop = $(this).offset().top
        const elementBottom = elementTop + $(this).outerHeight()
        const viewportTop = $(window).scrollTop()
        const viewportBottom = viewportTop + $(window).height()
        const scroller = $('.menu-category-bar-container')
        const scrollerHeight = scroller.length > 0 ? scroller.outerHeight() : 0
        const smartBanner = $('.smartbnr')
        const smartBannerHeight = smartBanner.length > 0 ? smartBanner.outerHeight() : 0
        return elementBottom > (viewportTop + scrollerHeight + smartBannerHeight) && elementTop < viewportBottom
    }

    const restaurantCategorySwiper = new Swiper('.js-swiper', {
        slidesPerView: 'auto',
        freeMode: true,
        loop: false,
        watchOverflow: true,
        navigation: {
            nextEl: '.swipe-next'
        }
    })

    const kitchenBarSelector = '.js-menu-category-bar-sticky .js-swiper'
    if (document.querySelector(kitchenBarSelector)) {

        const swiper: Swiper = new Swiper(kitchenBarSelector, {
            slidesPerView: 'auto',
            freeMode: true,
            speed: 1000,
            loop: false,
            slideToClickedSlide: true,
            watchOverflow: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        })
        swiper.snapGrid[swiper.snapGrid.length - 1] = swiper.slidesGrid[swiper.slidesGrid.length - 1]
        window.app.components.kitchenBar = new KitchenBar({
            swiper: swiper
        })
        window.app.components.kitchenBar.init()
    }


    $(document).scroll(() => {
        stickyCategories()
        scrollCategories()
    })

    const menuCategoryBar = document.querySelector('.menu-category-bar')
    const menuCategoryContainer = document.querySelector('.js-menu-category-bar-sticky')
    const menuCardMainContainer = document.querySelector('.full')
    const scrollingClass = 'category-scrolling'

    function stickyCategories () {
        if (menuCardMainContainer && menuCategoryContainer && menuCategoryBar) {
            const smartBanner = document.querySelector('.smartbnr') // added afterward, because of ajax load
            const fromTop = smartBanner ? smartBanner.getBoundingClientRect().height : 0
            if (menuCategoryContainer.getBoundingClientRect().top <= fromTop) {
                menuCardMainContainer.classList.add(scrollingClass)
            } else {
                menuCardMainContainer.classList.remove(scrollingClass)
            }
        }
    }

    function scrollCategories () {
        // Find the heighest element in the viewport
        let heighestElement
        $('.menucard__meals-group').each(function () {
            if ($(this).isInViewport()) {
                if (heighestElement === undefined || $(this).position().top < $(heighestElement).position().top) {
                    heighestElement = this
                }
            }
        })

        // Set the active index on the category slider
        let index = $(heighestElement).attr('anchor-id')
        if (typeof index === 'undefined') {
            if (restaurantCategorySwiper.slides && restaurantCategorySwiper.slides.length) {
                restaurantCategorySwiper.slideTo(0)
                $('.swiper-slide').removeClass('slide-active')
                $('.swiper-wrapper a:first-child').addClass('slide-active')
            }
        } else {
            let $el = $('a[href="#' + index + '"]')

            restaurantCategorySwiper.slideTo($el.index())
            $('.swiper-slide').removeClass('slide-active')
            $el.addClass('slide-active')
        }
    }


    const navigateToAnchor = ($anchorElement) => {
        if ($anchorElement) {
            const targetPosition = $anchorElement.getBoundingClientRect()
            const barHeight = menuCategoryBar ? menuCategoryBar.getBoundingClientRect().height : 0
            // const smartBanner = document.querySelector('.smartbnr')
            // const smartBannerHeight = smartBanner ? smartBanner.getBoundingClientRect().height : 0
            const windowYPosition = window.scrollY | window.pageYOffset // if IE
            const newYPosition = windowYPosition + targetPosition.top - barHeight
            console.log('scrollTo(0, ' + newYPosition + ')')
            console.log(newYPosition)
            window.scrollTo(0, newYPosition) // Options object doesn't fire in IE
        }
    }

    // Go to a certain category
    const swiperItems = document.querySelectorAll('.menu-category-list .swiper-slide')
    for (let j in swiperItems) {
        const swiperItem = swiperItems[j]
        if (typeof swiperItem === 'object') {
            swiperItem.addEventListener('click', function () {
                const categoryId = this.dataset.category
                if (categoryId) {
                    let newTarget = null
                    if (categoryId !== '0') { // popular products
                        newTarget = document.getElementById(categoryId)
                    }
                    if (!newTarget) { // assumption c1icked on the popular dishes
                        newTarget = document.querySelector('.menu-meals-group-populair')
                        if (!newTarget) { // Still nothing, select the container to scroll up
                            newTarget = document.querySelector('.menu-menucard')
                        }
                    }
                    navigateToAnchor(newTarget)
                    history.replaceState(null, null, $(this).attr('href'))
                }
            })
        }
    }

    /**
     * COMPONENT: COOKIE WALL
     * It's an independent component, that's why we don't expose anything to global scope.
     * @author DON'T POLLUTE GLOBAL SCOPE TEAM
     */
    let legacyCookieBannerLoaded = false
    let lastLegacyCookieValue
    const updateCookieFnLegacy = (newValue) => {
        if (!legacyCookieBannerLoaded) {
            lastLegacyCookieValue = newValue
        }
    }

    let granularCookieBannerLoaded = false
    let lastGranularCookieValue
    const updateCookieFnGranular = (newValue) => {
        if (!granularCookieBannerLoaded) {
            lastGranularCookieValue = newValue
        }
    }

    /**
     * COMPONENT: COOKIE SETTINGS
     */
    let legacyCookieSettingsIsLoaded = false
    const updateLegacyCookieSettingsFn = (cookieConsent) => {
        if (!legacyCookieSettingsIsLoaded) {
            return // Wait until cookieSettings is loaded
        }
    }

    let granularCookieSeetingsIsLoaded = false
    const updateGranularCookieSettingsFn = (cookieConsent) => {
        if (!granularCookieSeetingsIsLoaded) {
            return
        }

    }

    const $containerCookieSettings = document.querySelector('.js-container-cookie-settings')
    if (
        $containerCookieSettings &&
        typeof _COOKIE_SETTINGS_I18N !== 'undefined'
    ) {
        /* eslint-disable no-new */
        new CookieSettings({
            $container: $containerCookieSettings,
            i18n: _COOKIE_SETTINGS_I18N, // @see App/Layout/Page/Servicepages/CookieStatement.phtml
            notifySuccess: Notify.notifySuccess,
            updateCookieFn: updateLegacyCookieSettingsFn
        })
        legacyCookieSettingsIsLoaded = true
    }

    const $granularCookieConsentManageLink = document.querySelector('.js-manage-cookie-preferences')
    let granularCookieSettingsPopup
    if ($granularCookieConsentManageLink &&
        typeof _COOKIE_SETTINGS_GRANULAR_I18N !== 'undefined') {
        $granularCookieConsentManageLink.addEventListener('click', (event: Event) => {
            event.preventDefault()

            if (!granularCookieSettingsPopup) {
                granularCookieSettingsPopup = new CookieSettingsGranular({
                    classList: ['i-am-step-3'],
                    // eslint-disable-next-line no-undef
                    headerContent: `<div class="js-header-content"><h2 class="cookie-consent-granular-modal-header">${_COOKIE_SETTINGS_GRANULAR_I18N.MODAL_TITLE}</h2></div>`,
                    updateCookieFn: updateGranularCookieSettingsFn,
                    subHeaderContents: _COOKIE_SETTINGS_GRANULAR_I18N.MODAL_CONTENT,
                    buttons: {
                        acceptAllText: _COOKIE_SETTINGS_GRANULAR_I18N.BUTTON_ACCEPT_ALL,
                        onlySelectedText: _COOKIE_SETTINGS_GRANULAR_I18N.BUTTON_ONLY_SELECTED
                    },
                    consents: [
                        {
                            consentId: 103,
                            consentCanBeAltered: false,
                            consentGiven: true,
                            consentDescription: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_103_DESCRIPTION,
                            consentTitle: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_103_TITLE
                        },
                        {
                            consentId: 104,
                            consentTitle: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_104_TITLE,
                            consentCanBeAltered: true,
                            consentDescription: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_104_DESCRIPTION
                        },
                        {
                            consentId: 105,
                            consentTitle: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_105_TITLE,
                            consentCanBeAltered: true,
                            consentDescription: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_105_DESCRIPTION
                        },
                        {
                            consentId: 106,
                            consentTitle: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_106_TITLE,
                            consentCanBeAltered: true,
                            consentDescription: _COOKIE_SETTINGS_GRANULAR_I18N.CONSENT_106_DESCRIPTION
                        }
                    ]
                })
            }

            if (granularCookieSettingsPopup) {
                granularCookieSeetingsIsLoaded = true
                granularCookieSettingsPopup.render()
            }
        })
    }

    /**
     * COMPONENT: COOKIE WALL
     * It's an independent component, that's why we don't expose anything to global scope.
     * @author DON'T POLLUTE GLOBAL SCOPE TEAM
     */

        // Maybe make this a featuretoggle in the future, but please make sure to test all domains before rolling out to all domains
    const isDenmark = site.cc === '7'

    if (!isDenmark) {
        const $containerCookieWall = document.querySelector('.cc-banner')

        if ($containerCookieWall) {
            const cookieWall = new CookieWall({
                $container: $containerCookieWall,
                contentText: $containerCookieWall.getAttribute('data-content-text'),
                url: $containerCookieWall.getAttribute('data-url'),
                urlText: $containerCookieWall.getAttribute('data-url-text'),
                buttonText: $containerCookieWall.getAttribute('data-button-text'),
                hideLinkAfterText: true,
                buttonEssentialPackage: $containerCookieWall.getAttribute('data-button-essential-package'),
                buttonTextAria: $containerCookieWall.getAttribute('data-button-text-aria'),
                buttonEssentialPackageAria: $containerCookieWall.getAttribute('data-button-essential-package-aria'),
                updateCookieFn: updateCookieFnLegacy
            })
            window.app.components.cookieWall = cookieWall
            legacyCookieBannerLoaded = true
        }
    } else {
        const $containerCookieWallGranular = document.querySelector('.cc-banner-granular')
        let primaryTitle = $containerCookieWallGranular && $containerCookieWallGranular.getAttribute('data-primary-preferences-modal-title')
            ? $containerCookieWallGranular.getAttribute('data-primary-preferences-modal-title') : ''
        let secondaryTitle = $containerCookieWallGranular && $containerCookieWallGranular.getAttribute('data-secondary-preferences-modal-title')
            ? $containerCookieWallGranular.getAttribute('data-secondary-preferences-modal-title') : ''
        // Weird fix for flow
        if (!primaryTitle) {
            primaryTitle = ''
        }

        if (!secondaryTitle) {
            secondaryTitle = ''
        }

        if ($containerCookieWallGranular) {
            const cookieWallGranular = new CookieWallGranular({
                $container: $containerCookieWallGranular,
                selectedLanguage: $containerCookieWallGranular.getAttribute('data-current-language'),
                languageSettings: {
                    primaryLanguage: {
                        languageKey: $containerCookieWallGranular.getAttribute('data-primary-languagekey'),
                        buttonText: $containerCookieWallGranular.getAttribute('data-primary-banner-button-accept-all'),
                        contentText: $containerCookieWallGranular.getAttribute('data-primary-banner-content'),
                        buttonNecessaryPackage: $containerCookieWallGranular.getAttribute('data-primary-banner-button-accept-necessary'),
                        buttonNecessaryPackageAria: $containerCookieWallGranular.getAttribute('data-primary-banner-button-accept-necessary'),
                        buttonTextAria: $containerCookieWallGranular.getAttribute('data-primary-banner-button-accept-all'),
                        bannerTitle: $containerCookieWallGranular.getAttribute('data-primary-banner-title'),
                        settingsModal: {
                            headerTitle: `<div class="js-header-content"><h2 class="cookie-consent-granular-modal-header">${primaryTitle}</h2></div>`,
                            selector: 'js-granular-consent-popup',
                            mainSelector: 'js-consent-popup-main',
                            headerSelector: 'js-consent-popup-header',
                            subHeaderContents: $containerCookieWallGranular.getAttribute('data-primary-preferences-modal-heading'),
                            buttonAcceptAll: $containerCookieWallGranular.getAttribute('data-primary-preferences-modal-buttons-accept-all'),
                            buttonOnlySelected: $containerCookieWallGranular.getAttribute('data-primary-preferences-modal-buttons-only-selected'),
                            consents: [
                                {
                                    consentId: 103,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-primary-consent-103-title'),
                                    consentCanBeAltered: false,
                                    consentGiven: true,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-primary-consent-103-description')
                                },
                                {
                                    consentId: 104,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-primary-consent-104-title'),
                                    consentCanBeAltered: true,
                                    consentGiven: false,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-primary-consent-104-description')
                                },
                                {
                                    consentId: 105,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-primary-consent-105-title'),
                                    consentCanBeAltered: true,
                                    consentGiven: false,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-primary-consent-105-description')
                                },
                                {
                                    consentId: 106,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-primary-consent-106-title'),
                                    consentCanBeAltered: true,
                                    consentGiven: false,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-primary-consent-106-description')
                                }
                            ]
                        }
                    },
                    secondaryLanguage: {
                        languageKey: $containerCookieWallGranular.getAttribute('data-secondary-languagekey'),
                        buttonText: $containerCookieWallGranular.getAttribute('data-secondary-banner-button-accept-all'),
                        contentText: $containerCookieWallGranular.getAttribute('data-secondary-banner-content'),
                        buttonNecessaryPackage: $containerCookieWallGranular.getAttribute('data-secondary-banner-button-accept-necessary'),
                        buttonNecessaryPackageAria: $containerCookieWallGranular.getAttribute('data-secondary-banner-button-accept-necessary'),
                        buttonTextAria: $containerCookieWallGranular.getAttribute('data-secondary-banner-button-accept-all'),
                        bannerTitle: $containerCookieWallGranular.getAttribute('data-secondary-banner-title'),
                        settingsModal: {
                            headerTitle: `<div class="js-header-content"><h2 class="cookie-consent-granular-modal-header">${secondaryTitle}</h2></div>`,
                            selector: 'js-granular-consent-popup',
                            mainSelector: 'js-consent-popup-main',
                            headerSelector: 'js-consent-popup-header',
                            subHeaderContents: $containerCookieWallGranular.getAttribute('data-secondary-preferences-modal-heading'),
                            buttonAcceptAll: $containerCookieWallGranular.getAttribute('data-secondary-preferences-modal-buttons-accept-all'),
                            buttonOnlySelected: $containerCookieWallGranular.getAttribute('data-secondary-preferences-modal-buttons-only-selected'),
                            consents: [
                                {
                                    consentId: 103,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-secondary-consent-103-title'),
                                    consentCanBeAltered: false,
                                    consentGiven: true,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-secondary-consent-103-description')
                                },
                                {
                                    consentId: 104,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-secondary-consent-104-title'),
                                    consentCanBeAltered: true,
                                    consentGiven: false,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-secondary-consent-104-description')
                                },
                                {
                                    consentId: 105,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-secondary-consent-105-title'),
                                    consentCanBeAltered: true,
                                    consentGiven: false,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-secondary-consent-105-description')
                                },
                                {
                                    consentId: 106,
                                    consentTitle: $containerCookieWallGranular.getAttribute('data-secondary-consent-106-title'),
                                    consentCanBeAltered: true,
                                    consentGiven: false,
                                    consentDescription: $containerCookieWallGranular.getAttribute('data-secondary-consent-106-description')
                                }
                            ]
                        }
                    }
                },
                updateCookieFn: updateCookieFnGranular
            })
            window.app.components.cookieWallGranular = cookieWallGranular
            granularCookieBannerLoaded = true
        }
    }
})