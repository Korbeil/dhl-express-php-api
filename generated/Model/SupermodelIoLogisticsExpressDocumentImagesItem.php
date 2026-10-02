<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressDocumentImagesItem
{
    /**
     * Please provide correct document type you wish to upload<BR> <BR>        Possible values;<BR>        INV, Invoice<BR>        PNV, Proforma<BR>        COO, Certificate of Origin<BR>        NAF, Nafta Certificate of Origin<BR>        CIN, Commercial Invoice<BR> DCL, Custom Declaration<BR>        AWB, Air Waybill and Waybill Document.
     */
    public ?string $typeCode = 'INV';
    /**
     * Please provide the image file format for the document you want to upload.
     */
    public ?string $imageFormat = 'PDF';
    /**
     * Please provide the base64 encoded document.
     */
    public ?string $content;
}
