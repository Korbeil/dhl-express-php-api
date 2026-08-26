<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails
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
     * Address defintion for rating related services.
     *
     * @var Rating\SupermodelIoLogisticsExpressAddressRatesRequest|null
     */
    protected $shipperDetails;
    /**
     * Address defintion for rating related services.
     *
     * @var Rating\SupermodelIoLogisticsExpressAddressRatesRequest|null
     */
    protected $receiverDetails;

    /**
     * Address defintion for rating related services.
     */
    public function getShipperDetails(): ?Rating\SupermodelIoLogisticsExpressAddressRatesRequest
    {
        return $this->shipperDetails;
    }

    /**
     * Address defintion for rating related services.
     */
    public function setShipperDetails(?Rating\SupermodelIoLogisticsExpressAddressRatesRequest $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    /**
     * Address defintion for rating related services.
     */
    public function getReceiverDetails(): ?Rating\SupermodelIoLogisticsExpressAddressRatesRequest
    {
        return $this->receiverDetails;
    }

    /**
     * Address defintion for rating related services.
     */
    public function setReceiverDetails(?Rating\SupermodelIoLogisticsExpressAddressRatesRequest $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;

        return $this;
    }
}
