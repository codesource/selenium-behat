<?php
/**
 * @copyright Copyright (c) 2016 Weekup
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Mink\Exception\ExpectationException;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;

/**
 * MobileDictionary for selenium with Behat
 *
 * @method array getMinkParameters()
 * @method void setMinkParameters(array $parameters)
 * @method mixed getMinkParameter($name)
 * @method void setMinkParameter($name, $value)
 * @method Session getSession($name = null)
 * @method WebAssert assertSession($session = null)
 * @method string getPageTitle()
 * @method void closeCurrentWindow()
 * @method void convertSelectorAndLocator(&$selector, &$locator)
 */
trait JQueryDictionary
{
    /**
     * Wait for jQuery to be loaded (20 seconds)
     *
     * @Then /^I wait for jQuery to be loaded$/
     *
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function iWaitForJqueryToBeLoaded()
    {
        if (!$this->getSession()->wait(20000, 'typeof(jQuery)=="undefined"')) {
            throw new ExpectationException('jQuery is not loaded after 20 seconds', $this->getSession()->getDriver());
        }
    }

    /**
     * Wait for Ajax call to be done using jQuery
     *
     * @param float $seconds
     *
     * @Then /^I wait Ajax call to end(?: using jQuery)?(?: for (?P<seconds>\d+(?:\.\d+)?) sec(?:onds?)?)?$/
     *
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function iWaitForAjaxUsingJqueryForXSeconds($seconds = 10.0)
    {
        $seconds = (float)$seconds <= 0 ? 10.0 : $seconds;
        $condition = '(typeof(jQuery)=="undefined" || (0 === jQuery.active && 0 === jQuery(\':animated\').length))';
        if (!$this->getSession()->wait($seconds * 1000, $condition)) {
            $message = sprintf('jQuery is not loaded or ajax call is still active after %s seconds', $seconds);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
    }
}