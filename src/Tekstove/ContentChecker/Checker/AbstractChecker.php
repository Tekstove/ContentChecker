<?php

namespace Tekstove\ContentChecker\Checker;

use \Tekstove\ContentChecker\Dictionary\DictionaryInterface;

/**
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
abstract class AbstractChecker implements CheckerInterface
{

    protected $dictionaries = [];

    public function addDictionary(DictionaryInterface $dictionary)
    {
        $this->dictionaries[] = $dictionary;
    }

    public function getDictionaries()
    {
        return $this->dictionaries;
    }
}
