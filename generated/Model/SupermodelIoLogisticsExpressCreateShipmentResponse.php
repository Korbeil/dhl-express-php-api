<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponse
{
    /**
     * URL where the request has been sent to.
     *
     * @var string|null
     */
    protected $url;
    /**
     * Here you will receive Shipment Identification Number of your package.
     *
     * @var string|null
     */
    protected $shipmentTrackingNumber;
    /**
     * If you requested pickup for your shipment you can use this URL to cancel the pickup.
     *
     * @var string|null
     */
    protected $cancelPickupUrl;
    /**
     * You can use ths URL to track your shipment.
     *
     * @var string|null
     */
    protected $trackingUrl;
    /**
     * If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking.
     *
     * @var string|null
     */
    protected $dispatchConfirmationNumber;
    /**
     * Here you can find information for all pieces your shipment is having like Piece Identification Number.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem[]|null
     */
    protected $packages;
    /**
     * Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem[]|null
     */
    protected $documents;
    /**
     * In this field you will find the On Demand Delivery (ODD) URL link if requested.
     *
     * @var string|null
     */
    protected $onDemandDeliveryURL;
    /**
     * Here you can find additional information related to your shipment when you ask for it in the request.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem[]|null
     */
    protected $shipmentDetails;
    /**
     * Here you can find rates related to your shipment.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem[]|null
     */
    protected $shipmentCharges;
    /**
     * Here you can find barcode details in base64.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo|null
     */
    protected $barcodeInfo;
    /**
     * Here you can find details of estimated delivery date.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate|null
     */
    protected $estimatedDeliveryDate;
    /**
     * @var string[]|null
     */
    protected $warnings;

    /**
     * URL where the request has been sent to.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * URL where the request has been sent to.
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Here you will receive Shipment Identification Number of your package.
     */
    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Here you will receive Shipment Identification Number of your package.
     */
    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    /**
     * If you requested pickup for your shipment you can use this URL to cancel the pickup.
     */
    public function getCancelPickupUrl(): ?string
    {
        return $this->cancelPickupUrl;
    }

    /**
     * If you requested pickup for your shipment you can use this URL to cancel the pickup.
     */
    public function setCancelPickupUrl(?string $cancelPickupUrl): self
    {
        $this->cancelPickupUrl = $cancelPickupUrl;

        return $this;
    }

    /**
     * You can use ths URL to track your shipment.
     */
    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    /**
     * You can use ths URL to track your shipment.
     */
    public function setTrackingUrl(?string $trackingUrl): self
    {
        $this->trackingUrl = $trackingUrl;

        return $this;
    }

    /**
     * If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking.
     */
    public function getDispatchConfirmationNumber(): ?string
    {
        return $this->dispatchConfirmationNumber;
    }

    /**
     * If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking.
     */
    public function setDispatchConfirmationNumber(?string $dispatchConfirmationNumber): self
    {
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;

        return $this;
    }

    /**
     * Here you can find information for all pieces your shipment is having like Piece Identification Number.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * Here you can find information for all pieces your shipment is having like Piece Identification Number.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->packages = $packages;

        return $this;
    }

    /**
     * Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem[]|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * In this field you will find the On Demand Delivery (ODD) URL link if requested.
     */
    public function getOnDemandDeliveryURL(): ?string
    {
        return $this->onDemandDeliveryURL;
    }

    /**
     * In this field you will find the On Demand Delivery (ODD) URL link if requested.
     */
    public function setOnDemandDeliveryURL(?string $onDemandDeliveryURL): self
    {
        $this->onDemandDeliveryURL = $onDemandDeliveryURL;

        return $this;
    }

    /**
     * Here you can find additional information related to your shipment when you ask for it in the request.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem[]|null
     */
    public function getShipmentDetails(): ?array
    {
        return $this->shipmentDetails;
    }

    /**
     * Here you can find additional information related to your shipment when you ask for it in the request.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem[]|null $shipmentDetails
     */
    public function setShipmentDetails(?array $shipmentDetails): self
    {
        $this->shipmentDetails = $shipmentDetails;

        return $this;
    }

    /**
     * Here you can find rates related to your shipment.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem[]|null
     */
    public function getShipmentCharges(): ?array
    {
        return $this->shipmentCharges;
    }

    /**
     * Here you can find rates related to your shipment.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem[]|null $shipmentCharges
     */
    public function setShipmentCharges(?array $shipmentCharges): self
    {
        $this->shipmentCharges = $shipmentCharges;

        return $this;
    }

    /**
     * Here you can find barcode details in base64.
     */
    public function getBarcodeInfo(): ?SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
    {
        return $this->barcodeInfo;
    }

    /**
     * Here you can find barcode details in base64.
     */
    public function setBarcodeInfo(?SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo $barcodeInfo): self
    {
        $this->barcodeInfo = $barcodeInfo;

        return $this;
    }

    /**
     * Here you can find details of estimated delivery date.
     */
    public function getEstimatedDeliveryDate(): ?SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * Here you can find details of estimated delivery date.
     */
    public function setEstimatedDeliveryDate(?SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate $estimatedDeliveryDate): self
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param string[]|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }
}
