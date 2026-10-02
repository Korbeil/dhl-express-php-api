<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment\Documents;

class SupermodelIoLogisticsExpressImageUploadRequest
{
    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public ?string $shipmentTrackingNumber;
    public ?string $originalPlannedShippingDate;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * Please enter DHL Express Global Product code.
     */
    public ?string $productCode;
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem>|null
     */
    public ?array $documentImages;
}
