<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem
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
     * Please provide type of the commodity code.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please provide the commodity code.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please provide type of the commodity code.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide type of the commodity code.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the commodity code.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please provide the commodity code.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
