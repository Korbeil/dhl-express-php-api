<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails
{
    /**
     * Pickup booking cutoff time.
     */
    public ?string $localCutoffDateAndTime;
    /**
     * Pickup cutoff time in GMT.
     */
    public ?string $gmtCutoffTime;
    /**
     * Pickup booking cutoff time in GMT offset.
     */
    public ?string $cutoffTimeOffset;
    /**
     * The DHL earliest time possible for pickup.
     */
    public ?string $pickupEarliest;
    /**
     * The DHL latest time possible for pickup.
     */
    public ?string $pickupLatest;
    /**
     * The number of transit days.
     */
    public ?string $totalTransitDays;
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     */
    public ?string $pickupAdditionalDays;
    /**
     * This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area.
     */
    public ?string $deliveryAdditionalDays;
    /**
     * Pickup day of the week number.
     */
    public ?string $pickupDayOfWeek;
    /**
     * Destination day of the week number.
     */
    public ?string $deliveryDayOfWeek;
}
