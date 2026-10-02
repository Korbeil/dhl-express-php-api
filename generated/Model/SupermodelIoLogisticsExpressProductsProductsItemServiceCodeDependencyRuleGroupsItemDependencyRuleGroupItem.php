<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem
{
    /**
     * Dependency rule group name.
     */
    public ?string $dependencyRuleName;
    /**
     * Dependency rule group description.
     */
    public ?string $dependencyDescription;
    /**
     * Dependency rule group condition statement.
     */
    public ?string $dependencyCondition;
    /**
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem>|null
     */
    public ?array $requiredServiceCodes;
}
