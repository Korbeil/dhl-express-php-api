<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails
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
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails|null
     */
    protected $shipperDetails;
    /**
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails|null
     */
    protected $receiverDetails;

    public function getShipperDetails(): ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails
    {
        return $this->shipperDetails;
    }

    public function setShipperDetails(?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }

    public function setReceiverDetails(?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;

        return $this;
    }
}
