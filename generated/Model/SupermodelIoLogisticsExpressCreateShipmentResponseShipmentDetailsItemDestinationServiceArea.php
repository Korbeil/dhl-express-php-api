<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea
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
    protected $facilityCode;
    /**
     * @var string|null
     */
    protected $serviceAreaCode;
    /**
     * @var string|null
     */
    protected $inboundSortCode;

    public function getFacilityCode(): ?string
    {
        return $this->facilityCode;
    }

    public function setFacilityCode(?string $facilityCode): self
    {
        $this->initialized['facilityCode'] = true;
        $this->facilityCode = $facilityCode;

        return $this;
    }

    public function getServiceAreaCode(): ?string
    {
        return $this->serviceAreaCode;
    }

    public function setServiceAreaCode(?string $serviceAreaCode): self
    {
        $this->initialized['serviceAreaCode'] = true;
        $this->serviceAreaCode = $serviceAreaCode;

        return $this;
    }

    public function getInboundSortCode(): ?string
    {
        return $this->inboundSortCode;
    }

    public function setInboundSortCode(?string $inboundSortCode): self
    {
        $this->initialized['inboundSortCode'] = true;
        $this->inboundSortCode = $inboundSortCode;

        return $this;
    }
}
