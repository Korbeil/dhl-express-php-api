<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemWeight
{
    /**
     * The dimensional weight of the shipment.
     */
    public ?float $volumetric;
    /**
     * The quoted weight of the shipment.
     */
    public ?float $provided;
    /**
     * The unit of measurement for the dimensions of the package.
     */
    public ?string $unitOfMeasurement;
}
