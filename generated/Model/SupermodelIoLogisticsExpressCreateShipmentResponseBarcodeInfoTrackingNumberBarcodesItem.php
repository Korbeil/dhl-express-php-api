<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem
{
    /**
     * Piece serial number.
     */
    public ?float $referenceNumber;
    /**
     * Barcode base4 image of each piece of the shipment.
     */
    public ?string $trackingNumberBarcodeContent;
}
