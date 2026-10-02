<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem
{
    public ?float $number;
    public ?string $typeCode;
    public ?string $shipmentTrackingNumber;
    public ?string $trackingNumber;
    public ?string $description;
    /**
     * The weight of the package.
     */
    public ?float $weight;
    /**
     * The weight of the package.
     */
    public ?float $dimensionalWeight;
    /**
     * The weight of the package.
     */
    public ?float $actualWeight;
    /**
     * Dimensions of the package.
     */
    public ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions $dimensions;
    /**
     * Dimensions of the package.
     */
    public ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions $actualDimensions;
    public ?string $unitOfMeasurements;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressReference>|null
     */
    public ?array $shipperReferences;
    /**
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem>|null
     */
    public ?array $events;
}
