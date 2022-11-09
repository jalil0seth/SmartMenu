/* global getHashValue, toggleHashUrl, getRestaurantCount */
/**
 * CategoryBar Component
 */

import PropTypes from 'prop-types'
import { checkPropTypes, onWindowLoad } from '../lib/helpers'
import { ChipsList, Popup, SearchBox } from '@takeaway/ui-vanilla'
// import { CUSTOM_EVENTS } from '../enums/customEvents'
import MediaQueryService from '../services/mediaquery.service'
// import trackingService from '../services/tracking.service'
// import { piiDataReplacer } from '../services/piiData.service'

export default class CategoryBar {
  _classSelector = {
    CATEGORY: 'kitchen-types__category',
    CHIP: 'tv-chips-results__item',
    CHIP_SELECT_ALL: 'tv-chips-results__item--select-all',
    NO_RESULTS_BUTTON: 'tv-chips-no-results__button',
    SELECT_ALL: 'kitchen-types__select-all',
    SHOW_MORE: 'kitchen-types__show-more',
    SLIDE: 'swiper-slide',
    JS_SHOW_MORE: 'js-kitchen-types__show-more',
    JS_CATEGORY: 'js-kitchen-types__kitchen-type',
    JS_CATEGORY_SHOW_MORE: 'js-category-from-show-more',
    JS_KITCHEN_BAR: 'js-kitchen-type-sticky',
    JS_POPUP_HEADER: 'js-header-content',
    JS_SELECT_ALL: 'js-kitchen-types__select-all',
    JS_SELECTED_CATEGORY: 'filter-label-selected',
    JS_KITCHEN_BAR_CONTAINER: 'js-kitchen-type-wrapper'
  }

  _dataTypeSelector = 'Cuisine'

  _mediaQueryService

  _propTypes = {
    swiper: PropTypes.object.isRequired
  }

  _state = {
    selectAllUrl: undefined,
    maxNumberOfCategories: 0,
    allCategories: [],
    defaultCategories: [],
    slideToIndex: undefined,
    extraCategoryAtTheEnd: undefined,
    selectedCategoryFromPopup: undefined,
    searchString: undefined
  }

  _translations

  constructor (data) {
    checkPropTypes(this._propTypes, data, 'prop', 'KitchenBar')
    this.props = Object.freeze(data)
  }

  init = () => {
    this._mediaQueryService = new MediaQueryService()

    const $kitchenBar = document.querySelector(`.${this._classSelector.JS_KITCHEN_BAR}`)

    if ($kitchenBar) {
      this._translations = JSON.parse($kitchenBar.dataset.translations || '{}')
      this._state.allCategories = JSON.parse($kitchenBar.dataset.allCategories || '[]')
      this._state.selectAllUrl = $kitchenBar.dataset.urlSelectAll || ''
      // If there is a hash it overides the default value kitchenbar
      if (!getHashValue(this._dataTypeSelector)) {
        const category = JSON.parse($kitchenBar.dataset.selectedCategory || `{}`).category || ''
        this._state.selectedCategoryFromPopup = this.getCategoryBySlug(category)
        if (this._state.selectedCategoryFromPopup !== null) {
          toggleHashUrl(this._dataTypeSelector, this._state.selectedCategoryFromPopup.categoryId)
        }
      }
    }

    // Handler event for Prev Button
    // Slides to the starting position
    if (this.props.swiper.navigation.prevEl) {
      // Remove the current event listener
      this.props.swiper.navigation.destroy('PreviousClick')
      // Add the new event listener
      this.props.swiper.navigation.prevEl.addEventListener(
        'click',
        eventHandler => {
          eventHandler.preventDefault()
          this.slideToStart()
        }
      )
    }

    // Handler event for Next Button
    // Slides to the ending position
    if (this.props.swiper.navigation.nextEl) {
      // Remove the current event listener
      this.props.swiper.navigation.destroy('NextClick')
      // Add the new event listener
      this.props.swiper.navigation.nextEl.addEventListener(
        'click',
        eventHandler => {
          eventHandler.preventDefault()
          this.slideToEnd()
        }
      )
    }

    this.props.swiper.on('resize', () => {
      this.render()
    })

    this.render()

    // To update grid calculations after load
    onWindowLoad(() => this.props.swiper.resize.resizeHandler())
  }

  /**
   * To update component calculations
   */
  update () {
    this.setSwipingClass()
    this.props.swiper.navigation.update()
    this.props.swiper.update()
  }

