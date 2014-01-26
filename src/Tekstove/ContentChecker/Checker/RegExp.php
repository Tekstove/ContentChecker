<?php

namespace Tekstove\ContentChecker\Checker;

/**
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class RegExp extends AbstractChecker implements Checker
{

    public function isSafe($data)
    {
        foreach ($this->dictionaries as $dictionary) {

            foreach ($dictionary->getWords() as $word) {
                $word = str_replace('/', '\\/', $word);
                if (preg_match('/' . $word . '/', $data)) {
                    return false;
                }
            }
        }

        return true;
    }

}
