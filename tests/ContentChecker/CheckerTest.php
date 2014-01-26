<?php

/**
 * Description of CheckerTest
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class CheckerTest extends PHPUnit_Framework_TestCase
{

    public function testCheck()
    {
        $data = ['good', 'ba+d', 'evil'];
        $dictionary = new \Tekstove\ContentChecker\Dictionary\RegExpDictionary($data);

        $regExpChecker = new \Tekstove\ContentChecker\Checker\RegExp();

        $regExpChecker->addDictionary($dictionary);

        $checker = new \Tekstove\ContentChecker\Checker();
        $checker->addChecker($regExpChecker);

        $this->assertTrue($checker->isSafe('this text is safe'));
        $this->assertFalse($checker->isSafe('this text is bad'));
        $this->assertFalse($checker->isSafe('this text is baaaaad'));
    }

}
