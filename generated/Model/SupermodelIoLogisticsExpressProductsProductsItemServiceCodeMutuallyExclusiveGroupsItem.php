<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem
{
    /**
     * Mutually exclusive serviceCode group name.
     *
     * @var string|null
     */
    protected $serviceCodeRuleName;
    /**
     * Mutually exclusive serviceCode group description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * @var SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem[]|null
     */
    protected $serviceCodes;

    /**
     * Mutually exclusive serviceCode group name.
     */
    public function getServiceCodeRuleName(): ?string
    {
        return $this->serviceCodeRuleName;
    }

    /**
     * Mutually exclusive serviceCode group name.
     */
    public function setServiceCodeRuleName(?string $serviceCodeRuleName): self
    {
        $this->serviceCodeRuleName = $serviceCodeRuleName;

        return $this;
    }

    /**
     * Mutually exclusive serviceCode group description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Mutually exclusive serviceCode group description.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem[]|null
     */
    public function getServiceCodes(): ?array
    {
        return $this->serviceCodes;
    }

    /**
     * @param SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem[]|null $serviceCodes
     */
    public function setServiceCodes(?array $serviceCodes): self
    {
        $this->serviceCodes = $serviceCodes;

        return $this;
    }
}
