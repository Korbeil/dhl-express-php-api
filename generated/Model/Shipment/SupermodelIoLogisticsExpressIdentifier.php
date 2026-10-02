<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment;

class SupermodelIoLogisticsExpressIdentifier
{
    /**
     * Please provide type of the identifier you want to set value for.
     */
    public ?string $typeCode;
    /**
     * Please enter value of your identifier (WB number, PieceID).
     */
    public ?string $value;
    /**
     * Please enter value of Piece Data Identifier. Note: Piece identification data should be same for all the pieces provided in single shipment.
     */
    public ?string $dataIdentifier;
}
