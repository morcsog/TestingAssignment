<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Tasks\TaskList;
use App\Tasks\Task;
use PHPUnit\Framework\TestCase;

//require_once dirname(__DIR__) . '/vendor/autoload.php';

class TaskListTest extends TestCase
{
    public function testNullReturnedFromGetWhenEmpty(): void
    {
        $taskList = new TaskList();

        $this->assertNull($taskList->get(0));
    }

    public function testReturnsTheSame(): void
    {
        $taskList = new TaskList();
        $task = new Task(1);

        $taskList->add($task);

        $this->assertSame($task, $taskList->get(0));
    }

    public function testGivesInstancesBack(): void
    {
        $taskList = new TaskList();
        $task1 = new Task(1);
        $task2 = new Task(2);
        $task3 = new Task(3);

        $taskList->add($task1);
        $taskList->add($task2);
        $taskList->add($task3);

        $this->assertSame($task1, $taskList->get(0));
        $this->assertSame($task2, $taskList->get(1));
        $this->assertSame($task3, $taskList->get(2));
    }

    public function testGivesNullBackById(): void
    {
        $taskList = new TaskList(1);

        $this->assertNull($taskList->getById(123123));
    }

    public function testGivesTaskObjectBackById(): void
    {
        $taskList = new TaskList();
        $task = new Task(1);

        $taskList->add($task);

        $this->assertSame($task, $taskList->getById(1));
    }
}