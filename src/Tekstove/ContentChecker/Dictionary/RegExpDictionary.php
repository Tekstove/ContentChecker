<?php

namespace Tekstove\ContentChecker\Dictionary;

/**
 * @version 0.1
 * @author po_taka <angel.koilov@gmail.com>
 */
class RegExpDictionary implements Dictionary
{

    protected $words = [];

    public function __construct(array $data)
    {
        foreach ($data as $word) {
            $this->words[] = (string) $word;
        }
    }

    public function getWords()
    {
        return $this->words;
    }

    public function addWord($word)
    {
        $this->words[] = (string) $word;
    }

}
