<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem
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
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getIsRequested(): ?bool
    {
        return $this->isRequested;
    }

    public function setIsRequested(?bool $isRequested): self
    {
        $this->initialized['isRequested'] = true;
        $this->isRequested = $isRequested;

        return $this;
    }
}
