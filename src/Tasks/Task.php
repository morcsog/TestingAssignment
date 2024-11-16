<?php
declare(strict_types=1);

namespace App\Tasks;
class Task
{
    private int $id;

    function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
}