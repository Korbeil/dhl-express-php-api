<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea
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
    protected $inboundSortCode;

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

    public function getInboundSortCode(): ?string
    {
        return $this->inboundSortCode;
    }

    public function setInboundSortCode(?string $inboundSortCode): self
    {
        $this->inboundSortCode = $inboundSortCode;

        return $this;
    }
}
