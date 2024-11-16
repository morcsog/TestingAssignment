<?php
declare(strict_types=1);

namespace App\Tasks;
class Task
{
    public readonly int $id;
    public readonly string $name;
    public readonly int $age;

    function __construct(int $id, string $name='', int $age=0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

}