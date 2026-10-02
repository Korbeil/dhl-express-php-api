<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem
{
    public ?string $date;
    public ?string $time;
    public ?string $typeCode;
    public ?string $description;
    /**
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem>|null
     */
    public ?array $serviceArea;
    public ?string $signedBy;
}
