<?php

namespace Korbeil\DHLExpress\Api\Model\Common;

class SupermodelIoLogisticsExpressPackageRR
{
    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     */
    public ?string $typeCode;
    /**
     * The weight of the package.
     */
    public ?float $weight;
    /**
     * Dimensions of the package.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageRRDimensions $dimensions;
}
