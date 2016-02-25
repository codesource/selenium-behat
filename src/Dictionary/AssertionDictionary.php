<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use CDSRC\Selenium\Behat\Context\RawContext;

trait AssertionDictionary
{
    use RawContext;

    /**
     * Should see page title as given title
     *
     * @param string $title
     *
     * @Then /^I should see page title as "(?P<title>.*?)"$/
     */
    public function iShouldSeePageTitleAs($title)
    {
        $this->assertSession()->elementTextEquals('xpath', 'html head title', '^' . $title . '$');
    }

    /**
     * Should not see page title as given title
     *
     * @param string $title
     *
     * @Then /^I should not see page title as "(?P<title>.*?)"$/
     */
    public function iShouldNotSeePageTitleAs($title)
    {
        $this->assertSession()->elementTextNotEquals('xpath', 'html head title', '^' . $title . '$');
    }

    /**
     * Should see page title having partial given text
     *
     * @param string $text
     *
     * @Then /^I should see page title having partial text as "(?P<text>.*?)"$/
     */
    public function iShouldSeePageTitleHavingPartialTextAs($text)
    {
        $this->assertSession()->elementTextContains('xpath', 'html head title', $text);
    }

    /**
     * Should not see page title having partial given text
     *
     * @param string $text
     *
     * @Then /^I should not see page title having partial text as "(?P<text>.*?)"$/
     */
    public function iShouldNotSeePageTitleHavingPartialTextAs($text)
    {
        $this->assertSession()->elementTextNotContains('xpath', 'html head title', $text);
    }

    /**
     * Element having for given type this given access name should have given text
     *
     * @param string $type
     * @param string $accessName
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should have text as "(?P<text>.*?)"$/
     */
    public function elementHavingTypeAndAccessNameShouldHaveTextAs($type, $accessName, $text)
    {

    }

    /**
     * Element having for given type this given access name should not have given text
     *
     * @param string $type
     * @param string $accessName
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should not have text as "(?P<text>.*?)"$/
     */
    public function elementHavingTypeAndAccessNameShouldNotHaveTextAs($type, $accessName, $text)
    {

    }

    /**
     * Element having for given type this given access name should have given partial text
     *
     * @param string $type
     * @param string $accessName
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should have partial text as "(?P<text>.*?)"$/
     */
    public function elementHavingTypeAndAccessNameShouldHavePartialTextAs($type, $accessName, $text)
    {

    }

    /**
     * Element having for given type this given access name should not have given partial text
     *
     * @param string $type
     * @param string $accessName
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should not have partial text as "(?P<text>.*?)"$/
     */
    public function elementHavingTypeAndAccessNameShouldNotHavePartialTextAs($type, $accessName, $text)
    {

    }

    /**
     * Element having for given type this given access name should have for given attribute this given value
     *
     * @param string $type
     * @param string $accessName
     * @param string $attribute
     * @param string $value
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should have attribute "(?P<attribute>.*?)" with value "(?P<value>.*?)"$/
     */
    public function elementHavingTypeAndAccessNameShouldHaveAttributeWithValue($type, $accessName, $attribute, $value)
    {

    }

    /**
     * Element having for given type this given access name should not have for given attribute this given value
     *
     * @param string $type
     * @param string $accessName
     * @param string $attribute
     * @param string $value
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should not have attribute "(?P<attribute>.*?)" with value "(?P<value>.*?)"$/
     */
    public function elementHavingTypeAndAccessNameShouldNotHaveAttributeWithValue(
        $type,
        $accessName,
        $attribute,
        $value
    ) {

    }

    /**
     * Element having for given type this given access name should be enabled
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be enabled$/
     */
    public function elementHavingTypeAndAccessNameShouldBeEnabled($type, $accessName)
    {

    }

    /**
     * Element having for given type this given access name should not be enabled
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should not be enabled$/
     */
    public function elementHavingTypeAndAccessNameShouldNotBeEnabled($type, $accessName)
    {

    }

    /**
     * Element having for given type this given access name should be disabled
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be disabled$/
     */
    public function elementHavingTypeAndAccessNameShouldBeDisabled($type, $accessName)
    {

    }

    /**
     * Element having for given type this given access name should not be disabled
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should not be disabled$/
     */
    public function elementHavingTypeAndAccessNameShouldNotBeDisabled($type, $accessName)
    {

    }

