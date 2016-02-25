<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;


trait ProgressDictionary
{

    /**
     * Wait for x seconds
     *
     * @param int $second
     *
     * @Then /^I wait for (?P<second>\d+) sec(?:onds?)?$/
     */
    public function iWaitForXSeconds($second){

    }

    /**
     * Wait x seconds for element having for given type this given access name to display
     *
     * @param int $second
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I wait (?P<second>\d+) seconds for element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" to display$/
     */
    public function iWaitXSecondsForElementHavingTypeAndAccessNameToDisplay($second, $type, $accessName){

    }

    /**
     * Wait x seconds for element having for given type this given access name to enable
     *
     * @param int $second
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I wait (?P<second>\d+) seconds for element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" to enable$/
     */
    public function iWaitXSecondsForElementHavingTypeAndAccessNameToEnable($second, $type, $accessName){

    }
}