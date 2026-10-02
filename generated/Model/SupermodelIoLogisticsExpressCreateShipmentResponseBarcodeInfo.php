<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
{
    /**
     * Barcode base64 encoded airwaybill number.
     */
    public ?string $shipmentIdentificationNumberBarcodeContent;
    /**
     * Barcode base64 image of origin service area code, destination service area code and global product code.
     */
    public ?string $originDestinationServiceTypeBarcodeContent;
    /**
     * Barcode base64 image of DHL routing code.
     */
    public ?string $routingBarcodeContent;
    /**
     * Here you can find barcode details for each piece.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem>|null
     */
    public ?array $trackingNumberBarcodes;
}
