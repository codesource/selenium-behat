<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Behat\Tester\Exception\PendingException;
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
trait MobileDictionary
{
    /**
     * Swipe from element having for given selector this given locator to element
     *
     * @param string $aType
     * @param string $aAccessName
     * @param string $bType
     * @param string $bAccessName
     *
     * @Them /^I swipe from element having (?P<aType>id|class|css|named|xpath) "(?P<aAccessName>.*?)" to element having (?P<bType>id|class|css|named|xpath) "(?P<bAccessName>.*?)"$/
     */
    public function iSwipeFromElementHavingSelectorLocatorToElementHavingSelectorLocator(
        $aType,
        $aAccessName,
        $bType,
        $bAccessName
    ) {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe from given coordinates to given coordinates
     *
     * @param int $startX
     * @param int $startY
     * @param int $endX
     * @param int $endY
     *
     * @Then /^I swipe from co\-ordinates (?P<startX>\d+)(?:x|,)(?P<startY>\d+) to co\-ordinates (?P<endX>\d+)(?:x|,)(?P<endY>\d+)$/
     */
    public function iSwipeFromCoordinatesToCoordinates($startX, $startY, $endX, $endY)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe left
     *
     * @Then /^I swipe left$/
     */
    public function iSwipeLeft()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe right
     *
     * @Then /^I swipe right$/
     */
    public function iSwipeRight()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe up
     *
     * @Then /^I swipe up$/
     */
    public function iSwipeUp()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe down
     *
     * @Then /^I swipe down$/
     */
    public function iSwipeDown()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe element having for given selector this given locator to left
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I swipe element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" to left$/
     */
    public function iSwipeElementHavingSelectorLocatorToLeft($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe element having for given selector this given locator to right
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I swipe element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" to right$/
     */
    public function iSwipeElementHavingSelectorLocatorToRight($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe element having for given selector this given locator to up
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I swipe element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" to up$/
     */
    public function iSwipeElementHavingSelectorLocatorToUp($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe element having for given selector this given locator to down
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I swipe element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" to down$/
     */
    public function iSwipeElementHavingSelectorLocatorToDown($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe from coordinates to left
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to left$/
     */
    public function iSwipeFromCoordinatesToLeft($x, $y)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe from coordinates to right
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to right$/
     */
    public function iSwipeFromCoordinatesToRight($x, $y)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe from coordinates to up
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to up$/
     */
    public function iSwipeFromCoordinatesToUp($x, $y)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Swipe from coordinates to down
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to down$/
     */
    public function iSwipeFromCoordinatesToDown($x, $y)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Long tap on element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I long (?:tap|press) on element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iLongTapOnElementHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Tap x seconds on element having for given selector this given locator for x seconds
     *
     * @param string $selector
     * @param string $locator
     * @param float $seconds
     *
     * @Then /^I long (?:tap|press) on element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" for "(?P<seconds>.*?)" sec(?;onds?)$/
     */
    public function iLongTapOnElementHavingSelectorLocatorForXSeconds($selector, $locator, $seconds)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Long tap on given coordinates
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I long (?:tap|press) on co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+)$/
     */
    public function iLongTapOnCoordinates($x, $y)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Long tap on given coordinates for x seconds
     *
     * @param int $x
     * @param int $y
     * @param float $seconds
     *
     * @Then /^I long (?:tap|press) on co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) for "(?P<seconds>.*?)" sec(?;onds?)$/
     */
    public function iLongTapOnCoordinatesForXSeconds($x, $y, $seconds)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Close app
     *
     * @Then /^I close app(?:lication)$/
     */
    public function iCloseApp()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Tap on back button of device
     *
     * @Then /^I (?:tap|press) on back button of device$/
     */
    public function iTapOnBackButtonOfDevice()
    {
        // TODO: Implement this step
        throw new PendingException();
    }
}