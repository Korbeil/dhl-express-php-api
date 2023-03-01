<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
{
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
        $this->name = $name;

        return $this;
    }

    public function getPostalAddress(): ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress $postalAddress): self
    {
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
        $this->serviceArea = $serviceArea;

        return $this;
    }
}
