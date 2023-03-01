<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem
{
    /**
     * Provide type code of data that can be returned in response. Values can be pickupDetails, optionalShipmentData, transliterateResponse.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * @var bool|null
     */
    protected $isRequested;

    /**
     * Provide type code of data that can be returned in response. Values can be pickupDetails, optionalShipmentData, transliterateResponse.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Provide type code of data that can be returned in response. Values can be pickupDetails, optionalShipmentData, transliterateResponse.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getIsRequested(): ?bool
    {
        return $this->isRequested;
    }

    public function setIsRequested(?bool $isRequested): self
    {
        $this->isRequested = $isRequested;

        return $this;
    }
}
