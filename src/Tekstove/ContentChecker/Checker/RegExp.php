<?php

namespace Tekstove\ContentChecker\Checker;

/**
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class RegExp extends AbstractChecker implements Checker
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
                $word = str_replace('/', '\\/', $word);
                if (preg_match('/' . $this->getPrefix() . $word . $this->getSuffix() . '/iu', $data)) {
                    return false;
                }
            }
        }

        return true;
    }

}
