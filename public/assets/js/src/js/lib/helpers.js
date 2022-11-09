import KeyCode from './../enums/keyCode'
import PropTypes from "prop-types";

// @TODO: Sort alphabetically


/**
 * A wrapper for checkPropTypes method from 'prop-types' package. Originally it logs errors on console. But in class
 * definitions we'd like to throw errors instead of logging. To not change 3rd party code, we temporarily overwrite
 * console.error(). If checkPropTypes return a value one day, we can remove this wrapper.
 *
 * @see https://github.com/facebook/prop-types/issues/169
 *
 * Original docs are below.
 *
 * Assert that the values match with the type specs.
 * Error messages are memorized and will only be shown once.
 *
 * @param {object} typeSpecs Map of name to a ReactPropType
 * @param {object} values Runtime values that need to be type-checked
 * @param {string} location e.g. "prop", "context", "child context"
 * @param {string} componentName Name of the component for error messages.
 * @param {?Function} getStack Returns the component stack.
 * @private
 */
export function checkPropTypes (typeSpecs, values, location, componentName, getStack = undefined) {
  const t = console.error
  console.error = msg => { throw new Error(msg) }
  // PropTypes.checkPropTypes() only console.error's a given message once. To reset the error warning cache in tests,
  // call PropTypes.resetWarningCache()
  PropTypes.resetWarningCache()
  PropTypes.checkPropTypes(typeSpecs, values, location, componentName, getStack)
  console.error = t
}


export function isObjEmpty (obj) {
  return Object.keys(obj).length === 0 && obj.constructor === Object
}

export function getMobileOS () {
  const userAgent = navigator.userAgent || navigator.vendor || window.opera
  return {
    isAndroid: () => /android/i.test(userAgent),
    isIOS: () => /iPad|iPhone|iPod/.test(userAgent) && !window.MSStream // iOS detection from: http://stackoverflow.com/a/9039885/177710
  }
}

/**
 * Throw a TypeError for a given type on a given subject.
 *
 * @param {string} subject
 * @param {string} expected
 * @param {*} actual
 */
export function throwTypeError (subject, expected, actual) {
  const type = ({}).toString.call(actual).split(' ')[1].slice(0, -1)
  throw new TypeError(`Given ${subject} must be of type "${expected}", "${type}" given`)
}

/**
 * Validate that all given keys are present in a given object
 *
 * @param {Object} obj
 * @param {Array} requiredKeys
 */
export function validateObjectKeys (obj, requiredKeys) {
  const missingKeys = requiredKeys.filter(item => !obj.hasOwnProperty(item))

  if (missingKeys.length) {
    throw new Error(`Missing required properties: ["${missingKeys.join('" ,"')}"]`)
  }
}

/**
 * Push a certain value to the user's clipboard.
 *
 * This is done by adding an invisible textarea, copying the value, removing the textarea and then re-select any
 * previous selections the user might have had.
 *
 * @param value
 * @param element
 */
export function copyToClipboard (value, element) {
  const el = document.createElement('textarea')
  el.value = value
  el.setAttribute('readonly', '')
  el.style.position = 'absolute'
  el.style.left = '-99999px'
  let addToElement = document.body
  // Prevents scrolling in IE
  if (element && typeof element.appendChild === 'function') {
    addToElement = element
  }
  addToElement.appendChild(el)
  const selected =
    document.getSelection().rangeCount > 0
      ? document.getSelection().getRangeAt(0)
      : false

  if (getMobileOS().isIOS()) {
    // on iOS we need to take a different approach selecting the text
    // https://gist.github.com/rproenca/64781c6a1329b48a455b645d361a9aa3
    el.setSelectionRange(0, 999999)
  } else {
    el.select()
  }

  document.execCommand('copy')
  addToElement.removeChild(el)
  if (selected) {
    document.getSelection().removeAllRanges()
    document.getSelection().addRange(selected)
  }
}

/**
 * Do a callback function after the DOM is ready.
 * @param fn
 */
export function ready (fn) {
  if (document.readyState !== 'loading') {
    fn()
  } else {
    document.addEventListener('DOMContentLoaded', fn)
  }
}

/**
 * Do a callback function after the Window is loaded.
 * @param fn
 */
export function onWindowLoad (fn) {
  window.addEventListener('load', fn)
}

/**
 * While using tabs in a modal the focus might go back to the elements outside
 * This function keeps the focus inside the modal
 * @param element
 */
export function keepFocusWithinModal ({ modalElement }) {
  if (modalElement.querySelector('.not-focus-modal')) {
    return
  }
  let focusableElements = Array.from(modalElement.querySelectorAll(`
    a[href]:not([disabled]),
    button:not([disabled]),
    textarea:not([disabled]),
    input[type="text"]:not([disabled]),
    input[type="radio"]:not([disabled]),
    input[type="checkbox"]:not([disabled]),
    select:not([disabled]),
    [tabindex]
  `)).filter(element => {
    return element.offsetWidth > 0 && element.offsetHeight > 0
  })

  focusableElements = focusableElements.filter(element => {
    // Check if element is visible
    if (element.offsetWidth > 0 && element.offsetHeight > 0) {
      return true
    }
  })

  const lastFocusableElement = focusableElements[focusableElements.length - 1]
  const firstFocusableElement = focusableElements[0]

  lastFocusableElement.addEventListener('keydown', (event) => {
    if (event.keyCode === KeyCode.TAB && !event.shiftKey) {
      event.preventDefault()
      event.stopPropagation()
      firstFocusableElement.focus()
    }
  })

  firstFocusableElement.addEventListener('keydown', (event) => {
    if (event.keyCode === KeyCode.TAB && event.shiftKey) {
      event.preventDefault()
      event.stopPropagation()
      lastFocusableElement.focus()
    }
  })

  firstFocusableElement.focus()
}

export function generateGuid () {
  return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, (c) => {
    const r = Math.random() * 16 | 0; const v = c === 'x' ? r : (r & 0x3 | 0x8)
    return v.toString(16)
  })
}

export function isStringJSON (str) {
  try {
    JSON.parse(str)
  } catch (e) {
    console.error('FAILED: isStringJSON()')
    return false
  }
  return true
}

/**
 * Step 1: Feed me array of selectors.
 * Step 2: Destructure.
 * Step 3: ???
 * Step 4: Profit!
 *
 * @param selectors
 * @returns array
 */
export const queryMultipleSelectors = (selectors) => {
  return selectors.map(selector => document.querySelector(selector))
}
