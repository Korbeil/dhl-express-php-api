<?php

namespace Korbeil\DHLExpress\Api\Model\Common;

class SupermodelIoLogisticsExpressValueAddedServicesRates
{
    /**
     * Please enter DHL Express value added global service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates.
     */
    public ?string $serviceCode;
    /**
     * Please enter DHL Express value added local service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates.
     */
    public ?string $localServiceCode;
    /**
     * Please enter monetary value of service (e.g. Insured Value).
     */
    public ?float $value;
    /**
     * Please enter currency code (e.g. Insured Value currency code).
     */
    public ?string $currency;
    /**
     * For future use.
     */
    public ?string $method;
}
