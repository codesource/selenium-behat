<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;

/**
 * AssertionDictionary for selenium with Behat
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
trait AssertionDictionary
{

    /**
     * Should see page title as given title
     *
     * @param string $title
     *
     * @Then /^I should see page title as "(?P<title>.*?)"$/
     */
    public function iShouldSeePageTitleAs($title)
    {
        $this->assertSession()->elementTextEquals('xpath', '/head/title', $title);
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
        $this->assertSession()->elementTextNotEquals('xpath', '/head/title', $title);
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
        $this->assertSession()->elementTextContains('xpath', '/head/title', $text);
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
        $this->assertSession()->elementTextNotContains('xpath', '/head/title', $text);
    }

    /**
     * Element having for given selector this given locator should have given text
     *
     * @param string $selector
     * @param string $locator
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should have text as "(?P<text>.*?)"$/
     */
    public function elementHavingSelectorLocatorShouldHaveTextAs($selector, $locator, $text)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementTextEquals($selector, $locator, $text);
    }

    /**
     * Element having for given selector this given locator should not have given text
     *
     * @param string $selector
     * @param string $locator
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should not have text as "(?P<text>.*?)"$/
     */
    public function elementHavingSelectorLocatorShouldNotHaveTextAs($selector, $locator, $text)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementTextNotEquals($selector, $locator, $text);
    }

    /**
     * Element having for given selector this given locator should have given partial text
     *
     * @param string $selector
     * @param string $locator
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should have partial text as "(?P<text>.*?)"$/
     */
    public function elementHavingSelectorLocatorShouldHavePartialTextAs($selector, $locator, $text)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should not have given partial text
     *
     * @param string $selector
     * @param string $locator
     * @param string $text
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should not have partial text as "(?P<text>.*?)"$/
     */
    public function elementHavingSelectorLocatorShouldNotHavePartialTextAs($selector, $locator, $text)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should have for given attribute this given value
     *
     * @param string $selector
     * @param string $locator
     * @param string $attribute
     * @param string $value
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should have attribute "(?P<attribute>.*?)" with value "(?P<value>.*?)"$/
     */
    public function elementHavingSelectorLocatorShouldHaveAttributeWithValue($selector, $locator, $attribute, $value)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should not have for given attribute this given value
     *
     * @param string $selector
     * @param string $locator
     * @param string $attribute
     * @param string $value
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should not have attribute "(?P<attribute>.*?)" with value "(?P<value>.*?)"$/
     */
    public function elementHavingSelectorLocatorShouldNotHaveAttributeWithValue(
        $selector,
        $locator,
        $attribute,
        $value
    ) {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should be enabled
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be enabled$/
     */
    public function elementHavingSelectorLocatorShouldBeEnabled($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should not be enabled
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should not be enabled$/
     */
    public function elementHavingSelectorLocatorShouldNotBeEnabled($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should be disabled
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be disabled$/
     */
    public function elementHavingSelectorLocatorShouldBeDisabled($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should not be disabled
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should not be disabled$/
     */
    public function elementHavingSelectorLocatorShouldNotBeDisabled($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Element having for given selector this given locator should be present
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be present$/
     */
    public function elementHavingSelectorLocatorShouldBePresent($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
    }

    /**
     * Element having for given selector this given locator should not be present
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should not be present$/
     */
    public function elementHavingSelectorLocatorShouldNotBePresent($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Checkbox having for given selector this given locator should be checked
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:c|C)heckbox having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be checked$/
     */
    public function checkboxHavingSelectorLocatorShouldBeChecked($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }


    /**
     * Checkbox having for given selector this given locator should be unchecked
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:c|C)heckbox having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be unchecked$/
     */
    public function checkboxHavingSelectorLocatorShouldBeUnchecked($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Radio button having for given selector this given locator should be selected
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:r|R)adio button having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be selected$/
     */
    public function radioButtonHavingSelectorLocatorShouldBeSelected($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Radio button having for given selector this given locator should be unselected
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:r|R)adio button having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be unselected$/
     */
    public function radioButtonHavingSelectorLocatorShouldBeUnselected($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Option from radio button group having for given selector this given locator should be selected
     *
     * @param string $value
     * @param string $attribute
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be selected$/
     */
    public function optionFromRadioButtonGroupHavingSelectorLocatorShouldBeSelected(
        $value,
        $attribute,
        $selector,
        $locator
    ) {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Option from radio button group having for given selector this given locator should be unselected
     *
     * @param string $value
     * @param string $attribute
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be unselected$/
     */
    public function optionFromRadioButtonGroupHavingSelectorLocatorShouldBeUnselected(
        $value,
        $attribute,
        $selector,
        $locator
    ) {
        // TODO: Implement this step
        throw new PendingException();
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

        // TODO: Implement this step
        throw new PendingException();
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

        // TODO: Implement this step
        throw new PendingException();
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

        // TODO: Implement this step
        throw new PendingException();
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
        // TODO: Implement this step
        throw new PendingException();
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
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Option from dropdown having for given selector this given locator should be selected
     *
     * @param string $value
     * @param string $attribute
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from dropdown having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be selected$/
     */
    public function optionFromDropdownHavingSelectorLocatorShouldBeSelected($value, $attribute, $selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Option from dropdown having for given selector this given locator should be unselected
     *
     * @param string $value
     * @param string $attribute
     * @param string $selector
     * @param string $locator
     *
     * @Then /^(?:o|O)ption "(?P<value>.*?)" by (?P<attribute>text|value|index) from dropdown having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should be unselected$/
     */
    public function optionFromDropdownGroupHavingSelectorLocatorShouldBeUnselected(
        $value,
        $attribute,
        $selector,
        $locator
    ) {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * @param string $aType
     * @param string $aAccessName
     * @param string $bType
     * @param string $bAccessName
     *
     * @Then /^(?:a|A)ctual image having (?P<aType>id|class|css|named|xpath) "(?P<aAccessName>.*?)" and expected image having (?P<bType>id|class|css|named|xpath) "(?P<bAccessName>.*?)" should be similar$/
     */
    public function actualImageHavingSelectorLocatorAndExpectedImageHavingSelectorLocatorShouldBeSimilar(
        $aType,
        $aAccessName,
        $bType,
        $bAccessName
    ) {
        // TODO: Implement this step
        throw new PendingException();
    }
}