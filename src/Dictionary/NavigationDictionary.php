<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Dictionary;

trait NavigationDictionary
{

    /**
     * Navigate to an url
     *
     * @param string $link
     *
     * @Then /^I navigate to "(?P<link>.*?)"$/
     */
    public function iNavigateTo($link)
    {
    }

    /**
     * Navigate forward
     *
     * @Then /^I navigate forward$/
     */
    public function iNavigateForward()
    {

    }

    /**
     * Navigate back
     *
     * @Then /^I navigate back$/
     */
    public function iNavigateBack()
    {

    }

    /**
     * Close the browser
     *
     * @Then /^I close(?: the) browser$/
     */
    public function iCloseTheBrowser()
    {

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

    }

    /**
     * Maximize the browser window
     *
     * @Then /^I maximize(?: the) browser window$/
     */
    public function iMaximizeTheBrowserWindow()
    {

    }

    /**
     * Refresh current page
     *
     * @Then /^I refresh(?: the) page$/
     */
    public function iRefreshThePage()
    {

    }

    /**
     * Switch to new window
     *
     * @Then /^I switch to(?: the) new window$/
     */
    public function iSwitchToNewWindow()
    {

    }

    /**
     * Switch to previous window
     *
     * @Then /^I switch to(?: the) previous window$/
     */
    public function iSwitchToPreviousWindow()
    {

    }

    /**
     * Switch to main window
     *
     * @Then /^I switch to(?: the) main window$/
     */
    public function iSwitchToMainWindow()
    {

    }

    /**
     * Switch to window having given title
     *
     * @param string $title
     *
     * @Then /^I switch to(?: the) window having title "(?P<title>.*?)"$/
     */
    public function iSwitchToWindowHavingTitle($title)
    {

    }

    /**
     * Close new window
     *
     * @Then /^I close(?: the) new window$/
     */
    public function iCloseNewWindow()
    {

    }

    /**
     * Switch to main content
     *
     * @Then /^I switch to(?: the) main content$/
     */
    public function iSwitchToMainContent()
    {

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

    }

    /**
     * Scroll to element having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I scroll to element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iScrollToElementHaving($type, $accessName)
    {

    }

    /**
     * Scroll to top of the page
     *
     * @Then /^I scroll to top of(?: the) page$/
     */
    public function iScrollToTopOfThePage()
    {

    }

    /**
     * Scroll to end of the page
     *
     * @Then /^I scroll to end of(?: the) page$/
     */
    public function iScrollToEndOfThePage()
    {

    }

    /**
     * Hover over element having for given type this given access name
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I hover over element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iHoverOverElementHaving($type, $accessName)
    {

    }

    /**
     * Zoom in page
     *
     * @Then /^I zoom in page$/
     */
    public function iZoneInPage()
    {

    }

    /**
     * Reset the page view
     *
     * @Then /^I reset page view$/
     */
    public function iResetPageView()
    {

    }

    /**
     * Zoom out page till element having for given type this given access name is visible
     *
     * @param string $type
     * @param string $accessName
     *
     * @Then /^I zoom out page till I see element having (?P<type>id|class|css|name|xpath) "(?P<accessName>.*?)"$/
     */
    public function iZoomOutPageTillISeeElementHaving($type, $accessName)
    {

    }
}