  /**
   * Returns the number of visible categories depending on device width
   */
  maxNumberOfCategories = () => {
    let numberOfCategories = 5
    if (this._mediaQueryService.respondTo('>=desktop')) {
      numberOfCategories = 12
    } else if (this._mediaQueryService.respondTo('>=tablet-portrait')) {
      numberOfCategories = 8
    }
    return numberOfCategories
  }

  render = () => {
    const maxNumberOfCategories = this.maxNumberOfCategories()
    const categories = this._state.allCategories.slice(0, maxNumberOfCategories)
    const selectedCategoryFromPopup = this._state.selectedCategoryFromPopup

    // Check if re-rendering is needed
    if (
      maxNumberOfCategories !== this._state.maxNumberOfCategories ||
      selectedCategoryFromPopup !== undefined
    ) {
      // Hide the bar
      this.props.swiper.$el[0].classList.remove('visible')

      // Fired on page load and resize
      if (maxNumberOfCategories !== this._state.maxNumberOfCategories) {
        this._state.maxNumberOfCategories = maxNumberOfCategories
        this.props.swiper.removeAllSlides()

        this._state.defaultCategories = []

        this.addSelectAllButton()

        this.addDefaultCategories(categories)
      }

      // Fired on interaction with pop-up
      if (selectedCategoryFromPopup !== undefined) {
        this.handleExtraCategoryAtTheEndOnPopupInteraction(selectedCategoryFromPopup)
      } else {
        // Hash check on page load
        this.hashCheckOnLoad()
      }

      // Fired when a Show More button is needed
      if (this._state.allCategories.length > maxNumberOfCategories) {
        this.addShowMoreButton()
      }

      // Show the bar
      this.props.swiper.$el[0].classList.add('visible')

      this.update()
    }

    this.handleSliderPosition()

    this.addBarEventListeners()
  }

  handleSliderPosition () {
    if (this._state.slideToIndex !== undefined) {
      this.props.swiper.slideTo(this._state.slideToIndex)
      this._state.slideToIndex = undefined
    }
  }

  addShowMoreButton () {
    let $showMore = document.querySelector(`.${this._classSelector.JS_SHOW_MORE}`)
    if (!$showMore) {
      this.props.swiper.appendSlide(this.renderShowMore())
      $showMore = document.querySelector(`.${this._classSelector.JS_SHOW_MORE}`)
      $showMore.addEventListener('click', this.openShowMore)
    }
  }

  addSelectAllButton () {
    this.props.swiper.appendSlide(this.renderSelectAll())
  }

  addDefaultCategories (categories) {
    categories.forEach((category) => {
      this.props.swiper.appendSlide(this.renderSingleCategory({ category }))
      this._state.defaultCategories.push(category)
    })
  }

  hashCheckOnLoad () {
    let currentSelection = Number(getHashValue(this._dataTypeSelector))
    if (isNaN(currentSelection)) {
      currentSelection = 0
    }

    const activeCategory = this.getCategoryById(currentSelection)

    if (activeCategory !== null) {
      if (!this._state.defaultCategories.includes(activeCategory)) {
        this._state.extraCategoryAtTheEnd = activeCategory
        this.props.swiper.appendSlide(this.renderSingleCategory({ category: activeCategory }))
      }
      this.selectCategory(activeCategory)
    } else {
      // Default selection is "Select All" button
      this.selectCategory()
    }
  }

  handleExtraCategoryAtTheEndOnPopupInteraction (selectedCategoryFromPopup) {
    // User clicked a category on pop-up
    const extraCategoryAtTheEnd = this._state.extraCategoryAtTheEnd

    if (selectedCategoryFromPopup === null) {
      // User clicked Select All from pop-up
      this.selectCategory()
    } else if (extraCategoryAtTheEnd === undefined) {
      // User clicked a category on pop-up, first time
      if (!this._state.defaultCategories.includes(selectedCategoryFromPopup)) {
        this.removeShowMoreButton()
        this.props.swiper.appendSlide(this.renderSingleCategory({ category: selectedCategoryFromPopup }))
      }
      this.selectCategory(selectedCategoryFromPopup)
    } else if (extraCategoryAtTheEnd === selectedCategoryFromPopup) {
      // User clicked the active category on pop-up
      this.selectCategory(extraCategoryAtTheEnd)
    } else {
      // User clicked a different category than active one on pop-up
      if (!this._state.defaultCategories.includes(selectedCategoryFromPopup)) {
        this.removeShowMoreButton()
        this.removeLastCategory()
        this.props.swiper.appendSlide(this.renderSingleCategory({ category: selectedCategoryFromPopup }))
      }
      this.selectCategory(selectedCategoryFromPopup)
    }
    this._state.selectedCategoryFromPopup = undefined
  }

