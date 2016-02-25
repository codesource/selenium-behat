<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;


trait ClickElementsDictionary
{

    /**
     * Click on element having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I click on element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iClickOnElementHavingTypeAndAccessName($type, $accessName){

    }

    /**
     * Forcefully click on element having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I forcefully click on element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iForcefullyClickOnElementHavingTypeAndAccessName($type, $accessName){

    }

    /**
     * Double click on element having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I double click on element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iDoubleClickOnElementHavingTypeAndAccessName($type, $accessName){

    }

    /**
     * Click on link having given text
     *
     * @param $text
     *
     * @Then /^I click on link having text "(?P<text>.*?)"$/
     */
    public function iClickOnLinkHavingText($text){

    }

    /**
     * Click on link having given partial text
     *
     * @param $text
     *
     * @Then /^I click on link having partial text "(?P<text>.*?)"$/
     */
    public function iClickOnLinkHavingPartialText($text){

    }


    /**
     * Tap on element having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I (?:tap|press) on element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iTapOnElementHavingTypeAndAccessName($type, $accessName){

    }

}