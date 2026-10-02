<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem
{
    /**
     * Please enter type of prepaid charge. At this moment only freight is supported.
     */
    public ?string $typeCode;
    /**
     * Please enter currency for the value you have entered into value field.
     */
    public ?string $currency;
    /**
     * Please enter nominal value related to the charge.
     */
    public ?float $value;
    /**
     * Please enter method you have used to pay the charges. At this moment only cash is supported.
     */
    public ?string $method;
}
