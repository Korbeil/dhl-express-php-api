<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestCustomerDetails
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
