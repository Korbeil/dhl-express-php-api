<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem
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
    protected $outboundSortCode;

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
