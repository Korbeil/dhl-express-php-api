<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem
{
    /**
     * Breakdown Name.
     */
    public ?string $name;
    /**
     * Special service or extra charge code.  This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     */
    public ?string $serviceCode;
    /**
     * Local service code.
     */
    public ?string $localServiceCode;
    /**
     * Breakdown type code.
     */
    public ?string $typeCode;
    /**
     * Special service charge code type for service.
     */
    public ?string $serviceTypeCode;
    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     */
    public ?bool $isCustomerAgreement;
    /**
     * Indicator if the special service is marketed service.
     */
    public ?bool $isMarketedService;
    /**
     * Indicator if there is any discount allowed.
     */
    public ?bool $isBillingServiceIndicator;
}
