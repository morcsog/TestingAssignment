<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Tasks\Task;
class TaskList
{
    private Task $task;
    public function add(Task $task): void
    {
        $this->task = $task;
    }

    public function get(int $intex): ?Task
    {
        return isset($this->task) ? $this->task : null;
    }
}