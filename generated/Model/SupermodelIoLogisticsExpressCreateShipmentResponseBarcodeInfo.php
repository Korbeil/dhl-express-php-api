<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Barcode base64 encoded airwaybill number.
     *
     * @var string|null
     */
    protected $shipmentIdentificationNumberBarcodeContent;
    /**
     * Barcode base64 image of origin service area code, destination service area code and global product code.
     *
     * @var string|null
     */
    protected $originDestinationServiceTypeBarcodeContent;
    /**
     * Barcode base64 image of DHL routing code.
     *
     * @var string|null
     */
    protected $routingBarcodeContent;
    /**
     * Here you can find barcode details for each piece.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem[]|null
     */
    protected $trackingNumberBarcodes;

    /**
     * Barcode base64 encoded airwaybill number.
     */
    public function getShipmentIdentificationNumberBarcodeContent(): ?string
    {
        return $this->shipmentIdentificationNumberBarcodeContent;
    }

    /**
     * Barcode base64 encoded airwaybill number.
     */
    public function setShipmentIdentificationNumberBarcodeContent(?string $shipmentIdentificationNumberBarcodeContent): self
    {
        $this->initialized['shipmentIdentificationNumberBarcodeContent'] = true;
        $this->shipmentIdentificationNumberBarcodeContent = $shipmentIdentificationNumberBarcodeContent;

        return $this;
    }

    /**
     * Barcode base64 image of origin service area code, destination service area code and global product code.
     */
    public function getOriginDestinationServiceTypeBarcodeContent(): ?string
    {
        return $this->originDestinationServiceTypeBarcodeContent;
    }

    /**
     * Barcode base64 image of origin service area code, destination service area code and global product code.
     */
    public function setOriginDestinationServiceTypeBarcodeContent(?string $originDestinationServiceTypeBarcodeContent): self
    {
        $this->initialized['originDestinationServiceTypeBarcodeContent'] = true;
        $this->originDestinationServiceTypeBarcodeContent = $originDestinationServiceTypeBarcodeContent;

        return $this;
    }

    /**
     * Barcode base64 image of DHL routing code.
     */
    public function getRoutingBarcodeContent(): ?string
    {
        return $this->routingBarcodeContent;
    }

    /**
     * Barcode base64 image of DHL routing code.
     */
    public function setRoutingBarcodeContent(?string $routingBarcodeContent): self
    {
        $this->initialized['routingBarcodeContent'] = true;
        $this->routingBarcodeContent = $routingBarcodeContent;

        return $this;
    }

    /**
     * Here you can find barcode details for each piece.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem[]|null
     */
    public function getTrackingNumberBarcodes(): ?array
    {
        return $this->trackingNumberBarcodes;
    }

    /**
     * Here you can find barcode details for each piece.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem[]|null $trackingNumberBarcodes
     */
    public function setTrackingNumberBarcodes(?array $trackingNumberBarcodes): self
    {
        $this->initialized['trackingNumberBarcodes'] = true;
        $this->trackingNumberBarcodes = $trackingNumberBarcodes;

        return $this;
    }
}
