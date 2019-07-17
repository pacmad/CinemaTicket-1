<?php
namespace Amashige\Ticket\Model;

class Price
{
    private const NORMAL_PRICE = 1900;
    private const THREE_DIMENTION_PRICE = 2300;

    private $policies = [];

    public function applyPolicy(DiscountPolicy $policy)
    {
        $this->policy[] = $policy;
    }

    public function cashUp(): int
    {
    }
}
