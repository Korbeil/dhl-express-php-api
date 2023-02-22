<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPickupRequestCustomerDetails
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
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }

    public function setReceiverDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;

        return $this;
    }

    public function getBookingRequestorDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails
    {
        return $this->bookingRequestorDetails;
    }

    public function setBookingRequestorDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails): self
    {
        $this->initialized['bookingRequestorDetails'] = true;
        $this->bookingRequestorDetails = $bookingRequestorDetails;

        return $this;
    }

    public function getPickupDetails(): ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails
    {
        return $this->pickupDetails;
    }

    public function setPickupDetails(?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails $pickupDetails): self
    {
        $this->initialized['pickupDetails'] = true;
        $this->pickupDetails = $pickupDetails;

        return $this;
    }
}
