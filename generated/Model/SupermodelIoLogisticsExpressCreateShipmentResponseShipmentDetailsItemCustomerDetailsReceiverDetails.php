<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails
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
     * @var Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse|null
     */
    protected $postalAddress;
    /**
     * @var Shipment\SupermodelIoLogisticsExpressContactCreateShipmentResponse|null
     */
    protected $contactInformation;

    public function getPostalAddress(): ?Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;

        return $this;
    }

    public function getContactInformation(): ?Shipment\SupermodelIoLogisticsExpressContactCreateShipmentResponse
    {
        return $this->contactInformation;
    }

    public function setContactInformation(?Shipment\SupermodelIoLogisticsExpressContactCreateShipmentResponse $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;

        return $this;
    }
}
