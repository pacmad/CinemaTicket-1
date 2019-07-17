<?php
use PHPUnit\Framework\TestCase;
use Amashige\Ticket\Model\Movie\ScreeningTime;

class ScreeningTimeTest extends TestCase
{
    public function testIsEveningShow()
    {
        $st = new ScreeningTime(new DateTime('2019-07-17 17:29'));
        $this->assertFalse($st->isEveningShow());
        $st = new ScreeningTime(new DateTime('2019-07-17 17:30'));
        $this->assertTrue($st->isEveningShow());
        $st = new ScreeningTime(new DateTime('2019-07-17 17:55'));
        $this->assertTrue($st->isEveningShow());
        $st = new ScreeningTime(new DateTime('2019-07-17 19:55'));
        $this->assertTrue($st->isEveningShow());
        $st = new ScreeningTime(new DateTime('2019-07-17 19:56'));
        $this->assertFalse($st->isEveningShow());
    }
}
