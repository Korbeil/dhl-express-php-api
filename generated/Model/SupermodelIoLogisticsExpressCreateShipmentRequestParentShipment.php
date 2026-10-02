<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment
{
    /**
     * Please provide the parent (mother) Product Code.
     */
    public ?string $productCode;
    /**
     * Please provide the parent (mother) shipment's Number of Packages.
     */
    public ?float $packagesCount;
}
