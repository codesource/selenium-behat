<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;


use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;

/**
 * ProgressDictionary for selenium with Behat
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
trait ScreenshotDictionary
{

    /**
     * Take a screenshot
     *
     * @Then /^I take screenshot$/
     */
    public function iTakeAScreenshot()
    {
        // TODO: Implement this step
        throw new PendingException();
    }
}