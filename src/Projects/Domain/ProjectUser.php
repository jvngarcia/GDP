<?php

namespace Src\Projects\Domain;

class ProjectUser
{
    private int $value;

    public function __construct($value)
    {
        $this->value = $value;

        $this->asureIsNotNegative();
    }

    public function value()
    {
        return $this->value;
    }

    public function asureIsNotNegative()
    {
        if ($this->value <= 0) {
            throw new \InvalidArgumentException('The user id cannot be negative');
        }
    }
}
