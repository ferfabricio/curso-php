<?php

namespace App;

class Challenge
{
    private $source;

    public function __construct($source)
    {
        $this->source = $source;
    }

    public function exists($number)
    {
        return true;
    }
}
