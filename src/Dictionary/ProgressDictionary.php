<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Exception\ExpectationException;
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
 * @method bool isElementVisibleForUser($selector, $locator)
 */
trait ProgressDictionary
{

    /**
     * Wait for x seconds
     *
     * @param int $seconds
     *
     * @Then /^I wait for (?P<seconds>\d+(?:\.\d+)?) sec(?:onds?)?$/
     */
    public function iWaitForXSeconds($seconds)
    {
        $this->getSession()->wait($seconds * 1000);
    }

    /**
     * Wait x seconds for element having for given selector this given locator to display
     *
     * @param int $seconds
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I wait (?P<seconds>\d+(?:\.\d+)?) seconds for element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" to display$/
     *
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function iWaitXSecondsForElementHavingSelectorLocatorToDisplay($seconds, $selector, $locator)
    {
        $milliseconds = $seconds * 1000;
        $step = 200;
        while ($milliseconds > 0) {
            if ($this->isElementVisibleForUser($selector, $locator)) {
                return;
            }
            $this->getSession()->wait($milliseconds > $step ? $step : $milliseconds);
            $milliseconds -= $step;
        }
        $message = sprintf('After %s seconds element having %s "%s" is not visible for user.', $seconds, $selector,
            $locator);
        throw new ExpectationException($message, $this->getSession()->getDriver());
    }

    /**
     * Wait x seconds for element having for given selector this given locator to enable
     *
     * @param int $seconds
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I wait (?P<seconds>\d+(?:\.\d+)?) seconds for element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" to enable$/
     */
    public function iWaitXSecondsForElementHavingSelectorLocatorToEnable($seconds, $selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }
}