<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;


trait MobileDictionary
{
    /**
     * Swipe from element having for given type this given access name to element
     *
     * @param string $aType
     * @param string $aAccessName
     * @param string $bType
     * @param string $bAccessName
     *
     * @Them /^I swipe from element having (?P<aType>id|class|css|name|xpath) "(?P<aAccessName>.*?)" to element having (?P<bType>id|class|css|name|xpath) "(?P<bAccessName>.*?)"$/
     */
    public function iSwipeFromElementHavingTypeAndAccessNameToElementHavingTypeAndAccessName($aType, $aAccessName, $bType, $bAccessName){

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
    public function iSwipeFromCoordinatesToCoordinates($startX, $startY, $endX, $endY){

    }

    /**
     * Swipe left
     *
     * @Then /^I swipe left$/
     */
    public function iSwipeLeft(){

    }

    /**
     * Swipe right
     *
     * @Then /^I swipe right$/
     */
    public function iSwipeRight(){

    }

    /**
     * Swipe up
     *
     * @Then /^I swipe up$/
     */
    public function iSwipeUp(){

    }

    /**
     * Swipe down
     *
     * @Then /^I swipe down$/
     */
    public function iSwipeDown(){

    }

    /**
     * Swipe element having for given type this given access name to left
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I swipe element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" to left$/
     */
    public function iSwipeElementHavingTypeAndAccessNameToLeft($type, $accessName){

    }

    /**
     * Swipe element having for given type this given access name to right
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I swipe element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" to right$/
     */
    public function iSwipeElementHavingTypeAndAccessNameToRight($type, $accessName){

    }

    /**
     * Swipe element having for given type this given access name to up
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I swipe element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" to up$/
     */
    public function iSwipeElementHavingTypeAndAccessNameToUp($type, $accessName){

    }

    /**
     * Swipe element having for given type this given access name to down
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I swipe element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" to down$/
     */
    public function iSwipeElementHavingTypeAndAccessNameToDown($type, $accessName){

    }

    /**
     * Swipe from coordinates to left
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to left$/
     */
    public function iSwipeFromCoordinatesToLeft($x, $y){

    }

    /**
     * Swipe from coordinates to right
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to right$/
     */
    public function iSwipeFromCoordinatesToRight($x, $y){

    }

    /**
     * Swipe from coordinates to up
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to up$/
     */
    public function iSwipeFromCoordinatesToUp($x, $y){

    }

    /**
     * Swipe from coordinates to down
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I swipe(?: from) co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+) to down$/
     */
    public function iSwipeFromCoordinatesToDown($x, $y){

    }

    /**
     * Long tap on element having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I long (?:tap|press) on element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iLongTapOnElementHavingTypeAndAccessName($type, $accessName){

    }

    /**
     * Tap x seconds on element having for given type this given access name for x seconds
     *
     * @param string $type
     * @param string $accessName
     * @param float $seconds
     *
     * @Then /^I long (?:tap|press) on element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" for "(?P<seconds>.*?)" sec(?;onds?)$/
     */
    public function iLongTapOnElementHavingTypeAndAccessNameForXSeconds($type, $accessName, $seconds){

    }

    /**
     * Long tap on given coordinates
     *
     * @param int $x
     * @param int $y
     *
     * @Then /^I long (?:tap|press) on co\-ordinates (?P<x>\d+)(?:x|,)(?P<y>\d+)$/
     */
    public function iLongTapOnCoordinates($x, $y){

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
    public function iLongTapOnCoordinatesForXSeconds($x, $y, $seconds){

    }

    /**
     * Close app
     *
     * @Then /^I close app(?:lication)$/
     */
    public function iCloseApp(){

    }

    /**
     * Tap on back button of device
     *
     * @Then /^I (?:tap|press) on back button of device$/
     */
    public function iTapOnBackButtonOfDevice(){

    }
}