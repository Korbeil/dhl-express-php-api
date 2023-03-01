<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request).
     *
     * @var bool|null
     */
    protected $nextBusinessDay;
    /**
     * This is the cutoff time for the service<BR> offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day.
     *
     * @var string|null
     */
    protected $localCutoffDateAndTime;
    /**
     * Pickup cut off time in GMT.
     *
     * @var string|null
     */
    protected $gMTCutoffTime;
    /**
     * The DHL earliest time possible for pickup.
     *
     * @var string|null
     */
    protected $pickupEarliest;
    /**
     * The DHL latest time possible for pickup.
     *
     * @var string|null
     */
    protected $pickupLatest;
    /**
     * The DHL Service Area Code for the origin of the Shipment.
     *
     * @var string|null
     */
    protected $originServiceAreaCode;
    /**
     * The DHL Facility Code for the Origin.
     *
     * @var string|null
     */
    protected $originFacilityAreaCode;
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     *
     * @var float|null
     */
    protected $pickupAdditionalDays;
    /**
     * Pickup day of the week number.
     *
     * @var float|null
     */
    protected $pickupDayOfWeek;

    /**
     * This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request).
     */
    public function getNextBusinessDay(): ?bool
    {
        return $this->nextBusinessDay;
    }

    /**
     * This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request).
     */
    public function setNextBusinessDay(?bool $nextBusinessDay): self
    {
        $this->initialized['nextBusinessDay'] = true;
        $this->nextBusinessDay = $nextBusinessDay;

        return $this;
    }

    /**
     * This is the cutoff time for the service<BR> offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day.
     */
    public function getLocalCutoffDateAndTime(): ?string
    {
        return $this->localCutoffDateAndTime;
    }

    /**
     * This is the cutoff time for the service<BR> offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day.
     */
    public function setLocalCutoffDateAndTime(?string $localCutoffDateAndTime): self
    {
        $this->initialized['localCutoffDateAndTime'] = true;
        $this->localCutoffDateAndTime = $localCutoffDateAndTime;

        return $this;
    }

    /**
     * Pickup cut off time in GMT.
     */
    public function getGMTCutoffTime(): ?string
    {
        return $this->gMTCutoffTime;
    }

    /**
     * Pickup cut off time in GMT.
     */
    public function setGMTCutoffTime(?string $gMTCutoffTime): self
    {
        $this->initialized['gMTCutoffTime'] = true;
        $this->gMTCutoffTime = $gMTCutoffTime;

        return $this;
    }

    /**
     * The DHL earliest time possible for pickup.
     */
    public function getPickupEarliest(): ?string
    {
        return $this->pickupEarliest;
    }

    /**
     * The DHL earliest time possible for pickup.
     */
    public function setPickupEarliest(?string $pickupEarliest): self
    {
        $this->initialized['pickupEarliest'] = true;
        $this->pickupEarliest = $pickupEarliest;

        return $this;
    }

    /**
     * The DHL latest time possible for pickup.
     */
    public function getPickupLatest(): ?string
    {
        return $this->pickupLatest;
    }

    /**
     * The DHL latest time possible for pickup.
     */
    public function setPickupLatest(?string $pickupLatest): self
    {
        $this->initialized['pickupLatest'] = true;
        $this->pickupLatest = $pickupLatest;

        return $this;
    }

    /**
     * The DHL Service Area Code for the origin of the Shipment.
     */
    public function getOriginServiceAreaCode(): ?string
    {
        return $this->originServiceAreaCode;
    }

    /**
     * The DHL Service Area Code for the origin of the Shipment.
     */
    public function setOriginServiceAreaCode(?string $originServiceAreaCode): self
    {
        $this->initialized['originServiceAreaCode'] = true;
        $this->originServiceAreaCode = $originServiceAreaCode;

        return $this;
    }

    /**
     * The DHL Facility Code for the Origin.
     */
    public function getOriginFacilityAreaCode(): ?string
    {
        return $this->originFacilityAreaCode;
    }

    /**
     * The DHL Facility Code for the Origin.
     */
    public function setOriginFacilityAreaCode(?string $originFacilityAreaCode): self
    {
        $this->initialized['originFacilityAreaCode'] = true;
        $this->originFacilityAreaCode = $originFacilityAreaCode;

        return $this;
    }

    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     */
    public function getPickupAdditionalDays(): ?float
    {
        return $this->pickupAdditionalDays;
    }

    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     */
    public function setPickupAdditionalDays(?float $pickupAdditionalDays): self
    {
        $this->initialized['pickupAdditionalDays'] = true;
        $this->pickupAdditionalDays = $pickupAdditionalDays;

        return $this;
    }

    /**
     * Pickup day of the week number.
     */
    public function getPickupDayOfWeek(): ?float
    {
        return $this->pickupDayOfWeek;
    }

    /**
     * Pickup day of the week number.
     */
    public function setPickupDayOfWeek(?float $pickupDayOfWeek): self
    {
        $this->initialized['pickupDayOfWeek'] = true;
        $this->pickupDayOfWeek = $pickupDayOfWeek;

        return $this;
    }
}
