<?php

namespace Tekstove\ContentChecker\Dictionary;

/**
 * @version 0.1
 * @author po_taka <angel.koilov@gmail.com>
 */
class SimpleDictionary implements DictionaryInterface
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
        return $this;
    }

    public function addWords($data)
    {
        foreach ($data as $word) {
            $this->addWord($word);
        }
        
        return $this;
    }
}
