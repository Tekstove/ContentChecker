<?php

namespace Tekstove\ContentChecker\Checker;

/**
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class RegExpChecker extends AbstractChecker implements CheckerInterface
{

    protected $prefix = '';
    protected $suffix = '';

    public function isSafe($data)
    {
        foreach ($this->dictionaries as $dictionary) {
            foreach ($dictionary->getWords() as $word) {
                $wordEscaped = preg_quote($word, '/');
                $wordSmart = preg_replace('/(\p{L})/u', '$1+', $wordEscaped);
                if (preg_match('/' . $wordSmart . '/iu', $data)) {
                    return false;
                }
            }
        }

        return true;
    }
}
