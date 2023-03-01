<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressEPODResponseDocumentsItem
{
    /**
     * @var string|null
     */
    protected $encodingFormat;
    /**
     * @var string|null
     */
    protected $content;
    /**
     * @var string|null
     */
    protected $typeCode;

    public function getEncodingFormat(): ?string
    {
        return $this->encodingFormat;
    }

    public function setEncodingFormat(?string $encodingFormat): self
    {
        $this->encodingFormat = $encodingFormat;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }
}
