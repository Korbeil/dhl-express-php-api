<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate
{
    /**
     * Please indicate if requesting to get EDD for this shipment. <BR>          QDDF - is the fastest ('docs') transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. <BR>          QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     *
     * @var bool|null
     */
    protected $isRequested = false;
    /**
     * Please indicate the EDD type being requested.
     *
     * @var string|null
     */
    protected $typeCode;

    /**
     * Please indicate if requesting to get EDD for this shipment. <BR>          QDDF - is the fastest ('docs') transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. <BR>          QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     */
    public function getIsRequested(): ?bool
    {
        return $this->isRequested;
    }

    /**
     * Please indicate if requesting to get EDD for this shipment. <BR>          QDDF - is the fastest ('docs') transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. <BR>          QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     */
    public function setIsRequested(?bool $isRequested): self
    {
        $this->isRequested = $isRequested;

        return $this;
    }

    /**
     * Please indicate the EDD type being requested.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please indicate the EDD type being requested.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }
}
