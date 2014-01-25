<?php

namespace Tekstove\ContentChecker;

/**
 * @version 0.1
 * @author Angel Koilov <angel.koilov@gmail.com>
 */
class Checker
{

    protected $dictionaries = [];

    function __construct()
    {
        
    }

    /**
     * 
     * @return Dictionary\Dictionary[]
     */
    public function getDictionaries()
    {
        return $this->dictionaries;
    }

    public function addDictionary(Dictionary\Dictionary $d)
    {
        $this->dictionaries[] = $d;
    }

    public function check($data)
    {
        $data = (string) $data;
        foreach ($this->getDictionaries() as $dictionary) {
            if (false === $dictionary->isSave($data)) {
                return false;
            }
        }

        return true;
    }

}
