<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate
{
    /**
     * Please indicate if requesting to get EDD for this shipment. <BR>          QDDF - is the fastest ('docs') transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. <BR>          QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     */
    public ?bool $isRequested = false;
    /**
     * Please indicate the EDD type being requested.
     */
    public ?string $typeCode;
}
