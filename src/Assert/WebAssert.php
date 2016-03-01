<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Assert;

use Behat\Mink\Exception\ElementTextException;
use \Behat\Mink\WebAssert as BaseWebAssert;
use CDSRC\Selenium\Behat\Exception\WindowException;

class WebAssert extends BaseWebAssert
{
    /**
     * Checks that specific element text is equal to given text.
     *
     * @param string       $selectorType element selector type (css, xpath)
     * @param string|array $selector     element selector
     * @param string       $text         expected text
     *
     * @throws ElementTextException
     */
    public function elementTextEquals($selectorType, $selector, $text)
    {
        $element = $this->elementExists($selectorType, $selector);
        $actual = $element->getText();
        if(strlen($actual) === 0){
            $actual = trim(strip_tags($element->getHtml()));
        }

        if ($actual !== $text) {
            $message = sprintf(
                'The text "%s" was not equals to the text of the %s "%s".',
                $text,
                $this->getMatchingElementRepresentation($selectorType, $selector),
                $actual
            );

            throw new ElementTextException($message, $this->session->getDriver(), $element);
        }
    }

    /**
     * Checks that specific element text is not equal to given text.
     *
     * @param string       $selectorType element selector type (css, xpath)
     * @param string|array $selector     element selector
     * @param string       $text         expected text
     *
     * @throws ElementTextException
     */
    public function elementTextNotEquals($selectorType, $selector, $text)
    {
        $element = $this->elementExists($selectorType, $selector);
        $actual = $element->getText();
        if(strlen($actual) === 0){
            $actual = trim(strip_tags($element->getHtml()));
        }

        if ($actual === $text) {
            $message = sprintf(
                'The text "%s" was not equals to the text of the %s, but it should not.',
                $text,
                $this->getMatchingElementRepresentation($selectorType, $selector)
            );

            throw new ElementTextException($message, $this->session->getDriver(), $element);
        }
    }

    /**
     * Check that window with given name exists
     *
     * @param $name
     *
     * @throws WindowException
     */
    public function windowExists($name = null){
        if(empty($name) || !in_array($name, $this->session->getWindowNames(), true)){
            $message = empty($name) ? 'The window do not exists.' : sprintf(
                'The window "%s" do not exists.',
                $name
            );
            throw new WindowException($message, $this->session->getDriver());
        }
    }

    /**
     * @param string       $selectorType
     * @param string|array $selector
     * @param bool         $plural
     *
     * @return string
     */
    private function getMatchingElementRepresentation($selectorType, $selector, $plural = false)
    {
        $pluralization = $plural ? 's' : '';

        if (in_array($selectorType, array('named', 'named_exact', 'named_partial'))
            && is_array($selector) && 2 === count($selector)
        ) {
            return sprintf('%s%s matching locator "%s"', $selector[0], $pluralization, $selector[1]);
        }

        if (is_array($selector)) {
            $selector = implode(' ', $selector);
        }

        return sprintf('element%s matching %s "%s"', $pluralization, $selectorType, $selector);
    }
}