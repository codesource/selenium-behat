    window.sBehat.ajaxCalls = new function () {
        var self = this,
            calls = [];

        /**
         * Store an ajax call
         *
         * @param {number} statusCode
         * @param {string} statusText
         */
        this.store = function (statusCode, statusText) {
            calls.push({
                code: statusCode,
                text: statusText
            })
        };

        /**
         * Pop an item from end of array
         *
         * @returns {object}
         */
        this.pop = function () {
            return calls.length > 0 ? calls.pop() : {code: -1, text: ''};
        }

        /**
         * Pop an item from end of array
         *
         * @returns {object}
         */
        this.shift = function () {
            return calls.length > 0 ? calls.shift() : {code: -1, text: ''};
        }

        this.calls = function () {
            return calls;
        }
    };
