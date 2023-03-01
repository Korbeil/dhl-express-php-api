<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem
{
    /**
     * Please enter barcode content.
     *
     * @var string|null
     */
    protected $content;
    /**
     * Please tner text below customer barcode.
     *
     * @var string|null
     */
    protected $textBelowBarcode;
    /**
     * Please enter valid Symbology code.
     *
     * @var string|null
     */
    protected $symbologyCode;

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
     * Please tner text below customer barcode.
     */
    public function getTextBelowBarcode(): ?string
    {
        return $this->textBelowBarcode;
    }

    /**
     * Please tner text below customer barcode.
     */
    public function setTextBelowBarcode(?string $textBelowBarcode): self
    {
        $this->textBelowBarcode = $textBelowBarcode;

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
}
