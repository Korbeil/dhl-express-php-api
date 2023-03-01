<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails
{
    /**
     * Pickup booking cutoff time.
     *
     * @var string|null
     */
    protected $localCutoffDateAndTime;
    /**
     * Pickup cutoff time in GMT.
     *
     * @var string|null
     */
    protected $gmtCutoffTime;
    /**
     * Pickup booking cutoff time in GMT offset.
     *
     * @var string|null
     */
    protected $cutoffTimeOffset;
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
     * The number of transit days.
     *
     * @var string|null
     */
    protected $totalTransitDays;
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     *
     * @var string|null
     */
    protected $pickupAdditionalDays;
    /**
     * This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area.
     *
     * @var string|null
     */
    protected $deliveryAdditionalDays;
    /**
     * Pickup day of the week number.
     *
     * @var string|null
     */
    protected $pickupDayOfWeek;
    /**
     * Destination day of the week number.
     *
     * @var string|null
     */
    protected $deliveryDayOfWeek;

    /**
     * Pickup booking cutoff time.
     */
    public function getLocalCutoffDateAndTime(): ?string
    {
        return $this->localCutoffDateAndTime;
    }

    /**
     * Pickup booking cutoff time.
     */
    public function setLocalCutoffDateAndTime(?string $localCutoffDateAndTime): self
    {
        $this->localCutoffDateAndTime = $localCutoffDateAndTime;

        return $this;
    }

    /**
     * Pickup cutoff time in GMT.
     */
    public function getGmtCutoffTime(): ?string
    {
        return $this->gmtCutoffTime;
    }

    /**
     * Pickup cutoff time in GMT.
     */
    public function setGmtCutoffTime(?string $gmtCutoffTime): self
    {
        $this->gmtCutoffTime = $gmtCutoffTime;

        return $this;
    }

    /**
     * Pickup booking cutoff time in GMT offset.
     */
    public function getCutoffTimeOffset(): ?string
    {
        return $this->cutoffTimeOffset;
    }

    /**
     * Pickup booking cutoff time in GMT offset.
     */
    public function setCutoffTimeOffset(?string $cutoffTimeOffset): self
    {
        $this->cutoffTimeOffset = $cutoffTimeOffset;

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
        $this->pickupLatest = $pickupLatest;

        return $this;
    }

    /**
     * The number of transit days.
     */
    public function getTotalTransitDays(): ?string
    {
        return $this->totalTransitDays;
    }

    /**
     * The number of transit days.
     */
    public function setTotalTransitDays(?string $totalTransitDays): self
    {
        $this->totalTransitDays = $totalTransitDays;

        return $this;
    }

    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     */
    public function getPickupAdditionalDays(): ?string
    {
        return $this->pickupAdditionalDays;
    }

    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     */
    public function setPickupAdditionalDays(?string $pickupAdditionalDays): self
    {
        $this->pickupAdditionalDays = $pickupAdditionalDays;

        return $this;
    }

    /**
     * This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area.
     */
    public function getDeliveryAdditionalDays(): ?string
    {
        return $this->deliveryAdditionalDays;
    }

    /**
     * This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area.
     */
    public function setDeliveryAdditionalDays(?string $deliveryAdditionalDays): self
    {
        $this->deliveryAdditionalDays = $deliveryAdditionalDays;

        return $this;
    }

    /**
     * Pickup day of the week number.
     */
    public function getPickupDayOfWeek(): ?string
    {
        return $this->pickupDayOfWeek;
    }

    /**
     * Pickup day of the week number.
     */
    public function setPickupDayOfWeek(?string $pickupDayOfWeek): self
    {
        $this->pickupDayOfWeek = $pickupDayOfWeek;

        return $this;
    }

    /**
     * Destination day of the week number.
     */
    public function getDeliveryDayOfWeek(): ?string
    {
        return $this->deliveryDayOfWeek;
    }

    /**
     * Destination day of the week number.
     */
    public function setDeliveryDayOfWeek(?string $deliveryDayOfWeek): self
    {
        $this->deliveryDayOfWeek = $deliveryDayOfWeek;

        return $this;
    }
}
