<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressImageUploadRequest
{
    /**
     * Please provide Shipment Identification number (AWB number).
     *
     * @var string|null
     */
    protected $shipmentTrackingNumber;
    /**
     * @var string|null
     */
    protected $originalPlannedShippingDate;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var SupermodelIoLogisticsExpressAccount[]|null
     */
    protected $accounts;
    /**
     * Please enter DHL Express Global Product code.
     *
     * @var string|null
     */
    protected $productCode;
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned.
     *
     * @var SupermodelIoLogisticsExpressDocumentImagesItem[]|null
     */
    protected $documentImages;

    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    public function getOriginalPlannedShippingDate(): ?string
    {
        return $this->originalPlannedShippingDate;
    }

    public function setOriginalPlannedShippingDate(?string $originalPlannedShippingDate): self
    {
        $this->originalPlannedShippingDate = $originalPlannedShippingDate;

        return $this;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @return SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @param SupermodelIoLogisticsExpressAccount[]|null $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * Please enter DHL Express Global Product code.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Please enter DHL Express Global Product code.
     */
    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned.
     *
     * @return SupermodelIoLogisticsExpressDocumentImagesItem[]|null
     */
    public function getDocumentImages(): ?array
    {
        return $this->documentImages;
    }

    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned.
     *
     * @param SupermodelIoLogisticsExpressDocumentImagesItem[]|null $documentImages
     */
    public function setDocumentImages(?array $documentImages): self
    {
        $this->documentImages = $documentImages;

        return $this;
    }
}
