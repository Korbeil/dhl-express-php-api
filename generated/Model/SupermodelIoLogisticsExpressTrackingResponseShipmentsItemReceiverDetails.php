<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
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
     * @var string|null
     */
    protected $name;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress|null
     */
    protected $postalAddress;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem[]|null
     */
    protected $serviceArea;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPostalAddress(): ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem[]|null
     */
    public function getServiceArea(): ?array
    {
        return $this->serviceArea;
    }

    /**
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem[]|null $serviceArea
     */
    public function setServiceArea(?array $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;

        return $this;
    }
}
