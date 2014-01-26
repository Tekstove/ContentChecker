<?php

namespace Tekstove\ContentChecker;

/**
 * @version 0.1
 * @author Angel Koilov <angel.koilov@gmail.com>
 */
class Checker
{

    protected $checkers = [];

    public function isSafe($data)
    {
        foreach ($this->checkers as $checker) {
            if (false === $checker->isSafe($data)) {
                return false;
            }
        }

        return true;
    }

    public function addChecker(Checker\Checker $checker)
    {
        $this->checkers[] = $checker;
    }

}
