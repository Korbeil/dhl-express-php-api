<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem
{
    /**
     * Shipment Tracking Number.
     */
    public ?string $shipmentTrackingNumber;
    /**
     * Identifies type of the document like commercial invoice or waybill, or archived zip documents.
     */
    public ?string $typeCode;
    /**
     * Clearance code or document function whether for import, export or both.  Returned only for customs-entry.
     */
    public ?string $function;
    /**
     * Identifies image format the document is created in, like PDF, TIFF, or ZIP.
     */
    public ?string $encodingFormat;
    /**
     * Contains base64 encoded document image or archived zip.
     */
    public ?string $content;
}
