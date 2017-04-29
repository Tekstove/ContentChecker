<?php

namespace Tekstove\ContentChecker\Dictionary;

/**
 * @author po_taka <angel.koilov@gmail.com>
 */
interface DictionaryInterface
{

    public function addWord($word);

    public function addWords($data);

    public function getWords();
}
