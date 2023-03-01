<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails
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
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress|null
     */
    protected $postalAddress;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem[]|null
     */
    protected $serviceArea;
    /**
     * @var string|null
     */
    protected $accountNumber;

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

    public function getPostalAddress(): ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem[]|null
     */
    public function getServiceArea(): ?array
    {
        return $this->serviceArea;
    }

    /**
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem[]|null $serviceArea
     */
    public function setServiceArea(?array $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }
}
