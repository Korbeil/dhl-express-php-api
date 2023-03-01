<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem
{
    /**
     * Please specify image file format.
     *
     * @var string|null
     */
    protected $fileFormat;
    /**
     * Please provide base64 encoded logo image.
     *
     * @var string|null
     */
    protected $content;

    /**
     * Please specify image file format.
     */
    public function getFileFormat(): ?string
    {
        return $this->fileFormat;
    }

    /**
     * Please specify image file format.
     */
    public function setFileFormat(?string $fileFormat): self
    {
        $this->fileFormat = $fileFormat;

        return $this;
    }

    /**
     * Please provide base64 encoded logo image.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Please provide base64 encoded logo image.
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
