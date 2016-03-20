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
trait MouseDictionary
{

    /**
     * Move mouse on element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I move mouse over element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iMoveMouseOverElementHavingSelectorLocator($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $this->getSession()->getPage()->find($selector, $locator)->mouseOver();
    }

}