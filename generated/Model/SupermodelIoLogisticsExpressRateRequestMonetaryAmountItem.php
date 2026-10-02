<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem
{
    /**
     * Please provide the monetary amount type.
     */
    public ?string $typeCode;
    /**
     * Please provide the monetary value.
     */
    public ?float $value;
    /**
     * Pleaseprovide monetary amount currency code.
     */
    public ?string $currency;
}
