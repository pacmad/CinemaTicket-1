<?php
namespace Amashige\Ticket\Model\Movie;

class Ticket
{
    public $seat;
    /** @var ScreeningTime */
    public $screeningTime;

    /**
     * @var bool 前売りかどうか
     */
    private $inAdvance;

    public function __construct(ScreeningTime $screeningTime, bool $inAdvance = false)
    {
        $this->screeningTime = $screeningTime;
        $this->inAdvance = $inAdvance;
    }

    public function isLateShow(): bool
    {
        return $this->screeningTime->isLateShow();
    }

    public function isMidnightShow(): bool
    {
        return $this->screeningTime->isMidnightShow();
    }
}
