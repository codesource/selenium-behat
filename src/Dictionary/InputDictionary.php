<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;


trait InputDictionary
{
    /**
     * Enter given text into input field having for given type this given access name
     *
     * @param string $text
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I enter "(?P<text>.*?)" into input field having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iEnterTextIntoInputFieldHavingTypeAndAccessName($text, $type, $accessName)
    {

    }

    /**
     * Clear input field having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I clear input field having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iClearInputFieldHavingTypeAndAccessName($type, $accessName)
    {

    }

    /**
     * Select option from dropdown having for given type this given access name
     *
     * @param string $value
     * @param string $attribute
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I select option "(?P<value>.*?)" by (?P<attribute>text|value|index) from dropdown having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iSelectOptionFromDropdownHavingTypeAndAccessName($value, $attribute, $type, $accessName)
    {

    }

    /**
     * Select all options from multiselect dropdown having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I select all options from multiselect dropdown having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iSelectAllOptionsFromMultiselectDropdownHavingTypeAndAccessName($type, $accessName)
    {

    }


    /**
     * Unselect all options from multiselect dropdown having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I unselect all options from multiselect dropdown having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iUnselectAllOptionsFromMultiselectDropdownHavingTypeAndAccessName($type, $accessName)
    {

    }

    /**
     * Check the checkbox having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I check the checkbox having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iCheckTheCheckboxHavingTypeAndAccessName($type, $accessName)
    {

    }


    /**
     * Uncheck the checkbox having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I uncheck the checkbox having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iUncheckTheCheckboxHavingTypeAndAccessName($type, $accessName)
    {

    }


    /**
     * Toggle the checkbox having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I toggle the checkbox having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iToggleTheCheckboxHavingTypeAndAccessName($type, $accessName)
    {

    }

    /**
     * Select radio button having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I select radio button having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iSelectRadioButtonHavingTypeAndAccessName($type, $accessName)
    {

    }

    /**
     * Select option from radio button group having for given type this given access name
     *
     * @param string $value
     * @param string $attribute
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I select option "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iSelectOptionFromRadioButtonGroupHavingTypeAndAccessName($value, $attribute, $type, $accessName)
    {

    }
}