<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate
{
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
        $this->estimatedDeliveryType = $estimatedDeliveryType;

        return $this;
    }
}
