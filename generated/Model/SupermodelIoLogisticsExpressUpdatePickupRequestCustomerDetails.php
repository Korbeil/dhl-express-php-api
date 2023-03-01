<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails
{
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
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }

    public function setReceiverDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->receiverDetails = $receiverDetails;

        return $this;
    }

    public function getBookingRequestorDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails
    {
        return $this->bookingRequestorDetails;
    }

    public function setBookingRequestorDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails): self
    {
        $this->bookingRequestorDetails = $bookingRequestorDetails;

        return $this;
    }

    public function getPickupDetails(): ?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails
    {
        return $this->pickupDetails;
    }

    public function setPickupDetails(?SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails $pickupDetails): self
    {
        $this->pickupDetails = $pickupDetails;

        return $this;
    }
}
