<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Assert;

use \Behat\Mink\WebAssert as BaseWebAssert;

class WebAssert extends BaseWebAssert
{
    /**
     * Checks that specific element contains text.
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
        $regex = '/'.preg_quote($text, '/').'/ui';

        $message = sprintf(
            'The text "%s" was not equals to the text of the %s.',
            $text,
            $this->getMatchingElementRepresentation($selectorType, $selector)
        );

        if ($actual !== $text) {
            throw new ElementTextException($message, $this->session->getDriver(), $element);
        }
    }

    /**
     * Checks that specific element does not contains text.
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

        $message = sprintf(
            'The text "%s" was not equals to the text of the %s, but it should not.',
            $text,
            $this->getMatchingElementRepresentation($selectorType, $selector)
        );

        if ($actual === $text) {
            throw new ElementTextException($message, $this->session->getDriver(), $element);
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