    /**
     * Element having for given type this given access name should be present
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be present$/
     */
    public function elementHavingTypeAndAccessNameShouldBePresent($type, $accessName)
    {

    }

    /**
     * Element having for given type this given access name should not be present
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:e|E)lement having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should not be present$/
     */
    public function elementHavingTypeAndAccessNameShouldNotBePresent($type, $accessName)
    {

    }

    /**
     * Checkbox having for given type this given access name should be checked
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:c|C)heckbox having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be checked$/
     */
    public function checkboxHavingTypeAndAccessNameShouldBeChecked($type, $accessName)
    {

    }


    /**
     * Checkbox having for given type this given access name should be unchecked
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:c|C)heckbox having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be unchecked$/
     */
    public function checkboxHavingTypeAndAccessNameShouldBeUnchecked($type, $accessName)
    {

    }

    /**
     * Radio button having for given type this given access name should be selected
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:r|R)adio button having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be selected$/
     */
    public function radioButtonHavingTypeAndAccessNameShouldBeSelected($type, $accessName)
    {

    }

    /**
     * Radio button having for given type this given access name should be unselected
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:r|R)adio button having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be unselected$/
     */
    public function radioButtonHavingTypeAndAccessNameShouldBeUnselected($type, $accessName)
    {

    }

    /**
     * Option from radio button group having for given type this given access name should be selected
     *
     * @param string $value
     * @param string $attribute
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be selected$/
     */
    public function optionFromRadioButtonGroupHavingTypeAndAccessNameShouldBeSelected(
        $value,
        $attribute,
        $type,
        $accessName
    ) {

    }

    /**
     * Option from radio button group having for given type this given access name should be unselected
     *
     * @param string $value
     * @param string $attribute
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be unselected$/
     */
    public function optionFromRadioButtonGroupHavingTypeAndAccessNameShouldBeUnselected(
        $value,
        $attribute,
        $type,
        $accessName
    ) {

    }

    /**
     * Link having given text should be present
     *
     * @param string $text
     *
     * @Then /^(?:l|L)ink having text "(?P<text>.*?)" should be present$/
     */
    public function linkHavingTextShouldBePresent($text)
    {

    }

    /**
     * Link having given text should be not present
     *
     * @param string $text
     *
     * @Then /^(?:l|L)ink having text "(?P<text>.*?)" should be not present$/
     */
    public function linkHavingTextShouldNotBePresent($text)
    {

    }

    /**
     * Link having given partial text should be present
     *
     * @param string $text
     *
     * @Then /^(?:l|L)ink having partial text "(?P<text>.*?)" should be present$/
     */
    public function linkHavingPartialTextShouldBePresent($text)
    {

    }

    /**
     * Link having given partial text should be not present
     *
     * @param string $text
     *
     * @Then /^(?:l|L)ink having partial text "(?P<text>.*?)" should be not present$/
     */
    public function linkHavingPartialTextShouldNotBePresent($text)
    {

    }

    /**
     * Should see alert with given text
     *
     * @param $text
     *
     * @Then ^I should see alert text as "(?P<text>.*?)"$/
     */
    public function iShouldSeeAlertTextAs($text)
    {

    }

    /**
     * Option from dropdown having for given type this given access name should be selected
     *
     * @param string $value
     * @param string $attribute
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be selected$/
     */
    public function optionFromDropdownHavingTypeAndAccessNameShouldBeSelected($value, $attribute, $type, $accessName)
    {

    }

    /**
     * Option from dropdown having for given type this given access name should be unselected
     *
     * @param string $value
     * @param string $attribute
     * @param string $type
     * @param string $accessName
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)" should be unselected$/
     */
    public function optionFromDropdownGroupHavingTypeAndAccessNameShouldBeUnselected(
        $value,
        $attribute,
        $type,
        $accessName
    ) {

    }

    /**
     * @param string $aType
     * @param string $aAccessName
     * @param string $bType
     * @param string $bAccessName
     *
     * @Then /^(?:a|A)ctual image having (?P<aType>id|class|css|name|xpath) "(?P<aAccessName>.*?)" and expected image having (?P<bType>id|class|css|name|xpath) "(?P<bAccessName>.*?)" should be similar$/
     */
    public function actualImageHavingTypeAndAccessNameAndExpectedImageHavingTypeAndAccessNameSouldBeSimilar(
        $aType,
        $aAccessName,
        $bType,
        $bAccessName
    ) {

    }
}