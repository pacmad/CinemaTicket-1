<?php
namespace Amashige\Ticket\Model\Movie;

use Amashige\Ticket\Model\Exception\ScheduleNotFoundException;

class Movie
{
    private $id;
    private $title;
    private $schedule;

    public function __construct(
        int $id,
        string $title,
        Schedule $schedule
    ) {
        $this->title = $title;
        $this->schedule = $schedule;
    }

    /**
     * スケジュールがあるかどうか
     *
     * @param ScreeningTime $screeningTime
     * @return bool
     */
    public function hasSchedule(ScreeningTime $screeningTime): bool
    {
        return $this->schedule->hasScreeningTime($screeningTime);
    }
}
