/**
 * MediaQuery Services
 *
 * @author Roy Spekreijse <roy.spekreijse@takeaway.com>
 *
 */

// KEEP THESE BREAKPOINTS UPTO DATE with the SASS breakpoints
// See App\Source\Sass\config\_config.scss
const breakPoints = {
  'mobile': 320,
  'tablet-portrait': 570,
  'tablet-landscape': 1004,
  'desktop': 1280
}
export default class MediaQueryService {
  /**
  * @param size1 {string}
  * @param size2 {optional string}
  * @returns {string}
  * sample app.mediaQueryService.respondTo('>=tablet-landscape', '<desktop')
  */
  respondTo (size1, size2) {
    const sizes = []
    if (size1) {
      sizes.push(size1)
    }
    if (size2) {
      sizes.push(size2)
    }
    if (sizes.length) {
      return sizes.every(size => {
        const comparer = size.replace(/[^<>=]/g, '')
        let breakpoint = breakPoints[size.replace(comparer, '')]
        if (!breakpoint) {
          throw new Error('Unknown breakpoint')
        }
        switch (comparer) {
          case '<':
            return window.innerWidth <= (breakpoint - 1)
          case '<=':
            return window.innerWidth <= breakpoint
          case '>':
            return window.innerWidth >= (breakpoint + 1)
          case '>=':
            return window.innerWidth >= breakpoint
          default:
            throw new Error('Unknown comparison')
        }
      })
    }
  }
}
