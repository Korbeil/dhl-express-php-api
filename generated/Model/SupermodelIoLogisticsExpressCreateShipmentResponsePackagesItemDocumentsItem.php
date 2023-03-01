<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem
{
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
        $this->typeCode = $typeCode;

        return $this;
    }
}
