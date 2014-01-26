<?php

namespace Tekstove\ContentChecker\Checker;

use \Tekstove\ContentChecker\Dictionary\Dictionary;

/**
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
abstract class AbstractChecker implements Checker
{

    protected $dictionaries = [];

    public function addDictionary(Dictionary $dictionary)
    {
        $this->dictionaries[] = $dictionary;
    }

    public function getDictionaries()
    {
        return $this->dictionaries;
    }

}
