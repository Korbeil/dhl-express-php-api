<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment\Tracking;

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
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem>|null
     */
    protected $shipments;

    /**
     * @return list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem>|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * @param list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem>|null $shipments
     */
    public function setShipments(?array $shipments): self
    {
        $this->initialized['shipments'] = true;
        $this->shipments = $shipments;

        return $this;
    }
}
