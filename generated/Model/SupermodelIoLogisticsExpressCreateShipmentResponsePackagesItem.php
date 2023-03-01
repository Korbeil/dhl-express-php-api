<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem
{
    /**
     * Piece serial number.
     *
     * @var float|null
     */
    protected $referenceNumber;
    /**
     * Here is provided each piece its Identification number.
     *
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * You can use ths URL to track your shipment by Piece Identification Number.
     *
     * @var string|null
     */
    protected $trackingUrl;
    /**
     * Here is provided each piece volumetric/ dimensional weight.
     *
     * @var float|null
     */
    protected $volumetricWeight;
    /**
     * Here you can find all documents created for the piece's QRcode.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem[]|null
     */
    protected $documents;

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
     * Here is provided each piece its Identification number.
     */
    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    /**
     * Here is provided each piece its Identification number.
     */
    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * You can use ths URL to track your shipment by Piece Identification Number.
     */
    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    /**
     * You can use ths URL to track your shipment by Piece Identification Number.
     */
    public function setTrackingUrl(?string $trackingUrl): self
    {
        $this->trackingUrl = $trackingUrl;

        return $this;
    }

    /**
     * Here is provided each piece volumetric/ dimensional weight.
     */
    public function getVolumetricWeight(): ?float
    {
        return $this->volumetricWeight;
    }

    /**
     * Here is provided each piece volumetric/ dimensional weight.
     */
    public function setVolumetricWeight(?float $volumetricWeight): self
    {
        $this->volumetricWeight = $volumetricWeight;

        return $this;
    }

    /**
     * Here you can find all documents created for the piece's QRcode.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Here you can find all documents created for the piece's QRcode.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem[]|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }
}
