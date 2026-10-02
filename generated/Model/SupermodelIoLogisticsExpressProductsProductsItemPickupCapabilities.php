<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities
{
    /**
     * This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request).
     */
    public ?bool $nextBusinessDay;
    /**
     * This is the cutoff time for the service<BR> offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day.
     */
    public ?string $localCutoffDateAndTime;
    /**
     * Pickup cut off time in GMT.
     */
    public ?string $gMTCutoffTime;
    /**
     * The DHL earliest time possible for pickup.
     */
    public ?string $pickupEarliest;
    /**
     * The DHL latest time possible for pickup.
     */
    public ?string $pickupLatest;
    /**
     * The DHL Service Area Code for the origin of the Shipment.
     */
    public ?string $originServiceAreaCode;
    /**
     * The DHL Facility Code for the Origin.
     */
    public ?string $originFacilityAreaCode;
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     */
    public ?float $pickupAdditionalDays;
    /**
     * Pickup day of the week number.
     */
    public ?float $pickupDayOfWeek;
}
