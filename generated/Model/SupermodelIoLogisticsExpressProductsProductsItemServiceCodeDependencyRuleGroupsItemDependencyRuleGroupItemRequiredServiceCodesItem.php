<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem
{
    /**
     * required special service code.
     *
     * @var string|null
     */
    protected $serviceCode;

    /**
     * required special service code.
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * required special service code.
     */
    public function setServiceCode(?string $serviceCode): self
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }
}
