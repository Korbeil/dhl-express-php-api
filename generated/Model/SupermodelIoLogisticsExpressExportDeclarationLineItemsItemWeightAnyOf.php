<?php

namespace Korbeil\DHLExpress\Api\Model;

use Korbeil\DHLExpress\Api\Runtime\AdditionalAndPatternProperties;
use Korbeil\DHLExpress\Api\Runtime\AdditionalPropertiesInterface;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightAnyOf implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Please enter the gross weight value.
     *
     * @var float|null
     */
    protected $grossValue;

    /**
     * Please enter the gross weight value.
     */
    public function getGrossValue(): ?float
    {
        return $this->grossValue;
    }

    /**
     * Please enter the gross weight value.
     */
    public function setGrossValue(?float $grossValue): self
    {
        $this->initialized['grossValue'] = true;
        $this->grossValue = $grossValue;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['grossValue' => ['grossValue', 'getGrossValue', 'setGrossValue']];
    }
}
