<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem
{
    /**
     * Please provide the charge value.
     *
     * @var float|null
     */
    protected $value;
    /**
     * Please enter charge caption.
     *
     * @var string|null
     */
    protected $caption;
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
        $this->value = $value;

        return $this;
    }

    /**
     * Please enter charge caption.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Please enter charge caption.
     */
    public function setCaption(?string $caption): self
    {
        $this->caption = $caption;

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
        $this->typeCode = $typeCode;

        return $this;
    }
}
