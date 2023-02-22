<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem
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
     * @var SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem[]|null
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
        $this->initialized['serviceCodeRuleName'] = true;
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
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem[]|null
     */
    public function getServiceCodes(): ?array
    {
        return $this->serviceCodes;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem[]|null $serviceCodes
     */
    public function setServiceCodes(?array $serviceCodes): self
    {
        $this->initialized['serviceCodes'] = true;
        $this->serviceCodes = $serviceCodes;

        return $this;
    }
}
