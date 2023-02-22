<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressEPODResponseDocumentsItem
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
        $this->initialized['encodingFormat'] = true;
        $this->encodingFormat = $encodingFormat;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
