<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem
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
     * Please provide the Customs Document type code at invoice level.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please provide the Customs Document ID at invoice level.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please provide the Customs Document type code at invoice level.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide the Customs Document type code at invoice level.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the Customs Document ID at invoice level.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please provide the Customs Document ID at invoice level.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
