<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem
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
     * Shipment Tracking Number.
     *
     * @var string|null
     */
    protected $shipmentTrackingNumber;
    /**
     * Identifies type of the document like commercial invoice or waybill, or archived zip documents.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Clearance code or document function whether for import, export or both.  Returned only for customs-entry.
     *
     * @var string|null
     */
    protected $function;
    /**
     * Identifies image format the document is created in, like PDF, TIFF, or ZIP.
     *
     * @var string|null
     */
    protected $encodingFormat;
    /**
     * Contains base64 encoded document image or archived zip.
     *
     * @var string|null
     */
    protected $content;

    /**
     * Shipment Tracking Number.
     */
    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Shipment Tracking Number.
     */
    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->initialized['shipmentTrackingNumber'] = true;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    /**
     * Identifies type of the document like commercial invoice or waybill, or archived zip documents.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Identifies type of the document like commercial invoice or waybill, or archived zip documents.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Clearance code or document function whether for import, export or both.  Returned only for customs-entry.
     */
    public function getFunction(): ?string
    {
        return $this->function;
    }

    /**
     * Clearance code or document function whether for import, export or both.  Returned only for customs-entry.
     */
    public function setFunction(?string $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;

        return $this;
    }

    /**
     * Identifies image format the document is created in, like PDF, TIFF, or ZIP.
     */
    public function getEncodingFormat(): ?string
    {
        return $this->encodingFormat;
    }

    /**
     * Identifies image format the document is created in, like PDF, TIFF, or ZIP.
     */
    public function setEncodingFormat(?string $encodingFormat): self
    {
        $this->initialized['encodingFormat'] = true;
        $this->encodingFormat = $encodingFormat;

        return $this;
    }

    /**
     * Contains base64 encoded document image or archived zip.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Contains base64 encoded document image or archived zip.
     */
    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }
}
