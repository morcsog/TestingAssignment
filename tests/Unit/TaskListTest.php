<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Tasks\TaskList;
use App\Tasks\Task;
use PHPUnit\Framework\TestCase;

//require_once dirname(__DIR__) . '/vendor/autoload.php';

class TaskListTest extends TestCase
{
    public function testNullReturnedFromGetWhenEmpty()
    {
        $taskList = new TaskList();
        $this->assertNull($taskList->get(0));
    }

    public function testReturnsTheSame()
    {
        $taskList = new TaskList();
        $task = new Task();
        $taskList->add($task);
        $this->assertSame($task, $taskList->get(0));
    }
}