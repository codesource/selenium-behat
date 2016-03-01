<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;

/**
 * ClickElementsDictionary for selenium with Behat
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
trait ClickElementsDictionary
{

    /**
     * Click on element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I click on element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iClickOnElementHavingSelectorLocator($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->getSession()->getPage()->find($selector, $locator)->click();
    }

    /**
     * Forcefully click on element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I forcefully click on element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iForcefullyClickOnElementHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Double click on element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I double click on element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iDoubleClickOnElementHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Click on link having given text
     *
     * @param $text
     *
     * @Then /^I click on link having text "(?P<text>.*?)"$/
     */
    public function iClickOnLinkHavingText($text)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Click on link having given partial text
     *
     * @param $text
     *
     * @Then /^I click on link having partial text "(?P<text>.*?)"$/
     */
    public function iClickOnLinkHavingPartialText($text)
    {
        // TODO: Implement this step
        throw new PendingException();
    }


    /**
     * Tap on element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I (?:tap|press) on element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iTapOnElementHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

}