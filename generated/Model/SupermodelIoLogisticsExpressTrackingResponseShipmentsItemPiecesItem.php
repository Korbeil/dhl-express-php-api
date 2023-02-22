<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem
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
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->initialized['shipmentTrackingNumber'] = true;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
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
        $this->initialized['weight'] = true;
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
        $this->initialized['dimensionalWeight'] = true;
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
        $this->initialized['actualWeight'] = true;
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
        $this->initialized['dimensions'] = true;
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
        $this->initialized['actualDimensions'] = true;
        $this->actualDimensions = $actualDimensions;

        return $this;
    }

    public function getUnitOfMeasurements(): ?string
    {
        return $this->unitOfMeasurements;
    }

    public function setUnitOfMeasurements(?string $unitOfMeasurements): self
    {
        $this->initialized['unitOfMeasurements'] = true;
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
        $this->initialized['shipperReferences'] = true;
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
        $this->initialized['events'] = true;
        $this->events = $events;

        return $this;
    }
}
