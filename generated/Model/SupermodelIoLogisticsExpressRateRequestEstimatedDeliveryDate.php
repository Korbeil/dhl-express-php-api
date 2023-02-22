<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate
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
     * Please indicate if requesting to get EDD for this shipment. QDDF - is the fastest ('docs') transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     *
     * @var bool|null
     */
    protected $isRequested = true;
    /**
     * Please indicate the EDD type being requested.
     *
     * @var string|null
     */
    protected $typeCode = 'QDDF';

    /**
     * Please indicate if requesting to get EDD for this shipment. QDDF - is the fastest ('docs') transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     */
    public function getIsRequested(): ?bool
    {
        return $this->isRequested;
    }

    /**
     * Please indicate if requesting to get EDD for this shipment. QDDF - is the fastest ('docs') transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     */
    public function setIsRequested(?bool $isRequested): self
    {
        $this->initialized['isRequested'] = true;
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
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
