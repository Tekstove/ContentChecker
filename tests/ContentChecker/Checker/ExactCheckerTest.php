<?php

use PHPUnit\Framework\TestCase;
use Tekstove\ContentChecker\Checker\ExactChecker;
use Tekstove\ContentChecker\Dictionary\SimpleDictionary;

class ExactCheckerTest extends TestCase
{
    public function testIsSafe()
    {
        $dictionary = new SimpleDictionary(['badsite.com', '9gag.com']);
        $checker = new ExactChecker();
        $checker->addDictionary($dictionary);

        $this->assertFalse($checker->isSafe('some nasty content from badsite.com'));
        // test case insensitive match
        $this->assertFalse($checker->isSafe('some nasty content from badSite.com'));
        $this->assertTrue($checker->isSafe('Some not nasty content'));
    }
}
