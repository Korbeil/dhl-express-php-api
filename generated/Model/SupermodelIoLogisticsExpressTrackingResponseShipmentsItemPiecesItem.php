<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem
{
    /**
     * @var float|null
     */
    protected $number;
    /**
     * @var string|null
     */
    protected $typeCode;
    /**
     * @var string|null
     */
    protected $shipmentTrackingNumber;
    /**
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * The weight of the package.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * The weight of the package.
     *
     * @var float|null
     */
    protected $dimensionalWeight;
    /**
     * The weight of the package.
     *
     * @var float|null
     */
    protected $actualWeight;
    /**
     * Dimensions of the package.
     *
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions|null
     */
    protected $dimensions;
    /**
     * Dimensions of the package.
     *
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions|null
     */
    protected $actualDimensions;
    /**
     * @var string|null
     */
    protected $unitOfMeasurements;
    /**
     * @var SupermodelIoLogisticsExpressReference[]|null
     */
    protected $shipperReferences;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem[]|null
     */
    protected $events;

    public function getNumber(): ?float
    {
        return $this->number;
    }

    public function setNumber(?float $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;

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

    /**
     * The weight of the package.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * The weight of the package.
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * The weight of the package.
     */
    public function getDimensionalWeight(): ?float
    {
        return $this->dimensionalWeight;
    }

    /**
     * The weight of the package.
     */
    public function setDimensionalWeight(?float $dimensionalWeight): self
    {
        $this->dimensionalWeight = $dimensionalWeight;

        return $this;
    }

    /**
     * The weight of the package.
     */
    public function getActualWeight(): ?float
    {
        return $this->actualWeight;
    }

    /**
     * The weight of the package.
     */
    public function setActualWeight(?float $actualWeight): self
    {
        $this->actualWeight = $actualWeight;

        return $this;
    }

    /**
     * Dimensions of the package.
     */
    public function getDimensions(): ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions
    {
        return $this->dimensions;
    }

    /**
     * Dimensions of the package.
     */
    public function setDimensions(?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * Dimensions of the package.
     */
    public function getActualDimensions(): ?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions
    {
        return $this->actualDimensions;
    }

    /**
     * Dimensions of the package.
     */
    public function setActualDimensions(?SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions $actualDimensions): self
    {
        $this->actualDimensions = $actualDimensions;

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
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem[]|null $events
     */
    public function setEvents(?array $events): self
    {
        $this->events = $events;

        return $this;
    }
}
