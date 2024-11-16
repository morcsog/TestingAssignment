<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Tasks\Task;

class TaskList
{
    private array $task;

    public function add(Task $task): void
    {
        $this->task[] = $task;
    }

    public function get(int $index): ?Task
    {
        return $this->task[$index] ?? null;
    }

    public function getById(int $id): ?Task
    {
        if (!isset($this->task))
        {
            return null;
        }

        foreach ($this->task as $task){
            if ($task->getId() == $id){
                return $task;
            }
        }
        return null;
    }
}