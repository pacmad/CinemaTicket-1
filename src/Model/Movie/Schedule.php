<?php
namespace Amashige\Ticket\Model;

use IteratorAggregate;
use Generator;

class Schedule implements IteratorAggregate
{
    private $schedules = [];

    public function push(ScreeningTime $screeningTime)
    {
        $this->schedules[$screeningTime->getDate('Y-m-d')] = $screeningTime;
    }

    /**
     * 指定された上映予定時間が存在するか
     *
     * @param ScreeningTime $screeningTime
     * @return bool
     */
    public function hasScreeningTime(ScreeningTime $screeningTime): bool
    {
        $date = $screeningTime->getDate();
        if (!isset($this->schedules[$date])) {
            return false;
        }
        foreach ($this->schedules[$date] as $schedule) {
            if ($screeningTime == $schedule) {
                return true;
            }
        }
        return false;
    }

    public function getIterator(): Generator
    {
        foreach ($this->schedules as $date => $schedule) {
            yield $date => $schedule;
        }
    }
}
