<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Context;

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
     * @param Session|string|null $name name of the session OR active session will be used
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
     * Get page title
     *
     * @return string
     */
    protected function getPageTitle(){
        return $this->getSession()->getPage()->find('title')->getText();
    }
}