  selectCategory (selectedCategory = null) {
    const $kitchenBar = document.querySelector(`.${this._classSelector.JS_KITCHEN_BAR}`)
    const $currentSelection = $kitchenBar.querySelector(`.${this._classSelector.JS_SELECTED_CATEGORY}`)
    let $selectedCategory
    let slideToIndex

    // De-select current selection, if present
    if ($currentSelection) {
      $currentSelection.classList.remove(this._classSelector.JS_SELECTED_CATEGORY)
    }

    if (selectedCategory === null) {
      // Select All is clicked
      $selectedCategory = $kitchenBar.querySelector(`.${this._classSelector.JS_SELECT_ALL}`)
      slideToIndex = 0
    } else {
      $selectedCategory = $kitchenBar.querySelector(`[data-value="${selectedCategory.categoryId}"]`)
      slideToIndex = this._state.defaultCategories.findIndex((category) => category.categoryId === Number(selectedCategory.categoryId))

      if (!this._state.defaultCategories.includes(selectedCategory)) {
        this._state.extraCategoryAtTheEnd = selectedCategory
        slideToIndex = this._state.defaultCategories.length
      }
    }

    if ($selectedCategory) {
      $selectedCategory.classList.add(this._classSelector.JS_SELECTED_CATEGORY)
    }

    if (Number(slideToIndex) >= 0) {
      this._state.slideToIndex = slideToIndex
    }
  }

  /**
   * Render function for "Select All" button at the beginning
   */
  renderSelectAll = () => `
    <a
      data-type="${this._dataTypeSelector}"
      data-value="reset"
      data-icon=""
      class="
        filter-label
        filter-reset
        ${this._classSelector.SLIDE}
        ${this._classSelector.SELECT_ALL}
        ${this._classSelector.JS_SELECT_ALL}
      "
      href="${this._state.selectAllUrl}"
    ><span class="swiper-slide__context">${this._translations.selectAllText}</span></a>
  `

  /**
   * Render function for single kitchen type
   */
  renderSingleCategory = ({ category }) => `
    <a
      data-type="${this._dataTypeSelector}"
      data-value="${category.categoryId}"
      data-icon="${category.icon}"
      class="
        filter-label
        subcatlink
        ${this._classSelector.SLIDE}
        ${this._classSelector.CATEGORY}
        ${this._classSelector.JS_CATEGORY}
      "
      href="${category.href}"
      alt="${category.altText}"
    >
      <span class="swiper-slide__context">${category.categoryText}</span>
    </a>
  `

  /**
   * Render function for "Show More" button at the end
   */
  renderShowMore = () => `
    <a
      class="
        ${this._classSelector.SLIDE}
        ${this._classSelector.SHOW_MORE}
        ${this._classSelector.JS_SHOW_MORE}
      "
      alt="${this._translations.showMoreText}"
    >
      <span class="swiper-slide__context">${this._translations.showMoreText}</span>
    </a>
  `

  /**
   * Scroll to the next "page" of categories
   */
  slideToNext = () => {
    let nextIndex = this.props.swiper.activeIndex + 1
    if (nextIndex <= this.props.swiper.slides.length) {
      this.props.swiper.slideTo(nextIndex)
    } else {
      this.slideToEnd()
    }
  }

  /**
   * Scroll to the previous "page" of categories
   */
  slideToPrevious = () => {
    let previousIndex = this.props.swiper.activeIndex - 1
    if (previousIndex >= 0) {
      this.props.swiper.slideTo(previousIndex)
    } else {
      this.slideToStart()
    }
  }

  /**
   * Scroll to the first element
   */
  slideToStart = () => {
    this.props.swiper.slideTo(0)
  }

  /**
   * Scroll to the last element
   */
  slideToEnd = () => {
    this.props.swiper.slideTo(this.props.swiper.slides.length)
  }

  removeShowMoreButton = () => {
    const lastButtonIndex = [
      ...document.querySelectorAll(`.${this._classSelector.JS_KITCHEN_BAR} .${this._classSelector.SLIDE}`)
    ].findIndex((category) => category.classList.contains(`${this._classSelector.JS_SHOW_MORE}`))

    if (lastButtonIndex > 0) {
      this.props.swiper.removeSlide(lastButtonIndex)
    }
  }

