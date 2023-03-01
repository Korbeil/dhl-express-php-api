<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestCustomerDetails
{
    /**
     * Address defintion for rating related services.
     *
     * @var SupermodelIoLogisticsExpressAddressRatesRequest|null
     */
    protected $shipperDetails;
    /**
     * Address defintion for rating related services.
     *
     * @var SupermodelIoLogisticsExpressAddressRatesRequest|null
     */
    protected $receiverDetails;

    /**
     * Address defintion for rating related services.
     */
    public function getShipperDetails(): ?SupermodelIoLogisticsExpressAddressRatesRequest
    {
        return $this->shipperDetails;
    }

    /**
     * Address defintion for rating related services.
     */
    public function setShipperDetails(?SupermodelIoLogisticsExpressAddressRatesRequest $shipperDetails): self
    {
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    /**
     * Address defintion for rating related services.
     */
    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressAddressRatesRequest
    {
        return $this->receiverDetails;
    }

    /**
     * Address defintion for rating related services.
     */
    public function setReceiverDetails(?SupermodelIoLogisticsExpressAddressRatesRequest $receiverDetails): self
    {
        $this->receiverDetails = $receiverDetails;

        return $this;
    }
}
