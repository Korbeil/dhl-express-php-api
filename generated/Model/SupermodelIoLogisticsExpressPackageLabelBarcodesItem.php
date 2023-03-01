<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackageLabelBarcodesItem
{
    /**
     * Position of the bespoke barcode.
     *
     * @var string|null
     */
    protected $position;
    /**
     * Please enter valid Symbology code.
     *
     * @var string|null
     */
    protected $symbologyCode;
    /**
     * Please enter barcode content.
     *
     * @var string|null
     */
    protected $content;
    /**
     * Please enter text below customer barcode.
     *
     * @var string|null
     */
    protected $textBelowBarcode;

    /**
     * Position of the bespoke barcode.
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * Position of the bespoke barcode.
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Please enter valid Symbology code.
     */
    public function getSymbologyCode(): ?string
    {
        return $this->symbologyCode;
    }

    /**
     * Please enter valid Symbology code.
     */
    public function setSymbologyCode(?string $symbologyCode): self
    {
        $this->symbologyCode = $symbologyCode;

        return $this;
    }

    /**
     * Please enter barcode content.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Please enter barcode content.
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Please enter text below customer barcode.
     */
    public function getTextBelowBarcode(): ?string
    {
        return $this->textBelowBarcode;
    }

    /**
     * Please enter text below customer barcode.
     */
    public function setTextBelowBarcode(?string $textBelowBarcode): self
    {
        $this->textBelowBarcode = $textBelowBarcode;

        return $this;
    }
}
