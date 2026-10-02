<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem
{
    public ?string $name;
    /**
     * The amount price of DHL product and services.
     */
    public ?float $price;
    /**
     * Special service charge code type for service.
     */
    public ?string $typeCode;
}
