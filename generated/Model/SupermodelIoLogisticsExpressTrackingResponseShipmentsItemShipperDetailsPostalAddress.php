<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress
{
    public ?string $cityName;
    public ?string $countyName;
    public ?string $postalCode;
    /**
     * The region in which the locality is, and which is in the country.
     */
    public ?string $provinceCode;
    public ?string $countryCode;
}
