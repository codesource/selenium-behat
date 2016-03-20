// Make sure this is not loaded multiple time in same page
if(window.sBehat === undefined || window.sBehat.context === undefined) {
    window.sBehat.context = {
        /**
         * Scroll page to dom element by given xpath
         *
         * @param {string} xpath
         * @param {boolean} forceBottom
         */
        scrollToElementByXpath: function (xpath, forceBottom) {
            var element = window.sBehat.getElementByXpath(xpath);
            if (element) {
                element.scrollIntoView(!forceBottom);
            }
        }
    };
}