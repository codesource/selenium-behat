<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Session;
use CDSRC\Selenium\Behat\Assert\WebAssert;
use CDSRC\Selenium\Behat\Exception\WindowException;

/**
 * MobileDictionary for selenium with Behat
 *
 * @method array getMinkParameters()
 * @method void setMinkParameters(array $parameters)
 * @method mixed getMinkParameter($name)
 * @method void setMinkParameter($name, $value)
 * @method Session getSession($name = null)
 * @method WebAssert assertSession($session = null)
 * @method string getPageTitle()
 * @method void closeCurrentWindow()
 * @method void scrollToElement($selector, $locator)
 * @method void convertSelectorAndLocator(&$selector, &$locator)
 */
trait NavigationDictionary
{

    /**
     * Stored previous window name
     *
     * @var string
     */
    protected $previousWindow = null;

    /**
     * Navigate to an url
     *
     * @param string $link
     *
     * @Then /^I navigate to "(?P<link>.*?)"$/
     */
    public function iNavigateTo($link)
    {
        if (preg_match('/^https?:\/\//', $link)) {
            $this->getSession()->visit($link);
        } else {
            $this->getSession()->visit($this->getMinkParameter('base_url') . $link);
        }
    }

    /**
     * Navigate forward
     *
     * @Then /^I navigate forward$/
     */
    public function iNavigateForward()
    {
        $this->getSession()->forward();
    }

    /**
     * Navigate back
     *
     * @Then /^I navigate back$/
     */
    public function iNavigateBack()
    {
        $this->getSession()->back();
    }

    /**
     * Close the browser
     *
     * @Then /^I close(?: the) browser$/
     */
    public function iCloseTheBrowser()
    {
        $session = $this->getSession();
        foreach ($session->getWindowNames() as $name) {
            $session->switchToWindow($name);
            $this->closeCurrentWindow();
        }
    }

    /**
     * Resize the browser window to a specific width and height
     *
     * @param int $width
     * @param int $height
     *
     * @Then /^I resize(?: the) browser window size to width (?P<width>\d+) and height (?P<height>\d+)$/
     */
    public function iResizeTheBrowserWindow($width, $height)
    {
        $this->getSession()->resizeWindow($width, $height);
    }

    /**
     * Maximize the browser window
     *
     * @Then /^I maximize(?: the) browser window$/
     */
    public function iMaximizeTheBrowserWindow()
    {
        $this->getSession()->maximizeWindow();
    }

    /**
     * Refresh current page
     *
     * @Then /^I refresh(?: the) page$/
     */
    public function iRefreshThePage()
    {
        $this->getSession()->reload();
    }

    /**
     * Switch to new window
     *
     * @Then /^I switch to(?: the) new window$/
     */
    public function iSwitchToNewWindow()
    {
        $session = $this->getSession();
        $names = $session->getWindowNames();
        $this->previousWindow = $session->getWindowName();
        $session->switchToWindow(end($names));
    }

    /**
     * Switch to previous window
     *
     * @Then /^I switch to(?: the) previous window$/
     */
    public function iSwitchToPreviousWindow()
    {
        $this->assertSession()->windowExists($this->previousWindow);
        $this->getSession()->switchToWindow($this->previousWindow);
    }

    /**
     * Switch to main window
     *
     * @Then /^I switch to(?: the) main window$/
     */
    public function iSwitchToMainWindow()
    {
        $session = $this->getSession();
        $names = $session->getWindowNames();
        $this->previousWindow = $session->getWindowName();
        $session->switchToWindow(reset($names));
    }

    /**
     * Switch to main window
     *
     * @param string $name
     *
     * @Then /^I switch to(?: the) window named "(?P<name>.*?)"$/
     */
    public function iSwitchToWindowNamed($name)
    {
        $this->assertSession()->windowExists($name);
        $session = $this->getSession();
        $this->previousWindow = $session->getWindowName();
        $session->switchToWindow($name);
    }

    /**
     * Switch to window having given title
     *
     * @param string $title
     *
     * @Then /^I switch to(?: the) window having title "(?P<title>.*?)"$/
     *
     * @throws WindowException
     */
    public function iSwitchToWindowHavingTitle($title)
    {
        $session = $this->getSession();
        $names = $session->getWindowNames();
        $this->previousWindow = $session->getWindowName();
        foreach ($names as $name) {
            $session->switchToWindow($name);
            if ($title === $this->getPageTitle()) {
                return;
            }
        }

        $message = sprintf(
            'The window with title "%s" do not exists.',
            $title
        );
        throw new WindowException($message, $this->getSession()->getDriver());
    }

    /**
     * Close new window
     *
     * @Then /^I close(?: the) new window$/
     */
    public function iCloseNewWindow()
    {
        $session = $this->getSession();
        $names = $session->getWindowNames();
        $session->switchToWindow(end($names));
        $this->closeCurrentWindow();
    }

    /**
     * Switch to main content
     *
     * @Then /^I switch to(?: the) main content$/
     */
    public function iSwitchToMainContent()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Switch to frame with given name
     *
     * @param string $frame
     *
     * @Then /^I switch to(?: the) frame "(?P<frame>.*?)"$/
     */
    public function iSwitchToFrame($frame)
    {
        // TODO: Should we add an iframe assertion check?
        $this->getSession()->switchToIFrame($frame);
    }

    /**
     * Scroll to element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I scroll to element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iScrollToElementHavingSelectorLocator($selector, $locator)
    {
        $this->assertSession()->elementExists($selector, $locator);
        $this->scrollToElement($selector, $locator);
    }

    /**
     * Scroll to top of the page
     *
     * @Then /^I scroll to top of(?: the) page$/
     */
    public function iScrollToTopOfThePage()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Scroll to end of the page
     *
     * @Then /^I scroll to end of(?: the) page$/
     */
    public function iScrollToEndOfThePage()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Hover over element having for given selector this given locator
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I hover over element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iHoverOverElementHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Zoom in page
     *
     * @Then /^I zoom in page$/
     */
    public function iZoneInPage()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Reset the page view
     *
     * @Then /^I reset page view$/
     */
    public function iResetPageView()
    {
        // TODO: Implement this step
        throw new PendingException();
    }

    /**
     * Zoom out page till element having for given selector this given locator is visible
     *
     * @param string $selector
     * @param string $locator
     *
     * @Then /^I zoom out page till I see element having (?P<selector>id|class|css|named|xpath) "(?P<locator>.*?)"$/
     */
    public function iZoomOutPageTillISeeElementHavingSelectorLocator($selector, $locator)
    {
        // TODO: Implement this step
        throw new PendingException();
    }
}