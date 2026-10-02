<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackageLabelBarcodesItem
{
    /**
     * Position of the bespoke barcode.
     */
    public ?string $position;
    /**
     * Please enter valid Symbology code.
     */
    public ?string $symbologyCode;
    /**
     * Please enter barcode content.
     */
    public ?string $content;
    /**
     * Please enter text below customer barcode.
     */
    public ?string $textBelowBarcode;
}
