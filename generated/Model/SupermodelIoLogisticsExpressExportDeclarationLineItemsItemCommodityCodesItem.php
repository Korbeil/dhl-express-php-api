<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem
{
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
        $this->value = $value;

        return $this;
    }
}
