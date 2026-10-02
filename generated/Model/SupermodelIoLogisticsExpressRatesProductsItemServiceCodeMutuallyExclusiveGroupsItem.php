<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem
{
    /**
     * Mutually exclusive serviceCode group name.
     */
    public ?string $serviceCodeRuleName;
    /**
     * Mutually exclusive serviceCode group description.
     */
    public ?string $description;
    /**
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem>|null
     */
    public ?array $serviceCodes;
}
