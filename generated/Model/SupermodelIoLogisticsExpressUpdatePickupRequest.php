<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequest
{
    /**
     * Please enter Dispatch confirmation number which identifies the already scheduled pickup.
     *
     * @var string|null
     */
    protected $dispatchConfirmationNumber;
    /**
     * Please enter the shipper account number which was used during the scheduled pickup creation.
     *
     * @var string|null
     */
    protected $originalShipperAccountNumber;
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
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem[]|null
     */
    protected $specialInstructions;
    /**
     * Please provide additional pickup remark.
     *
     * @var string|null
     */
    protected $remark;
    /**
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails|null
     */
    protected $customerDetails;
    /**
     * Please provide updated details related to shipment you want update the pickup for.
     *
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem[]|null
     */
    protected $shipmentDetails;

    /**
     * Please enter Dispatch confirmation number which identifies the already scheduled pickup.
     */
    public function getDispatchConfirmationNumber(): ?string
    {
        return $this->dispatchConfirmationNumber;
    }

    /**
     * Please enter Dispatch confirmation number which identifies the already scheduled pickup.
     */
    public function setDispatchConfirmationNumber(?string $dispatchConfirmationNumber): self
    {
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;

        return $this;
    }

    /**
     * Please enter the shipper account number which was used during the scheduled pickup creation.
     */
    public function getOriginalShipperAccountNumber(): ?string
    {
        return $this->originalShipperAccountNumber;
    }

    /**
     * Please enter the shipper account number which was used during the scheduled pickup creation.
     */
    public function setOriginalShipperAccountNumber(?string $originalShipperAccountNumber): self
    {
        $this->originalShipperAccountNumber = $originalShipperAccountNumber;

        return $this;
    }

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
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @return SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem[]|null
     */
    public function getSpecialInstructions(): ?array
    {
        return $this->specialInstructions;
    }

    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @param SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem[]|null $specialInstructions
     */
    public function setSpecialInstructions(?array $specialInstructions): self
    {
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
        $this->remark = $remark;

        return $this;
    }

    public function getCustomerDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails
    {
        return $this->customerDetails;
    }

    public function setCustomerDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails $customerDetails): self
    {
        $this->customerDetails = $customerDetails;

        return $this;
    }

    /**
     * Please provide updated details related to shipment you want update the pickup for.
     *
     * @return SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem[]|null
     */
    public function getShipmentDetails(): ?array
    {
        return $this->shipmentDetails;
    }

    /**
     * Please provide updated details related to shipment you want update the pickup for.
     *
     * @param SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem[]|null $shipmentDetails
     */
    public function setShipmentDetails(?array $shipmentDetails): self
    {
        $this->shipmentDetails = $shipmentDetails;

        return $this;
    }
}
