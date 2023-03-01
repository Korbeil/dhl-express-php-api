<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem
{
    /**
     * Provide type code of data that can be returned in response. Values can be allValueAddedServices, allValueAddedServicesAndRuleGroups.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * @var bool|null
     */
    protected $isRequested;

    /**
     * Provide type code of data that can be returned in response. Values can be allValueAddedServices, allValueAddedServicesAndRuleGroups.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Provide type code of data that can be returned in response. Values can be allValueAddedServices, allValueAddedServicesAndRuleGroups.
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
