<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem
{
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $facilityCode;
    /**
     * @var string|null
     */
    protected $inboundSortCode;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFacilityCode(): ?string
    {
        return $this->facilityCode;
    }

    public function setFacilityCode(?string $facilityCode): self
    {
        $this->facilityCode = $facilityCode;

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
