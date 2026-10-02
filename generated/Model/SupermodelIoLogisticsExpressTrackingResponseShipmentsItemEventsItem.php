<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem
{
    public ?string $date;
    public ?string $time;
    public ?string $typeCode;
    public ?string $description;
    /**
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem>|null
     */
    public ?array $serviceArea;
    public ?string $signedBy;
}
