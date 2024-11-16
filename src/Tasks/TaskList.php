<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Tasks\Task;
use InvalidArgumentException;

class TaskList
{
    private array $task;

    public function add(Task $task): void
    {
        $this->task[] = $task;
    }

    public function get(int $index): ?Task
    {
        if ($index < 0) {
            throw new InvalidArgumentException('Negative index given.');
        }
        return $this->task[$index] ?? null;
    }

    public function getById(int $id): ?Task
    {
        if (!isset($this->task)) {
            return null;
        }

        foreach ($this->task as $task) {
            if ($task->id == $id) {
                return $task;
            }
        }
        return null;
    }

    public function sortByName(): void
    {
        usort($this->task, function (Task $a, Task $b) {
            return strcmp($a->name, $b->name);
        });
    }

    public function sortById(): void
    {
        usort($this->task, function (Task $a, Task $b) {
            return $a->id - $b->id;
        });
    }

    public function sortBy(string $column): void
    {
        usort($this->task, function (Task $a, Task $b) use ($column) {
            if (property_exists($a, $column) && property_exists($b, $column)) {
                return $a->$column <=> $b->$column ? 1 : -1;
            }
            return 0;
        });
    }

}