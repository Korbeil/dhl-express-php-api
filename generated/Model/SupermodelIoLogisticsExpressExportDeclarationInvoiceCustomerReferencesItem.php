<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem
{
    /**
     * Please provide the invoice reference type code.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please provide the invoice reference.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please provide the invoice reference type code.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide the invoice reference type code.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the invoice reference.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please provide the invoice reference.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
