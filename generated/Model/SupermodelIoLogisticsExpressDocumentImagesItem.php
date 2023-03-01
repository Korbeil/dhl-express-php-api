<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressDocumentImagesItem
{
    /**
     * Please provide correct document type you wish to upload<BR> <BR>        Possible values;<BR>        INV, Invoice<BR>        PNV, Proforma<BR>        COO, Certificate of Origin<BR>        NAF, Nafta Certificate of Origin<BR>        CIN, Commercial Invoice<BR> DCL, Custom Declaration<BR>        AWB, Air Waybill and Waybill Document.
     *
     * @var string|null
     */
    protected $typeCode = 'INV';
    /**
     * Please provide the image file format for the document you want to upload.
     *
     * @var string|null
     */
    protected $imageFormat = 'PDF';
    /**
     * Please provide the base64 encoded document.
     *
     * @var string|null
     */
    protected $content;

    /**
     * Please provide correct document type you wish to upload<BR> <BR>        Possible values;<BR>        INV, Invoice<BR>        PNV, Proforma<BR>        COO, Certificate of Origin<BR>        NAF, Nafta Certificate of Origin<BR>        CIN, Commercial Invoice<BR> DCL, Custom Declaration<BR>        AWB, Air Waybill and Waybill Document.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide correct document type you wish to upload<BR> <BR>        Possible values;<BR>        INV, Invoice<BR>        PNV, Proforma<BR>        COO, Certificate of Origin<BR>        NAF, Nafta Certificate of Origin<BR>        CIN, Commercial Invoice<BR> DCL, Custom Declaration<BR>        AWB, Air Waybill and Waybill Document.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the image file format for the document you want to upload.
     */
    public function getImageFormat(): ?string
    {
        return $this->imageFormat;
    }

    /**
     * Please provide the image file format for the document you want to upload.
     */
    public function setImageFormat(?string $imageFormat): self
    {
        $this->imageFormat = $imageFormat;

        return $this;
    }

    /**
     * Please provide the base64 encoded document.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Please provide the base64 encoded document.
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
