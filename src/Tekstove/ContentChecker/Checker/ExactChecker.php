<?php

namespace Tekstove\ContentChecker\Checker;

/**
 * Description of Exactchecker
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class ExactChecker extends AbstractChecker
{
    public function isSafe($data): bool
    {
        foreach ($this->dictionaries as $dictionary) {
            foreach ($dictionary->getWords() as $word) {
                if (false !== stripos($data, $word)) {
                    return false;
                }
            }
        }

        return true;
    }
}
