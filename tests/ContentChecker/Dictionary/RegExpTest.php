<?php

/**
 * Description of RegExpTest
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class RegExpTest extends PHPUnit_Framework_TestCase
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

}
