<?php
namespace Amashige\Ticket\Usecase;

interface PurchaseInterface
{
    public function handle(Input $input);
}
