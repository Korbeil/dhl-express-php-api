<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItem
{
    /**
     * Name of the DHL Express product.
     *
     * @var string|null
     */
    protected $productName;
    /**
     * This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @var string|null
     */
    protected $productCode;
    /**
     * This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @var string|null
     */
    protected $localProductCode;
    /**
     * The country code for the local service used.
     *
     * @var string|null
     */
    protected $localProductCountryCode;
    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product.
     *
     * @var string|null
     */
    protected $networkTypeCode;
    /**
     * Indicator that the product only can be offered to customers with prior agreement.
     *
     * @var bool|null
     */
    protected $isCustomerAgreement;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemWeight|null
     */
    protected $weight;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem[]|null
     */
    protected $totalPrice;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem[]|null
     */
    protected $totalPriceBreakdown;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem[]|null
     */
    protected $detailedPriceBreakdown;
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @var SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem[]|null
     */
    protected $serviceCodeMutuallyExclusiveGroups;
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @var SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem[]|null
     */
    protected $serviceCodeDependencyRuleGroups;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities|null
     */
    protected $pickupCapabilities;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities|null
     */
    protected $deliveryCapabilities;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemItemsItem[]|null
     */
    protected $items;
    /**
     * The date when the rates for DHL products and services is provided.
     *
     * @var string|null
     */
    protected $pricingDate;

    /**
     * Name of the DHL Express product.
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * Name of the DHL Express product.
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
     */
    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
     */
    public function getLocalProductCode(): ?string
    {
        return $this->localProductCode;
    }

    /**
     * This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
     */
    public function setLocalProductCode(?string $localProductCode): self
    {
        $this->localProductCode = $localProductCode;

        return $this;
    }

    /**
     * The country code for the local service used.
     */
    public function getLocalProductCountryCode(): ?string
    {
        return $this->localProductCountryCode;
    }

    /**
     * The country code for the local service used.
     */
    public function setLocalProductCountryCode(?string $localProductCountryCode): self
    {
        $this->localProductCountryCode = $localProductCountryCode;

        return $this;
    }

    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product.
     */
    public function getNetworkTypeCode(): ?string
    {
        return $this->networkTypeCode;
    }

    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product.
     */
    public function setNetworkTypeCode(?string $networkTypeCode): self
    {
        $this->networkTypeCode = $networkTypeCode;

        return $this;
    }

    /**
     * Indicator that the product only can be offered to customers with prior agreement.
     */
    public function getIsCustomerAgreement(): ?bool
    {
        return $this->isCustomerAgreement;
    }

    /**
     * Indicator that the product only can be offered to customers with prior agreement.
     */
    public function setIsCustomerAgreement(?bool $isCustomerAgreement): self
    {
        $this->isCustomerAgreement = $isCustomerAgreement;

        return $this;
    }

    public function getWeight(): ?SupermodelIoLogisticsExpressRatesProductsItemWeight
    {
        return $this->weight;
    }

    public function setWeight(?SupermodelIoLogisticsExpressRatesProductsItemWeight $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem[]|null
     */
    public function getTotalPrice(): ?array
    {
        return $this->totalPrice;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem[]|null $totalPrice
     */
    public function setTotalPrice(?array $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem[]|null
     */
    public function getTotalPriceBreakdown(): ?array
    {
        return $this->totalPriceBreakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem[]|null $totalPriceBreakdown
     */
    public function setTotalPriceBreakdown(?array $totalPriceBreakdown): self
    {
        $this->totalPriceBreakdown = $totalPriceBreakdown;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem[]|null
     */
    public function getDetailedPriceBreakdown(): ?array
    {
        return $this->detailedPriceBreakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem[]|null $detailedPriceBreakdown
     */
    public function setDetailedPriceBreakdown(?array $detailedPriceBreakdown): self
    {
        $this->detailedPriceBreakdown = $detailedPriceBreakdown;

        return $this;
    }

    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @return SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem[]|null
     */
    public function getServiceCodeMutuallyExclusiveGroups(): ?array
    {
        return $this->serviceCodeMutuallyExclusiveGroups;
    }

    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @param SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem[]|null $serviceCodeMutuallyExclusiveGroups
     */
    public function setServiceCodeMutuallyExclusiveGroups(?array $serviceCodeMutuallyExclusiveGroups): self
    {
        $this->serviceCodeMutuallyExclusiveGroups = $serviceCodeMutuallyExclusiveGroups;

        return $this;
    }

    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @return SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem[]|null
     */
    public function getServiceCodeDependencyRuleGroups(): ?array
    {
        return $this->serviceCodeDependencyRuleGroups;
    }

    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @param SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem[]|null $serviceCodeDependencyRuleGroups
     */
    public function setServiceCodeDependencyRuleGroups(?array $serviceCodeDependencyRuleGroups): self
    {
        $this->serviceCodeDependencyRuleGroups = $serviceCodeDependencyRuleGroups;

        return $this;
    }

    public function getPickupCapabilities(): ?SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities
    {
        return $this->pickupCapabilities;
    }

    public function setPickupCapabilities(?SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities $pickupCapabilities): self
    {
        $this->pickupCapabilities = $pickupCapabilities;

        return $this;
    }

    public function getDeliveryCapabilities(): ?SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities
    {
        return $this->deliveryCapabilities;
    }

    public function setDeliveryCapabilities(?SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities $deliveryCapabilities): self
    {
        $this->deliveryCapabilities = $deliveryCapabilities;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemItemsItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemItemsItem[]|null $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * The date when the rates for DHL products and services is provided.
     */
    public function getPricingDate(): ?string
    {
        return $this->pricingDate;
    }

    /**
     * The date when the rates for DHL products and services is provided.
     */
    public function setPricingDate(?string $pricingDate): self
    {
        $this->pricingDate = $pricingDate;

        return $this;
    }
}
