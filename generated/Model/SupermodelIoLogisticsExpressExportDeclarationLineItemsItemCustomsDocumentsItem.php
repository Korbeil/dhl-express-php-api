<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem
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
     * Please provide the line item customs document type code.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please provide the line item customs document ID.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please provide the line item customs document type code.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide the line item customs document type code.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the line item customs document ID.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please provide the line item customs document ID.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
