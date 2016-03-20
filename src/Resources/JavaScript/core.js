// Make sure this is not loaded multiple time in same page
if(window.sBehat === undefined) {
    window.sBehat = {

        /**
         * Is given dom element visible for user?
         *
         * @param {Element} element
         *
         * @returns {boolean}
         */
        isElementVisibleForUser: function (element) {
            if (!element) {
                return false;
            }
            var style = window.getComputedStyle(element);
            return style.width !== 0 &&
                style.height !== 0 &&
                style.opacity !== 0 &&
                style.display !== 'none' &&
                style.visibility !== 'hidden';
        },

        /** Get all dom elements corresponding to given xpath
         *
         * @param {string} xpath
         *
         * @returns {Array}
         */
        getElementsByXpath: function (xpath) {
            if (document.evaluate) {
                var nodes = [],
                    xpathResult = document.evaluate(xpath, document, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null),
                    current;
                while (current = xpathResult.iterateNext()) {
                    nodes[nodes.length] = current;
                }
                return nodes;
            } else if (document.selectNodes) {
                return document.selectNodes(xpath);
            } else {
                throw "document.evaluate is not available for this browser";
            }
        },

        /**
         * Get first dom element corresponding to given xpath
         *
         * @param {string} xpath
         *
         * @returns {Element}
         */
        getElementByXpath: function (xpath) {
            var nodes = this.getElementsByXpath(xpath);
            return nodes.length > 0 ? nodes[0] : null;
        },

        /**
         * Get first visible dom element corresponding to given xpath
         *
         * @param {string} xpath
         *
         * @returns {Array}
         */
        getVisibleElementsByXpath: function (xpath) {
            var elements = this.getElementsByXpath(xpath),
                nodes = [];

            for (var key in elements) {
                if (elements.hasOwnProperty(key) && this.isElementVisibleForUser(elements[key])) {
                    nodes[nodes.length] = elements[key];
                }
            }

            return nodes;
        },

        /**
         * Get first visible dom element corresponding to given xpath
         *
         * @param {string} xpath
         *
         * @returns {Element}
         */
        getVisibleElementByXpath: function (xpath) {
            var nodes = this.getVisibleElementsByXpath(xpath);
            return nodes.length > 0 ? nodes[0] : null;
        }
    };
}