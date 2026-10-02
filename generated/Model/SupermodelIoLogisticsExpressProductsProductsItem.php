<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItem
{
    /**
     * Name of the DHL Express product.
     */
    public ?string $productName;
    /**
     * This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
     */
    public ?string $productCode;
    /**
     * This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
     */
    public ?string $localProductCode;
    /**
     * The country code for the local service used.
     */
    public ?string $localProductCountryCode;
    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>            DD: Day Definite product<BR>            TD: Time Definite product.
     */
    public ?string $networkTypeCode;
    /**
     * Indicator that the product only can be offered to customers with prior agreement.
     */
    public ?bool $isCustomerAgreement;
    public ?SupermodelIoLogisticsExpressProductsProductsItemWeight $weight;
    /**
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem>|null
     */
    public ?array $breakdown;
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem>|null
     */
    public ?array $serviceCodeMutuallyExclusiveGroups;
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem>|null
     */
    public ?array $serviceCodeDependencyRuleGroups;
    public ?SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities $pickupCapabilities;
    public ?SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities $deliveryCapabilities;
}
