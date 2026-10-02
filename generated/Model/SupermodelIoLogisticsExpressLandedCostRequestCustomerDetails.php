<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails
{
    /**
     * Address defintion for rating related services.
     */
    public ?Rating\SupermodelIoLogisticsExpressAddressRatesRequest $shipperDetails;
    /**
     * Address defintion for rating related services.
     */
    public ?Rating\SupermodelIoLogisticsExpressAddressRatesRequest $receiverDetails;
}
