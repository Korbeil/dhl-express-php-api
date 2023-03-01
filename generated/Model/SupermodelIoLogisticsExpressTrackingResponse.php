<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponse
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
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItem[]|null
     */
    protected $shipments;

    /**
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItem[]|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItem[]|null $shipments
     */
    public function setShipments(?array $shipments): self
    {
        $this->initialized['shipments'] = true;
        $this->shipments = $shipments;

        return $this;
    }
}
