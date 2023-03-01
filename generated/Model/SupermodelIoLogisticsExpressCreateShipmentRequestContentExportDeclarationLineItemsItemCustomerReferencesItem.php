<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem
{
    /**
     * Please provide the line item reference type code.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please provide the line item reference.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please provide the line item reference type code.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide the line item reference type code.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the line item reference.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please provide the line item reference.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
