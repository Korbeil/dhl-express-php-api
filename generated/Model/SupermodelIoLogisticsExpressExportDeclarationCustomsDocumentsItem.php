<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem
{
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
        $this->value = $value;

        return $this;
    }
}