  removeLastCategory = () => {
    const lastCategoryIndex = [
      ...document.querySelectorAll(`.${this._classSelector.JS_KITCHEN_BAR} .${this._classSelector.SLIDE}:not(.${this._classSelector.JS_SHOW_MORE})`)
    ].length

    if (lastCategoryIndex) {
      this.props.swiper.removeSlide(lastCategoryIndex - 1)
      this._state.extraCategoryAtTheEnd = undefined
    }
  }

  getCategoryByName = (categoryName) => this._state.allCategories.find(
    ({ categoryText }) => categoryText === categoryName
  ) || null

  getCategoryBySlug = (categorySlug) => this._state.allCategories.find(
    ({ cwSlug }) => cwSlug === categorySlug) || null

  getCategoryById = (categoryId) => this._state.allCategories.find(
    category => category.categoryId === categoryId
  ) || null

  getAllCategoryNames = () => {
    return this._state.allCategories.map((category) => category.categoryText)
  }

  openShowMore = () => {
    // Open the popup
    this.popup = new Popup({
      headerContent: `
        <div class="js-header-content">
          <h1 class="tv-popup__header-text">${this._translations.allCategories}</h1>
        </div>
      `,
      mainContent: '',
      openCallback: this.addContentToPopup,
      closeCallback: () => {
        this.sendClosedPopupEvent({
          searchString: piiDataReplacer({ data: this._state.searchString }),
          countRestaurantShown: (typeof getRestaurantCount === 'function') ? getRestaurantCount() : undefined
        })
      }
    })
    this.popup.render()
    this.sendHasClickedMoreKitchenTypesEvent()
  }

  addContentToPopup = () => {
    const { JS_KITCHEN_BAR_CONTAINER, JS_POPUP_HEADER, JS_SELECTED_CATEGORY } = this._classSelector
    let resetSearch
    const selectedItems = [...document.querySelectorAll(`.${JS_KITCHEN_BAR_CONTAINER} .${JS_SELECTED_CATEGORY}`)].map(
      $selectedCategory => $selectedCategory.innerText.trim()
    )

    const $chipsLocation = this.popup.getMainContent()
    const chipList = new ChipsList({
      $container: $chipsLocation,
      chipsList: this.getAllCategoryNames(),
      defaultSelected: selectedItems,
      selectAllText: this._translations.selectAllText,
      selectedCallback: ([itemText]) => {
        const selectedCategory = this.getCategoryByName(itemText)

        this.sendHasFilteredKitchenTypeEvent({
          kitchenTypeID: (selectedCategory === null)
            ? 0
            : Number(selectedCategory.categoryId),
          kitchenTypeLocation: 'popup',
          kitchenTypePosition: undefined
        })

        if (
          selectedCategory === null || (
            this._state.extraCategoryAtTheEnd === selectedCategory &&
            selectedItems.includes(itemText)
          )
        ) {
          // User clicked "Select All" or Active Category on pop-up
          this._state.selectedCategoryFromPopup = null

          toggleHashUrl(this._dataTypeSelector, 'reset')
        } else {
          // User clicked a valid category on pop-up
          this._state.selectedCategoryFromPopup = selectedCategory

          toggleHashUrl(this._dataTypeSelector, selectedCategory.categoryId)
        }

        this.render()

        // Make the closing more visual
        setTimeout(() => {
          this.popup.closePopup()
        }, 200)
      },
      noResultsText: this._translations.noCategoriesText,
      position: 'beforeend',
      resetCallback: resetSearch
    })
    chipList.render()
    // @TODO: Move this logic to initialization of ChipsList with a parameter resetSearchText for the component
    $chipsLocation.querySelector(`.${this._classSelector.NO_RESULTS_BUTTON}`).textContent = this._translations.resetSearch

    document.querySelectorAll(`.${JS_POPUP_HEADER}`).forEach(($container) => {
      let hasStartedSearch = false
      const searchBox = new SearchBox({
        $container: $container,
        placeholderText: this._translations.searchCategories,
        searchChangeFn: (searchValue) => {
          chipList.filterChips(searchValue)
          if (searchValue) {
            this._state.searchString = searchValue

            if (searchValue.length === 1 && !hasStartedSearch) {
              hasStartedSearch = true
              this.sendHasStartedSearching()
            }
            if (!chipList.checkIfHasResults()) {
              this.sendNoSearchResultsEvent({
                searchString: piiDataReplacer({ data: searchValue })
              })
            }
          } else {
            if (this._state.searchString && this._state.searchString.length > 0) {
              this.sendHasResetSearching()
            }
            this._state.searchString = undefined
            hasStartedSearch = false
          }
        },
        innerContent: '',
        position: 'beforeend'
      })
      searchBox.render()
      chipList.focusSelected()
      resetSearch = () => searchBox.setSearch({ newValue: '' })
    })
  }

