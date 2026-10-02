<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails
{
    public ?string $name;
    public ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress $postalAddress;
    /**
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem>|null
     */
    public ?array $serviceArea;
    public ?string $accountNumber;
}
