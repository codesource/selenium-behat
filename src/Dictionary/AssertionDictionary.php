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
     * Window location should be equal to given value
     *
     * @param string $type
     * @param string $value
     *
     * @Then /^I should be on (?P<type>href|pathname|protocol|hostname) "(?P<value>.*?)"$/
     *
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function iShouldBeOnUrl($type, $value)
    {
        $currentValue = $this->getSession()->evaluateScript('return window.location.' . $type . ';');
        if ($currentValue !== $value) {
            $message = sprintf('Current window %s is "%s" and "%s" was expected', $type, $currentValue, $value);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
    }

    /**
     * Window location attribute should not be equal to given value
     *
     * @param string $type
     * @param string $value
     *
     * @Then /^I should not be on (?P<type>href|pathname|protocol|hostname) "(?P<value>.*?)"$/
     *
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function iShouldNotBeOnUrl($type, $value)
    {
        $currentValue = $this->getSession()->evaluateScript('return window.location.' . $type . ';');
        if ($currentValue === $value) {
            $message = sprintf('Current window %s should not be equals to "%s"', $type, $currentValue);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
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
     *
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function elementHavingSelectorLocatorShouldHaveAttributeWithValue($selector, $locator, $attribute, $value)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $currentValue = $this->getSession()->getPage()->find($selector, $locator)->getAttribute($attribute);
        if ($currentValue !== $value) {
            $message = sprintf('Expecting "%s" as value for given element\'s attribute "%s" and found "%s"', $value, $attribute, $currentValue);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
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
     *
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function elementHavingSelectorLocatorShouldNotHaveAttributeWithValue(
        $selector,
        $locator,
        $attribute,
        $value
    ) {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $currentValue = $this->getSession()->getPage()->find($selector, $locator)->getAttribute($attribute);
        if ($currentValue === $value) {
            $message = sprintf('Given element\'s attribute "%s" should not be equal to "%s"', $attribute, $currentValue);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
    }

    /**
     * Element having for given selector this given locator should have given attribute containing given value
     *
     * @param string $selector
     * @param string $locator
     * @param string $attribute
     * @param string $value
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should have attribute "(?P<attribute>.*?)" containing "(?P<value>.*?)"$/
     *
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function elementHavingSelectorLocatorShouldHaveAttributeContainingValue($selector, $locator, $attribute, $value)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $currentValue = $this->getSession()->getPage()->find($selector, $locator)->getAttribute($attribute);
        if (strstr($currentValue, $value) === false) {
            $message = sprintf('Expecting that given element\'s attribute "%s" contains "%s" and his value is "%s"', $attribute, $value, $currentValue);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
    }

    /**
     * Element having for given selector this given locator should have given attribute not containing given value
     *
     * @param string $selector
     * @param string $locator
     * @param string $attribute
     * @param string $value
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should have attribute "(?P<attribute>.*?)" not containing "(?P<value>.*?)"$/
     *
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function elementHavingSelectorLocatorShouldHaveAttributeNotContainingValue($selector, $locator, $attribute, $value)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $currentValue = $this->getSession()->getPage()->find($selector, $locator)->getAttribute($attribute);
        if (strstr($currentValue, $value) !== false) {
            $message = sprintf('Expecting that given element\'s attribute "%s" do not contain "%s" and his value "%s" contains "%s"', $attribute, $value, $currentValue, $value);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
    }

    /**
     * Element having for given selector this given locator should have attribute
     *
     * @param string $selector
     * @param string $locator
     * @param string $attribute
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should have attribute "(?P<attribute>[^"]*?)"$/
     *
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function elementHavingSelectorLocatorShouldHaveAttribute($selector, $locator, $attribute)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $currentValue = $this->getSession()->getPage()->find($selector, $locator)->getAttribute($attribute);
        if (strlen($currentValue) === 0) {
            $message = sprintf('Expecting given element\'s attribute to be present', $attribute);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
    }

    /**
     * Element having for given selector this given locator should not have attribute
     *
     * @param string $selector
     * @param string $locator
     * @param string $attribute
     *
     * @Then /^(?:e|E)lement having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)" should not have attribute "(?P<attribute>[^"]*?)"$/
     *
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function elementHavingSelectorLocatorShouldNotHaveAttribute($selector, $locator, $attribute)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $currentValue = $this->getSession()->getPage()->find($selector, $locator)->getAttribute($attribute);
        if (strlen($currentValue) > 0) {
            $message = sprintf('Expecting given element\'s attribute not to be present', $attribute);
            throw new ExpectationException($message, $this->getSession()->getDriver());
        }
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
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementNotExists($selector, $locator);
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