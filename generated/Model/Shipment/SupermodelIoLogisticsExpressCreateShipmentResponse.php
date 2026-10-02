<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment;

class SupermodelIoLogisticsExpressCreateShipmentResponse
{
    /**
     * URL where the request has been sent to.
     */
    public ?string $url;
    /**
     * Here you will receive Shipment Identification Number of your package.
     */
    public ?string $shipmentTrackingNumber;
    /**
     * If you requested pickup for your shipment you can use this URL to cancel the pickup.
     */
    public ?string $cancelPickupUrl;
    /**
     * You can use ths URL to track your shipment.
     */
    public ?string $trackingUrl;
    /**
     * If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking.
     */
    public ?string $dispatchConfirmationNumber;
    /**
     * Here you can find information for all pieces your shipment is having like Piece Identification Number.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem>|null
     */
    public ?array $packages;
    /**
     * Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem>|null
     */
    public ?array $documents;
    /**
     * In this field you will find the On Demand Delivery (ODD) URL link if requested.
     */
    public ?string $onDemandDeliveryURL;
    /**
     * Here you can find additional information related to your shipment when you ask for it in the request.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem>|null
     */
    public ?array $shipmentDetails;
    /**
     * Here you can find rates related to your shipment.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem>|null
     */
    public ?array $shipmentCharges;
    /**
     * Here you can find barcode details in base64.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo $barcodeInfo;
    /**
     * Here you can find details of estimated delivery date.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate $estimatedDeliveryDate;
    /**
     * @var list<string>|null
     */
    public ?array $warnings;
}
