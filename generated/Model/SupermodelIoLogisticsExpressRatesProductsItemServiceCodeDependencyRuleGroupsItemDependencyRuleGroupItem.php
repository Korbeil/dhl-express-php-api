<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem
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
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem>|null
     */
    public ?array $requiredServiceCodes;
}
