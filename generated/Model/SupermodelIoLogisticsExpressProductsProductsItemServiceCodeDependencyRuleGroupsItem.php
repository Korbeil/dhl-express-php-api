<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem
{
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
        $this->dependencyRuleGroup = $dependencyRuleGroup;

        return $this;
    }
}
