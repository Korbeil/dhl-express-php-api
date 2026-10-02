<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem
{
    /**
     * Item additional quantity value UOM:<BR> example PFL=percent of alcohol.
     */
    public ?string $typeCode;
    /**
     * An Item's additional quantity value:<BR> example is percent of alcohol.
     */
    public ?float $amount;
}
