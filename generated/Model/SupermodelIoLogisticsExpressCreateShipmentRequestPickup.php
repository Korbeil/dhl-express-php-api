<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPickup
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
     * Please advise if a pickup is needed for this shipment.
     *
     * @var bool|null
     */
    protected $isRequested = false;
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM).
     *
     * @var string|null
     */
    protected $closeTime;
    /**
     * Provides information on where the package should be picked up by DHL courier.
     *
     * @var string|null
     */
    protected $location;
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem[]|null
     */
    protected $specialInstructions;
    /**
     * Please enter address and contact details related to your pickup.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails|null
     */
    protected $pickupDetails;
    /**
     * Please enter address and contact details of the individual requesting the pickup.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails|null
     */
    protected $pickupRequestorDetails;

    /**
     * Please advise if a pickup is needed for this shipment.
     */
    public function getIsRequested(): ?bool
    {
        return $this->isRequested;
    }

    /**
     * Please advise if a pickup is needed for this shipment.
     */
    public function setIsRequested(?bool $isRequested): self
    {
        $this->initialized['isRequested'] = true;
        $this->isRequested = $isRequested;

        return $this;
    }

    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM).
     */
    public function getCloseTime(): ?string
    {
        return $this->closeTime;
    }

    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM).
     */
    public function setCloseTime(?string $closeTime): self
    {
        $this->initialized['closeTime'] = true;
        $this->closeTime = $closeTime;

        return $this;
    }

    /**
     * Provides information on where the package should be picked up by DHL courier.
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Provides information on where the package should be picked up by DHL courier.
     */
    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem[]|null
     */
    public function getSpecialInstructions(): ?array
    {
        return $this->specialInstructions;
    }

    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem[]|null $specialInstructions
     */
    public function setSpecialInstructions(?array $specialInstructions): self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;

        return $this;
    }

    /**
     * Please enter address and contact details related to your pickup.
     */
    public function getPickupDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails
    {
        return $this->pickupDetails;
    }

    /**
     * Please enter address and contact details related to your pickup.
     */
    public function setPickupDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails $pickupDetails): self
    {
        $this->initialized['pickupDetails'] = true;
        $this->pickupDetails = $pickupDetails;

        return $this;
    }

    /**
     * Please enter address and contact details of the individual requesting the pickup.
     */
    public function getPickupRequestorDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails
    {
        return $this->pickupRequestorDetails;
    }

    /**
     * Please enter address and contact details of the individual requesting the pickup.
     */
    public function setPickupRequestorDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails $pickupRequestorDetails): self
    {
        $this->initialized['pickupRequestorDetails'] = true;
        $this->pickupRequestorDetails = $pickupRequestorDetails;

        return $this;
    }
}
