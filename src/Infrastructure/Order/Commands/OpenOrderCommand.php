<?php

namespace Infrastructure\Order\Commands;

class OpenOrderCommand
{
    private $supplierId;

    public function __construct($supplierId)
    {
        $this->supplierId = $supplierId;
    }

    public function getSupplierId()
    {
        return $this->supplierId;
    }
}
