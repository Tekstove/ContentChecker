<?php

use Tekstove\ContentChecker\Dictionary\SimpleDictionary;
use Tekstove\ContentChecker\Checker\RegExpChecker;

/**
 * @author po_taka <angel.koilov@gmail.com>
 **/

class RegExpCheckerTest extends PHPUnit_Framework_TestCase
{

    public function testCheck()
    {
        $data = ['good', 'bad', 'evil', 'лошо'];
        $dictionary = new SimpleDictionary($data);

        $checker = new RegExpChecker();

        $checker->addDictionary($dictionary);

        $this->assertTrue($checker->isSafe('this text is safe'));

        $this->assertFalse($checker->isSafe('this text is bad'));
        $this->assertFalse($checker->isSafe('this text is baaaaad'));
        
        $this->assertFalse($checker->isSafe('мноо ЛоШШо'));
        
        $this->assertFalse($checker->isSafe('thisBadTextIsSave'));
        $this->assertFalse($checker->isSafe('this Bad TextIsNotSave'));
    }
}
