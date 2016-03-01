/**
 * Scroll page to dom element by given xpath
 *
 * @param {string} xpath
 * @param {boolean} forceBottom
 */
window.sBehat.context = {
    scrollToElementByXpath: function (xpath, forceBottom) {
        var element = window.sBehat.getElementByXpath(xpath);
        if (element) {
            element.scrollIntoView(!forceBottom);
        }
    }
};