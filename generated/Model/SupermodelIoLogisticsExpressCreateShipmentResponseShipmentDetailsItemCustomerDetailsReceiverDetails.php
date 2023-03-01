<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails
{
    /**
     * @var SupermodelIoLogisticsExpressAddressCreateShipmentResponse|null
     */
    protected $postalAddress;
    /**
     * @var SupermodelIoLogisticsExpressContactCreateShipmentResponse|null
     */
    protected $contactInformation;

    public function getPostalAddress(): ?SupermodelIoLogisticsExpressAddressCreateShipmentResponse
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?SupermodelIoLogisticsExpressAddressCreateShipmentResponse $postalAddress): self
    {
        $this->postalAddress = $postalAddress;

        return $this;
    }

    public function getContactInformation(): ?SupermodelIoLogisticsExpressContactCreateShipmentResponse
    {
        return $this->contactInformation;
    }

    public function setContactInformation(?SupermodelIoLogisticsExpressContactCreateShipmentResponse $contactInformation): self
    {
        $this->contactInformation = $contactInformation;

        return $this;
    }
}
