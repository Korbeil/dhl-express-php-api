<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPickupRequestCustomerDetails
{
    /**
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails|null
     */
    protected $shipperDetails;
    /**
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails|null
     */
    protected $receiverDetails;
    /**
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails|null
     */
    protected $bookingRequestorDetails;
    /**
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails|null
     */
    protected $pickupDetails;

    public function getShipperDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails
    {
        return $this->shipperDetails;
    }

    public function setShipperDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails $shipperDetails): self
    {
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }

    public function setReceiverDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->receiverDetails = $receiverDetails;

        return $this;
    }

    public function getBookingRequestorDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails
    {
        return $this->bookingRequestorDetails;
    }

    public function setBookingRequestorDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails): self
    {
        $this->bookingRequestorDetails = $bookingRequestorDetails;

        return $this;
    }

    public function getPickupDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails
    {
        return $this->pickupDetails;
    }

    public function setPickupDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails $pickupDetails): self
    {
        $this->pickupDetails = $pickupDetails;

        return $this;
    }
}
