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

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * 
     * @param type $prefix
     * @return this
     */
    public function setPrefix($prefix)
    {
        $prefix = (string) $prefix;
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * 
     * @param type $suffix
     * @return this
     */
    public function setSuffix($suffix)
    {
        $suffix = (string) $suffix;
        $this->suffix = $suffix;
        return $this;
    }

    public function isSafe($data)
    {
        foreach ($this->dictionaries as $dictionary) {
            foreach ($dictionary->getWords() as $word) {
                $wordEscaped = preg_quote($word, '/');
                $wordSmart = preg_replace('/(\p{L})/u', '$1+', $wordEscaped);
                if (preg_match('/' . $this->getPrefix() . $wordSmart . $this->getSuffix() . '/iu', $data)) {
                    return false;
                }
            }
        }

        return true;
    }
}
