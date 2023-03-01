<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponse
{
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
        $this->shipments = $shipments;

        return $this;
    }
}
