<?php
namespace Amashige\Ticket\Model\Movie;

use DateTime;

class ScreeningTime
{
    private $startAt;

    public function __construct(DateTime $startAt)
    {
        $this->startAt = $startAt;
    }

    public function getDate($format = 'Y-m-d')
    {
        return $this->startAt->format($format);
    }

    public function isEveningShow(): bool
    {
        $from = new DateTime($this->getDate() . ' 17:30');
        $to = new DateTime($this->getDate() . ' 19:55');
        return ($from <= $this->startAt) && ($this->startAt <= $to);
    }

    public function isLateShow(): bool
    {
        // todo
    }

    public function isMidnightShow(): bool
    {
        // todo
    }

    public function isFirstDay(): bool
    {
        return $this->startAt->format('d') === 1 && $this->startAt->format('m') !== 12;
    }
}
