<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponseAddressItem
{
    public ?string $countryCode;
    public ?string $postalCode;
    public ?string $cityName;
    /**
     * Please enter your suburb or county name.
     */
    public ?string $countyName;
    public ?SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea $serviceArea;
}
