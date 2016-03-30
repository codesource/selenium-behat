<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;

/**
 * InputDictionary for selenium with Behat
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
trait InputDictionary
{
    /**
     * Enter given text into input field having for given selector this given locator
     *
     * @param string $text
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I enter "(?P<text>.*?)" into input field having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iEnterTextIntoInputFieldHavingSelectorLocator($text, $selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $this->getSession()->getPage()->find($selector, $locator)->setValue($text);
    }

    /**
     * Clear input field having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I clear input field having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iClearInputFieldHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Select option from dropdown having for given selector this given locator
     *
     * @param string $value
     * @param string $attribute
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I select option "(?P<value>.*?)" by (?P<attribute>text|value|index) from dropdown having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iSelectOptionFromDropdownHavingSelectorLocator($value, $attribute, $selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Select all options from multiselect dropdown having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I select all options from multiselect dropdown having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iSelectAllOptionsFromMultiselectDropdownHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }


    /**
     * Unselect all options from multiselect dropdown having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I unselect all options from multiselect dropdown having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iUnselectAllOptionsFromMultiselectDropdownHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Check the checkbox having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I check the checkbox having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iCheckTheCheckboxHavingSelectorLocator($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $this->getSession()->getPage()->find($selector, $locator)->check();
    }


    /**
     * Uncheck the checkbox having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I uncheck the checkbox having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iUncheckTheCheckboxHavingSelectorLocator($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $this->getSession()->getPage()->find($selector, $locator)->uncheck();
    }


    /**
     * Toggle the checkbox having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I toggle the checkbox having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iToggleTheCheckboxHavingSelectorLocator($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $this->assertSession()->elementExists($selector, $locator);
        $checkbox = $this->getSession()->getPage()->find($selector, $locator);
        if($checkbox->isChecked()){
            $checkbox->uncheck();
        }else{
            $checkbox->check();
        }
    }

    /**
     * Select radio button having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I select radio button having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iSelectRadioButtonHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Select option from radio button group having for given selector this given locator
     *
     * @param string $value
     * @param string $attribute
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I select option "(?P<value>.*?)" by (?P<attribute>text|value|index) from radio button group having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iSelectOptionFromRadioButtonGroupHavingSelectorLocator($value, $attribute, $selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }
}