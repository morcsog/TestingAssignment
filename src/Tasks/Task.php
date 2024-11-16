<?php

declare(strict_types=1);

namespace App\Tasks;

readonly class Task
{
    public int $id;
    public string $name;
    public int $age;

    function __construct(int $id, string $name = '', int $age = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

}