<?php

namespace Korbeil\DHLExpress\Api\Model;

use Korbeil\DHLExpress\Api\Runtime\AdditionalAndPatternProperties;
use Korbeil\DHLExpress\Api\Runtime\AdditionalPropertiesInterface;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightAnyOf implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Please enter the gross weight value.
     */
    public ?float $grossValue;

    public function definedProperties(): array
    {
        return ['grossValue' => 'grossValue'];
    }
}
