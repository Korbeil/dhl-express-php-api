<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem
{
    /**
     * Piece serial number.
     *
     * @var float|null
     */
    protected $referenceNumber;
    /**
     * Barcode base4 image of each piece of the shipment.
     *
     * @var string|null
     */
    protected $trackingNumberBarcodeContent;

    /**
     * Piece serial number.
     */
    public function getReferenceNumber(): ?float
    {
        return $this->referenceNumber;
    }

    /**
     * Piece serial number.
     */
    public function setReferenceNumber(?float $referenceNumber): self
    {
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * Barcode base4 image of each piece of the shipment.
     */
    public function getTrackingNumberBarcodeContent(): ?string
    {
        return $this->trackingNumberBarcodeContent;
    }

    /**
     * Barcode base4 image of each piece of the shipment.
     */
    public function setTrackingNumberBarcodeContent(?string $trackingNumberBarcodeContent): self
    {
        $this->trackingNumberBarcodeContent = $trackingNumberBarcodeContent;

        return $this;
    }
}
