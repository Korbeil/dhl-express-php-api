<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItem
{
    public ?string $shipmentTrackingNumber;
    public ?string $status;
    public ?string $shipmentTimestamp;
    /**
     * DHL product code.
     */
    public ?string $productCode;
    public ?string $description;
    public ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails $shipperDetails;
    public ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails $receiverDetails;
    public ?float $totalWeight;
    public ?string $unitOfMeasurements;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressReference>|null
     */
    public ?array $shipperReferences;
    /**
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem>|null
     */
    public ?array $events;
    public ?float $numberOfPieces;
    /**
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem>|null
     */
    public ?array $pieces;
    public ?string $estimatedDeliveryDate;
    /**
     * @var list<string>|null
     */
    public ?array $childrenShipmentIdentificationNumbers;
}
