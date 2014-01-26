<?php

namespace Tekstove\ContentChecker\Checker;

use \Tekstove\ContentChecker\Dictionary\Dictionary;

/**
 * @version 0.1
 * @author po_taka <angel.koilov@gmail.com>
 */
interface Checker
{

    public function addDictionary(Dictionary $dictionary);

    public function isSafe($data);
}
