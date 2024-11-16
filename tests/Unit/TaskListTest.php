<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Tasks\TaskList;
use PHPUnit\Framework\TestCase;

//require_once dirname(__DIR__) . '/vendor/autoload.php';

class TaskListTest extends TestCase
{
    public function testNullReturnedFromGetWhenEmpty()
    {
        $taskList = new TaskList();
        $this->assertNull($taskList->get(0));

    }
}