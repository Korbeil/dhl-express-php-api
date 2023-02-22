<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPickupRequest
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
     * Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).<BR>.
     *
     * @var string|null
     */
    protected $plannedPickupDateAndTime;
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM).
     *
     * @var string|null
     */
    protected $closeTime;
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     *
     * @var string|null
     */
    protected $location;
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     *
     * @var string|null
     */
    protected $locationType;
    /**
     * @var SupermodelIoLogisticsExpressAccount[]|null
     */
    protected $accounts;
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @var SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem[]|null
     */
    protected $specialInstructions;
    /**
     * Please provide additional pickup remark.
     *
     * @var string|null
     */
    protected $remark;
    /**
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetails|null
     */
    protected $customerDetails;
    /**
     * Please provide details related to shipment you want to do the pickup for.
     *
     * @var SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem[]|null
     */
    protected $shipmentDetails;

    /**
     * Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).<BR>.
     */
    public function getPlannedPickupDateAndTime(): ?string
    {
        return $this->plannedPickupDateAndTime;
    }

    /**
     * Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).<BR>.
     */
    public function setPlannedPickupDateAndTime(?string $plannedPickupDateAndTime): self
    {
        $this->initialized['plannedPickupDateAndTime'] = true;
        $this->plannedPickupDateAndTime = $plannedPickupDateAndTime;

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
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     */
    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     */
    public function setLocationType(?string $locationType): self
    {
        $this->initialized['locationType'] = true;
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * @param SupermodelIoLogisticsExpressAccount[]|null $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @return SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem[]|null
     */
    public function getSpecialInstructions(): ?array
    {
        return $this->specialInstructions;
    }

    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @param SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem[]|null $specialInstructions
     */
    public function setSpecialInstructions(?array $specialInstructions): self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;

        return $this;
    }

    /**
     * Please provide additional pickup remark.
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * Please provide additional pickup remark.
     */
    public function setRemark(?string $remark): self
    {
        $this->initialized['remark'] = true;
        $this->remark = $remark;

        return $this;
    }

    public function getCustomerDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetails
    {
        return $this->customerDetails;
    }

    public function setCustomerDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;

        return $this;
    }

    /**
     * Please provide details related to shipment you want to do the pickup for.
     *
     * @return SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem[]|null
     */
    public function getShipmentDetails(): ?array
    {
        return $this->shipmentDetails;
    }

    /**
     * Please provide details related to shipment you want to do the pickup for.
     *
     * @param SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem[]|null $shipmentDetails
     */
    public function setShipmentDetails(?array $shipmentDetails): self
    {
        $this->initialized['shipmentDetails'] = true;
        $this->shipmentDetails = $shipmentDetails;

        return $this;
    }
}
