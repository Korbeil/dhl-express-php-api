<?php

namespace Korbeil\DHLExpress\Api\Model\Common;

class SupermodelIoLogisticsExpressAddress
{
    /**
     * Please enter your postcode or leave empty if the address doesn't have a postcode.
     */
    public ?string $postalCode;
    /**
     * Please enter the city.
     */
    public ?string $cityName;
    /**
     * Please enter ISO country code.
     */
    public ?string $countryCode;
    /**
     * Please enter your province or state code.
     */
    public ?string $provinceCode;
    /**
     * Please enter address line 1.
     */
    public ?string $addressLine1;
    /**
     * Please enter address line 2.
     */
    public ?string $addressLine2;
    /**
     * Please enter address line 3.
     */
    public ?string $addressLine3;
    /**
     * Please enter your suburb or county name.
     */
    public ?string $countyName;
}
