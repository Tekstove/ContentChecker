<?php

namespace Tekstove\ContentChecker\Dictionary;

/**
 * @version 0.1
 * @author po_taka <angel.koilov@gmail.com>
 */
interface Dictionary
{

    public function isSafe($data);

    public function addWord($word);
}
