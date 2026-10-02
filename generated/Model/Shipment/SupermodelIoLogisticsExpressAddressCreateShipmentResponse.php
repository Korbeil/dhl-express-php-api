<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment;

class SupermodelIoLogisticsExpressAddressCreateShipmentResponse
{
    /**
     * Postal code.
     */
    public ?string $postalCode;
    /**
     * City name.
     */
    public ?string $cityName;
    /**
     * Country code.
     */
    public ?string $countryCode;
    /**
     * Province or state code.
     */
    public ?string $provinceCode;
    /**
     * Address line 1.
     */
    public ?string $addressLine1;
    /**
     * Address line 2.
     */
    public ?string $addressLine2;
    /**
     * Address line 3.
     */
    public ?string $addressLine3;
    /**
     * Suburb or county name.
     */
    public ?string $cityDistrictName;
    /**
     * Please enter your state or province name.
     */
    public ?string $provinceName;
    /**
     * Please enter your country name.
     */
    public ?string $countryName;
}
