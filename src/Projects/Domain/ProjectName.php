<?php

namespace Src\Projects\Domain;

class ProjectName
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function value()
    {
        return $this->name;
    }
}
