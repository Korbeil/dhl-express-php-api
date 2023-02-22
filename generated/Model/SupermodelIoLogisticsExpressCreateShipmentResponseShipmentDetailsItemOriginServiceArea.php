<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea
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
    protected $outboundSortCode;

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

    public function getOutboundSortCode(): ?string
    {
        return $this->outboundSortCode;
    }

    public function setOutboundSortCode(?string $outboundSortCode): self
    {
        $this->initialized['outboundSortCode'] = true;
        $this->outboundSortCode = $outboundSortCode;

        return $this;
    }
}
