<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate
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
     * @var string|null
     */
    protected $estimatedDeliveryDate;
    /**
     * EDD type.
     *
     * @var string|null
     */
    protected $estimatedDeliveryType;

    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->estimatedDeliveryDate;
    }

    public function setEstimatedDeliveryDate(?string $estimatedDeliveryDate): self
    {
        $this->initialized['estimatedDeliveryDate'] = true;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * EDD type.
     */
    public function getEstimatedDeliveryType(): ?string
    {
        return $this->estimatedDeliveryType;
    }

    /**
     * EDD type.
     */
    public function setEstimatedDeliveryType(?string $estimatedDeliveryType): self
    {
        $this->initialized['estimatedDeliveryType'] = true;
        $this->estimatedDeliveryType = $estimatedDeliveryType;

        return $this;
    }
}
