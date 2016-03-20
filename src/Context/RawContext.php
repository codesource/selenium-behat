<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Context;

use Behat\Behat\Hook\Scope\BeforeStepScope;
use Behat\Mink\Mink;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;


/**
 * Generic dictionary that define minimum mink access
 *
 * @see \Behat\MinkExtension\Context\RawMinkContext
 */
trait RawContext
{

    /**
     * @var Mink
     */
    protected $mink;

    /**
     * @var array
     */
    protected $minkParameters;

    /**
     * @var string
     */
    private $javascriptSourcesDirectory = __DIR__ . '/../Resources/JavaScript/';

    /**
     * Returns Mink instance.
     *
     * @return Mink
     */
    public function getMink()
    {
        if (null === $this->mink) {
            throw new \RuntimeException(
                'Mink instance has not been set on Mink context class. ' .
                'Have you enabled the Mink Extension?'
            );
        }

        return $this->mink;
    }

    /**
     * Sets Mink instance.
     *
     * @param Mink $mink Mink session manager
     */
    public function setMink(Mink $mink)
    {
        $this->mink = $mink;
    }

    /**
     * Returns the parameters provided for Mink.
     *
     * @return array
     */
    public function getMinkParameters()
    {
        return $this->minkParameters;
    }

    /**
     * Sets parameters provided for Mink.
     *
     * @param array $parameters
     */
    public function setMinkParameters(array $parameters)
    {
        $this->minkParameters = $parameters;
    }

    /**
     * Returns specific mink parameter.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getMinkParameter($name)
    {
        return isset($this->minkParameters[$name]) ? $this->minkParameters[$name] : null;
    }

    /**
     * Applies the given parameter to the Mink configuration. Consider that all parameters get reset for each
     * feature context.
     *
     * @param string $name The key of the parameter
     * @param string $value The value of the parameter
     */
    public function setMinkParameter($name, $value)
    {
        $this->minkParameters[$name] = $value;
    }

    /**
     * Returns Mink session.
     *
     * @param string|null $name name of the session OR active session will be used
     *
     * @return Session
     */
    public function getSession($name = null)
    {
        return $this->getMink()->getSession($name);
    }

    /**
     * Returns Mink session assertion tool.
     *
     * @param Session|string|null $session name of the session OR active session will be used
     *
     * @return WebAssert
     */
    public function assertSession($session = null)
    {
        if (!($session instanceof Session)) {
            $session = $this->getSession($session);
        }

        return new WebAssert($session);
    }

    /**
     * Load javascript requirement
     *
     * @param BeforeStepScope $scope
     *
     * @BeforeStep
     */
    public function loadJavascriptRequirement(BeforeStepScope $scope)
    {
        $this->loadJavascriptCodeFromFile($this->javascriptSourcesDirectory . 'core.js');
        $this->loadJavascriptCodeFromFile($this->javascriptSourcesDirectory . 'context.js');
    }

    /**
     * Get page title
     *
     * @return string
     */
    protected function getPageTitle()
    {
        return trim(strip_tags($this->getSession()->getPage()->find('xpath', '/head/title')->getHtml()));
    }

    /**
     * Close current window
     *
     */
    protected function closeCurrentWindow()
    {
        $this->getSession()->executeScript('window.close();');
    }

    /**
     * Scroll to element in page
     *
     * @param string $selector
     * @param string|array $locator
     */
    protected function scrollToElement($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $element = $this->getSession()->getPage()->find($selector, $locator);
        if ($element && $element->isValid()) {
            $this->getSession()->executeScript(sprintf(
                'window.sBehat.context.scrollToElementByXpath("%s", false);',
                $element->getXpath()
            ));
        }
    }

    /**
     * Convert specific selector to named
     *
     * @param string $selector
     * @param string|array $locator
     *
     * TODO: Should be replaced by Custom Selector
     * @see http://mink.behat.org/en/latest/guides/traversing-pages.html#custom-selector
     */
    protected function convertSelectorAndLocator(&$selector, &$locator){
        if($selector === 'id'){
            $selector = 'named';
            $locator = array('id', $locator);
        }elseif($selector === 'class'){
            $selector = 'named';
            $locator = array('class', $locator);
        }
    }

    /**
     * Scroll to element in page
     *
     * @param string $selector
     * @param string|array $locator
     *
     * @return bool
     */
    protected function isElementVisibleForUser($selector, $locator)
    {
        $this->convertSelectorAndLocator($selector, $locator);
        $element = $this->getSession()->getPage()->find($selector, $locator);
        if ($element && $element->isValid()) {
            return (bool) $this->getSession()->evaluateScript(sprintf(
                'return window.sBehat.getVisibleElementByXpath("%s");',
                $element->getXpath()
            ));
        }
        return false;
    }

    /**
     * Load javascript from file
     *
     * @param string $filename
     */
    private function loadJavascriptCodeFromFile($filename)
    {
        if (file_exists($filename)) {
            $this->getSession()->executeScript(file_get_contents($filename));
        }
    }
}