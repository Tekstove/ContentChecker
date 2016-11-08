<?php

namespace Tekstove\ContentChecker\Checker;

use \Tekstove\ContentChecker\Dictionary\DictionaryInterface;

/**
 * @author po_taka <angel.koilov@gmail.com>
 */
interface CheckerInterface
{
    /**
     * Add new dictionary
     * @param DictionaryInterface $dictionary
     */
    public function addDictionary(DictionaryInterface $dictionary);

    /**
     * Check if data is safe
     * @param string $data
     * @return bool
     */
    public function isSafe($data);
}
