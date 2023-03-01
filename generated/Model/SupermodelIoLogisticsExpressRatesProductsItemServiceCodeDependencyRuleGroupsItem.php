<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem
{
    /**
     * Dependent special service charge code where the rule groups are applied.
     *
     * @var string|null
     */
    protected $dependentServiceCode;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem[]|null
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
     * @return SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem[]|null
     */
    public function getDependencyRuleGroup(): ?array
    {
        return $this->dependencyRuleGroup;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem[]|null $dependencyRuleGroup
     */
    public function setDependencyRuleGroup(?array $dependencyRuleGroup): self
    {
        $this->dependencyRuleGroup = $dependencyRuleGroup;

        return $this;
    }
}
