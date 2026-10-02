<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem
{
    /**
     * Identifie image format the document is created in, like PDF, JPG etc.
     */
    public ?string $imageFormat;
    /**
     * Contains base64 encoded document image.
     */
    public ?string $content;
    /**
     * Identifie type of the document, like invoice, label or receipt.
     */
    public ?string $typeCode;
}
