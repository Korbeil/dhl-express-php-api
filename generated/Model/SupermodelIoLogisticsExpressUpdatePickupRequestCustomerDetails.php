<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails
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
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails|null
     */
    protected $shipperDetails;
    /**
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails|null
     */
    protected $receiverDetails;
    /**
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails|null
     */
    protected $bookingRequestorDetails;
    /**
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails|null
     */
    protected $pickupDetails;

    public function getShipperDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails
    {
        return $this->shipperDetails;
    }

    public function setShipperDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }

    public function setReceiverDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;

        return $this;
    }

    public function getBookingRequestorDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails
    {
        return $this->bookingRequestorDetails;
    }

    public function setBookingRequestorDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails): self
    {
        $this->initialized['bookingRequestorDetails'] = true;
        $this->bookingRequestorDetails = $bookingRequestorDetails;

        return $this;
    }

    public function getPickupDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails
    {
        return $this->pickupDetails;
    }

    public function setPickupDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails $pickupDetails): self
    {
        $this->initialized['pickupDetails'] = true;
        $this->pickupDetails = $pickupDetails;

        return $this;
    }
}
