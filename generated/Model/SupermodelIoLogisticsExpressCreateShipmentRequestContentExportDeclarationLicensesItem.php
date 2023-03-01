<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem
{
    /**
     * Please provide type of the license.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please provide the license.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please provide type of the license.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide type of the license.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the license.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please provide the license.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
