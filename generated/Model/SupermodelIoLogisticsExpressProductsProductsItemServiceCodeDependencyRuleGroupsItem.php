<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem
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
     * Dependent special service charge code where the rule groups are applied.
     *
     * @var string|null
     */
    protected $dependentServiceCode;
    /**
     * @var SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem[]|null
     */
    protected $dependencyRuleGroup;

    /**
     * Dependent special service charge code where the rule groups are applied.
     */
    public function getDependentServiceCode(): ?string
    {
        return $this->dependentServiceCode;
    }

    /**
     * Dependent special service charge code where the rule groups are applied.
     */
    public function setDependentServiceCode(?string $dependentServiceCode): self
    {
        $this->initialized['dependentServiceCode'] = true;
        $this->dependentServiceCode = $dependentServiceCode;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem[]|null
     */
    public function getDependencyRuleGroup(): ?array
    {
        return $this->dependencyRuleGroup;
    }

    /**
     * @param SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem[]|null $dependencyRuleGroup
     */
    public function setDependencyRuleGroup(?array $dependencyRuleGroup): self
    {
        $this->initialized['dependencyRuleGroup'] = true;
        $this->dependencyRuleGroup = $dependencyRuleGroup;

        return $this;
    }
}
