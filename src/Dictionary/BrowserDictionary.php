<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Mink\Mink;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;

/**
 * MobileDictionary for selenium with Behat
 *
 * @method Mink getMink()
 * @method array getMinkParameters()
 * @method void setMinkParameters(array $parameters)
 * @method mixed getMinkParameter($name)
 * @method void setMinkParameter($name, $value)
 * @method Session getSession($name = null)
 * @method WebAssert assertSession($session = null)
 */
trait BrowserDictionary
{
    /**
     * Clear all browser cookies
     *
     * @Then /^I clear all cookies$/
     */
    public function iClearAllCookies()
    {
        $this->getMink()->resetSessions();
    }

    /**
     * Clear all browser cookies for Url
     *
     * @Then /^I clear all cookies for "(?P<link>.*?)"$/
     */
    public function iClearAllCookiesForUrl($link)
    {
        if (preg_match('/^https?:\/\//', $link)) {
            $this->getSession()->visit($link);
        } else {
            $this->getSession()->visit($this->getMinkParameter('base_url') . $link);
        }
        $this->getMink()->resetSessions();
    }
}