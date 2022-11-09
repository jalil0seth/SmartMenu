/**
 * KitchenBar Component
 *
 * @author Danny Verpoort <danny.verpoort@takeaway.com>
 */

import PropTypes from 'prop-types'
import { checkPropTypes } from '../lib/helpers'

export default class KitchenBar {
  _propTypes = {
    swiper: PropTypes.object.isRequired
  }

  constructor (data) {
    checkPropTypes(this._propTypes, data, 'prop', 'KitchenBar')
    this.props = Object.freeze(data)
  }

  init = () => {
    if (this.props.swiper.navigation.nextEl) {
      // Remove the current eventlistener
      this.props.swiper.navigation.destroy('NextClick')
      // Add the new eventlistener
      this.props.swiper.navigation.nextEl.addEventListener(
        'click',
        eventHandler => {
          eventHandler.preventDefault()
          this.slideNext()
        }
      )
    }

    if (this.props.swiper.navigation.prevEl) {
      // Remove the current eventlistener
      this.props.swiper.navigation.destroy('PreviousClick')
      // Add the new eventlistener
      this.props.swiper.navigation.prevEl.addEventListener(
        'click',
        eventHandler => {
          eventHandler.preventDefault()
          this.slidePrevious()
        }
      )
    }
    // Show the items in the kitchenbar
    this.props.swiper.$el[0].classList.add('visible')
    this.props.swiper.on('transitionEnd', () => {
      if (!this.props.swiper.isEnd) {
        this.props.swiper.slideToClosest()
      } else {
        this.props.swiper.slideTo(
          this.props.swiper.snapGrid.length - 1
        )
      }
    })

    this.props.swiper.on('resize', () => {
      this.props.swiper.update()
    })

    this.props.swiper.navigation.update()
    this.props.swiper.update()
  }

  /**
   * Scroll to the next "page" of slides
   */
  slideNext = () => {
    // slidesGrid has the left position of all elements able to scroll completely to the left side of the container
    // activeIndex is the first visible index
    const { slidesGrid, activeIndex, $wrapperEl, params: { spaceBetween } } = this.props.swiper
    // Current position of the first shown element + width of the container
    const scrollWidth = slidesGrid[activeIndex] + $wrapperEl.outerWidth()
    // Find the item which is positioned at the scrollWidth
    const foundIndex = slidesGrid.findIndex((position) => position - spaceBetween >= scrollWidth)
    const gotoIndex = foundIndex === -1
      ? slidesGrid.length - 1 // No index found goto the last slide
      : foundIndex - 2 // Goto the slide which is just before the found slide
    this.props.swiper.slideTo(gotoIndex)
  }

  /**
   * Scroll to the previous "page" of slides
   */
  slidePrevious = () => {
    // activeIndex is the first visible index
    // slidesGrid has the left position of all elements able to scroll completely to the left side of the container
    const { slidesGrid, $wrapperEl, activeIndex, params: { spaceBetween } } = this.props.swiper

    // Get the width of the kitchenBar
    const containerWidth = $wrapperEl.outerWidth()
    // Move from the found position minus the width of the container,
    // because we took the right side it should be fully visible
    let previousIndex = [...slidesGrid].findIndex((position) => {
      let index = activeIndex
      return position >= (slidesGrid[index + 1] - spaceBetween - containerWidth)
    })
    // Slide to the "previous" index
    this.props.swiper.slideTo(previousIndex)
  }
}
