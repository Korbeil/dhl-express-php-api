<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
{
    public ?string $name;
    public ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress $postalAddress;
    /**
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem>|null
     */
    public ?array $serviceArea;
}
