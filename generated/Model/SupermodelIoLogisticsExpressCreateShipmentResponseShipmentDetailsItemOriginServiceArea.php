<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea
{
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
        $this->facilityCode = $facilityCode;

        return $this;
    }

    public function getServiceAreaCode(): ?string
    {
        return $this->serviceAreaCode;
    }

    public function setServiceAreaCode(?string $serviceAreaCode): self
    {
        $this->serviceAreaCode = $serviceAreaCode;

        return $this;
    }

    public function getOutboundSortCode(): ?string
    {
        return $this->outboundSortCode;
    }

    public function setOutboundSortCode(?string $outboundSortCode): self
    {
        $this->outboundSortCode = $outboundSortCode;

        return $this;
    }
}
