<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItem
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
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product.
     */
    public ?string $networkTypeCode;
    /**
     * Indicator that the product only can be offered to customers with prior agreement.
     */
    public ?bool $isCustomerAgreement;
    public ?SupermodelIoLogisticsExpressRatesProductsItemWeight $weight;
    /**
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem>|null
     */
    public ?array $totalPrice;
    /**
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem>|null
     */
    public ?array $totalPriceBreakdown;
    /**
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem>|null
     */
    public ?array $detailedPriceBreakdown;
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem>|null
     */
    public ?array $serviceCodeMutuallyExclusiveGroups;
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem>|null
     */
    public ?array $serviceCodeDependencyRuleGroups;
    public ?SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities $pickupCapabilities;
    public ?SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities $deliveryCapabilities;
    /**
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemItemsItem>|null
     */
    public ?array $items;
    /**
     * The date when the rates for DHL products and services is provided.
     */
    public ?string $pricingDate;
}
