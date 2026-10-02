<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem
{
    /**
     * Identifies image format the document is created in, like PNG etc.
     */
    public ?string $imageFormat;
    /**
     * Contains base64 encoded document image.
     */
    public ?string $content;
    /**
     * Identifie type of the QR code.
     */
    public ?string $typeCode;
}
