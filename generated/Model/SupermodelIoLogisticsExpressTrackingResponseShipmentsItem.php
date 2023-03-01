<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItem
{
    /**
     * @var string|null
     */
    protected $shipmentTrackingNumber;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $shipmentTimestamp;
    /**
     * DHL product code.
     *
     * @var string|null
     */
    protected $productCode;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails|null
     */
    protected $shipperDetails;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails|null
     */
    protected $receiverDetails;
    /**
     * @var float|null
     */
    protected $totalWeight;
    /**
     * @var string|null
     */
    protected $unitOfMeasurements;
    /**
     * @var SupermodelIoLogisticsExpressReference[]|null
     */
    protected $shipperReferences;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem[]|null
     */
    protected $events;
    /**
     * @var float|null
     */
    protected $numberOfPieces;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem[]|null
     */
    protected $pieces;
    /**
     * @var string|null
     */
    protected $estimatedDeliveryDate;
    /**
     * @var string[]|null
     */
    protected $childrenShipmentIdentificationNumbers;

    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getShipmentTimestamp(): ?string
    {
        return $this->shipmentTimestamp;
    }

    public function setShipmentTimestamp(?string $shipmentTimestamp): self
    {
        $this->shipmentTimestamp = $shipmentTimestamp;

        return $this;
    }

    /**
     * DHL product code.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * DHL product code.
     */
    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShipperDetails(): ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails
    {
        return $this->shipperDetails;
    }

    public function setShipperDetails(?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails $shipperDetails): self
    {
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
    {
        return $this->receiverDetails;
    }

    public function setReceiverDetails(?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails $receiverDetails): self
    {
        $this->receiverDetails = $receiverDetails;

        return $this;
    }

    public function getTotalWeight(): ?float
    {
        return $this->totalWeight;
    }

    public function setTotalWeight(?float $totalWeight): self
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    public function getUnitOfMeasurements(): ?string
    {
        return $this->unitOfMeasurements;
    }

    public function setUnitOfMeasurements(?string $unitOfMeasurements): self
    {
        $this->unitOfMeasurements = $unitOfMeasurements;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressReference[]|null
     */
    public function getShipperReferences(): ?array
    {
        return $this->shipperReferences;
    }

    /**
     * @param SupermodelIoLogisticsExpressReference[]|null $shipperReferences
     */
    public function setShipperReferences(?array $shipperReferences): self
    {
        $this->shipperReferences = $shipperReferences;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem[]|null $events
     */
    public function setEvents(?array $events): self
    {
        $this->events = $events;

        return $this;
    }

    public function getNumberOfPieces(): ?float
    {
        return $this->numberOfPieces;
    }

    public function setNumberOfPieces(?float $numberOfPieces): self
    {
        $this->numberOfPieces = $numberOfPieces;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem[]|null
     */
    public function getPieces(): ?array
    {
        return $this->pieces;
    }

    /**
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem[]|null $pieces
     */
    public function setPieces(?array $pieces): self
    {
        $this->pieces = $pieces;

        return $this;
    }

    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->estimatedDeliveryDate;
    }

    public function setEstimatedDeliveryDate(?string $estimatedDeliveryDate): self
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getChildrenShipmentIdentificationNumbers(): ?array
    {
        return $this->childrenShipmentIdentificationNumbers;
    }

    /**
     * @param string[]|null $childrenShipmentIdentificationNumbers
     */
    public function setChildrenShipmentIdentificationNumbers(?array $childrenShipmentIdentificationNumbers): self
    {
        $this->childrenShipmentIdentificationNumbers = $childrenShipmentIdentificationNumbers;

        return $this;
    }
}
