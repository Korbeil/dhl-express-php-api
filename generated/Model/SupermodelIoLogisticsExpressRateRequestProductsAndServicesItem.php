<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem
{
    /**
     * Please enter DHL Express Global Product code.
     */
    public ?string $productCode;
    /**
     * Please enter DHL Express Local Product code.
     */
    public ?string $localProductCode;
    /**
     * Please use if you wish to filter the response by value added services.
     *
     * @var list<Common\SupermodelIoLogisticsExpressValueAddedServicesRates>|null
     */
    public ?array $valueAddedServices;
}
