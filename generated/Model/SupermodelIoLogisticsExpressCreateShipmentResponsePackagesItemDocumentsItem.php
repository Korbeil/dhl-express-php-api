<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem
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
     * Identifies image format the document is created in, like PNG etc.
     *
     * @var string|null
     */
    protected $imageFormat;
    /**
     * Contains base64 encoded document image.
     *
     * @var string|null
     */
    protected $content;
    /**
     * Identifie type of the QR code.
     *
     * @var string|null
     */
    protected $typeCode;

    /**
     * Identifies image format the document is created in, like PNG etc.
     */
    public function getImageFormat(): ?string
    {
        return $this->imageFormat;
    }

    /**
     * Identifies image format the document is created in, like PNG etc.
     */
    public function setImageFormat(?string $imageFormat): self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;

        return $this;
    }

    /**
     * Contains base64 encoded document image.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Contains base64 encoded document image.
     */
    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * Identifie type of the QR code.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Identifie type of the QR code.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