  /**
   * Checks if all slides are visible
   */
  checkIfAllSlidesAreVisible = () => {
    const { $wrapperEl } = this.props.swiper

    const containerWidth = $wrapperEl.outerWidth()

    let currentWidth = 0

    $wrapperEl.find('.swiper-slide').each(function () { currentWidth += this.offsetWidth })

    return currentWidth <= containerWidth
  }

  /**
   * Decides when to enable/disable swiping
   */
  setSwipingClass = () => {
    if (this.checkIfAllSlidesAreVisible() === true) {
      this.disableSwiping()
    } else {
      this.enableSwiping()
    }
  }

  /**
   * Enables swiping
   */
  enableSwiping = () => {
    const { $el, params: { noSwipingClass } } = this.props.swiper
    $el.removeClass(noSwipingClass)
  }

  /**
   * Disables swiping
   */
  disableSwiping = () => {
    const { $el, params: { noSwipingClass } } = this.props.swiper
    $el.addClass(noSwipingClass)
  }

  /**
   * Tracking
   */

  sendNoSearchResultsEvent = ({ searchString }) => trackingService.send({
    eventName: 'hasNoSearchResults',
    eventData: {
      searchString,
      searchType: 'kitchenfilter'
    }
  })

  sendClosedPopupEvent = ({ searchString, countRestaurantShown }) => trackingService.send({
    eventName: 'hasClosedKitchenFilterPopup',
    eventData: {
      searchString,
      countRestaurantShown
    }
  })

  sendHasStartedSearching = () => trackingService.send({
    eventName: 'hasStartedSearching',
    eventData: {
      searchType: 'kitchenfilter'
    }
  })

  sendHasResetSearching = () => trackingService.send({
    eventName: 'hasResetSearching',
    eventData: {
      searchType: 'kitchenfilter'
    }
  })

  addBarEventListeners = () => {
    const $selectAllButton = document.querySelector(`.${this._classSelector.JS_SELECT_ALL}`)
    if ($selectAllButton) {
      $selectAllButton.addEventListener('click', () => {
        this.sendHasFilteredKitchenTypeEvent({
          kitchenTypeID: 0,
          kitchenTypeLocation: 'bar',
          kitchenTypePosition: 0
        })
      })
    }

    const $$defaultCategories = document.querySelectorAll(`.${this._classSelector.JS_CATEGORY}`)
    if ($$defaultCategories.length > 0) {
      $$defaultCategories.forEach(($button, index) => $button.addEventListener('click', () => {
        this.sendHasFilteredKitchenTypeEvent({
          kitchenTypeID: Number($button.dataset.value),
          kitchenTypeLocation: 'bar',
          kitchenTypePosition: index + 1
        })
      }))
    }
  }

  sendHasFilteredKitchenTypeEvent = ({
    kitchenTypeID,
    kitchenTypeLocation,
    kitchenTypePosition
  }) => {
    const { lastSelectedKitchenType } = window.app.getState()
    if (lastSelectedKitchenType !== kitchenTypeID) {
      window.app.setState({
        lastSelectedKitchenType: kitchenTypeID
      })
      const eventToBeFired = () => {
        trackingService.send({
          eventName: 'hasFilteredKitchenType',
          eventData: {
            kitchenTypeID,
            kitchenTypeLocation,
            kitchenTypePosition,
            countRestaurantShown: (typeof getRestaurantCount === 'function') ? getRestaurantCount() : undefined
          }
        })
        // IE11 hack to only fire this event once, instead of using { once: true }
        window.removeEventListener(CUSTOM_EVENTS.VISIBLE_RESTAURANTS_COUNTER_UPDATED, eventToBeFired)
      }
      window.addEventListener(CUSTOM_EVENTS.VISIBLE_RESTAURANTS_COUNTER_UPDATED, eventToBeFired)
    }
  }

  sendHasClickedMoreKitchenTypesEvent = () => {
    trackingService.send({
      eventName: 'hasClickedMoreKitchenTypes'
    })
  }
}
