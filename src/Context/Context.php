<?php
/**
 * @copyright Copyright (c) 2016 Code-Source
 */

namespace CDSRC\Selenium\Behat\Context;


use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkAwareContext;

/**
 * Required context to use dictionaries
 */
class Context implements SnippetAcceptingContext, MinkAwareContext
{
    use RawContext;
}