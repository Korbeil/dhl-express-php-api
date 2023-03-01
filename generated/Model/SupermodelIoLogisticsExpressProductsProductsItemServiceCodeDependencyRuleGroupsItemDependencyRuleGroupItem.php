<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem
{
    /**
     * Dependency rule group name.
     *
     * @var string|null
     */
    protected $dependencyRuleName;
    /**
     * Dependency rule group description.
     *
     * @var string|null
     */
    protected $dependencyDescription;
    /**
     * Dependency rule group condition statement.
     *
     * @var string|null
     */
    protected $dependencyCondition;
    /**
     * @var SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem[]|null
     */
    protected $requiredServiceCodes;

    /**
     * Dependency rule group name.
     */
    public function getDependencyRuleName(): ?string
    {
        return $this->dependencyRuleName;
    }

    /**
     * Dependency rule group name.
     */
    public function setDependencyRuleName(?string $dependencyRuleName): self
    {
        $this->dependencyRuleName = $dependencyRuleName;

        return $this;
    }

    /**
     * Dependency rule group description.
     */
    public function getDependencyDescription(): ?string
    {
        return $this->dependencyDescription;
    }

    /**
     * Dependency rule group description.
     */
    public function setDependencyDescription(?string $dependencyDescription): self
    {
        $this->dependencyDescription = $dependencyDescription;

        return $this;
    }

    /**
     * Dependency rule group condition statement.
     */
    public function getDependencyCondition(): ?string
    {
        return $this->dependencyCondition;
    }

    /**
     * Dependency rule group condition statement.
     */
    public function setDependencyCondition(?string $dependencyCondition): self
    {
        $this->dependencyCondition = $dependencyCondition;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem[]|null
     */
    public function getRequiredServiceCodes(): ?array
    {
        return $this->requiredServiceCodes;
    }

    /**
     * @param SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem[]|null $requiredServiceCodes
     */
    public function setRequiredServiceCodes(?array $requiredServiceCodes): self
    {
        $this->requiredServiceCodes = $requiredServiceCodes;

        return $this;
    }
}
