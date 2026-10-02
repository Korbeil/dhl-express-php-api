<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem
{
    /**
     * Piece serial number.
     */
    public ?float $referenceNumber;
    /**
     * Here is provided each piece its Identification number.
     */
    public ?string $trackingNumber;
    /**
     * You can use ths URL to track your shipment by Piece Identification Number.
     */
    public ?string $trackingUrl;
    /**
     * Here is provided each piece volumetric/ dimensional weight.
     */
    public ?float $volumetricWeight;
    /**
     * Here you can find all documents created for the piece's QRcode.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem>|null
     */
    public ?array $documents;
}
