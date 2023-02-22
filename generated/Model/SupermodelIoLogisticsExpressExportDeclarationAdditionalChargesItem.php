<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem
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
     * Please provide the charge value.
     *
     * @var float|null
     */
    protected $value;
    /**
     * Please enter charge type.
     *
     * @var string|null
     */
    protected $typeCode;

    /**
     * Please provide the charge value.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Please provide the charge value.
     */
    public function setValue(?float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Please enter charge type.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter charge type.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
