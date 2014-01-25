<?php

/**
 * @version 0.1
 * @author po_taka <angel.koilov@gmail.com>
 */
class RegExpDictionaryTest extends PHPUnit_Framework_TestCase
{

    public function testAddWord()
    {
        $data = ['good', 'bad', 'evid'];
        $dictionary = new \Tekstove\ContentChecker\Dictionary\RegExpDictionary($data);
        $this->assertEquals($data, $dictionary->getWords());

        $data[] = 'added';

        $dictionary->addWord('added');

        $this->assertEquals($data, $dictionary->getWords());
    }

    public function testCheck()
    {
        $data = ['good', 'ba+d', 'evil'];
        $dictionary = new \Tekstove\ContentChecker\Dictionary\RegExpDictionary($data);
        $this->assertTrue($dictionary->isSafe('this text is safe'));

        $this->assertFalse($dictionary->isSafe('this text is bad'));
        $this->assertFalse($dictionary->isSafe('this text is baaaaad'));
    }

}
