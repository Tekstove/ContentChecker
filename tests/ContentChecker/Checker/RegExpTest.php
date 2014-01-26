<?php

/**
 * @version 0.2
 * @author po_taka <angel.koilov@gmail.com>
 */
class RegExpDictionaryTest extends PHPUnit_Framework_TestCase
{

    public function testCheck()
    {
        $data = ['good', 'ba+d', 'evil'];
        $dictionary = new \Tekstove\ContentChecker\Dictionary\RegExpDictionary($data);

        $checker = new \Tekstove\ContentChecker\Checker\RegExp();

        $checker->addDictionary($dictionary);

        $this->assertTrue($checker->isSafe('this text is safe'));

        $this->assertFalse($checker->isSafe('this text is bad'));
        $this->assertFalse($checker->isSafe('this text is baaaaad'));
        
        $this->assertEquals(array($dictionary), $checker->getDictionaries());
        
        $checker->setPrefix('[^a-z]');
        $checker->setSuffix('[^a-z]');
        
        $this->assertTrue($checker->isSafe('thisBadTextIsSave'));
        $this->assertFalse($checker->isSafe('this Bad TextIsNotSave'));
    }

}
