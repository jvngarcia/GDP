<?php

namespace Src\Projects\Domain;

class ProjectStatus
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
}
