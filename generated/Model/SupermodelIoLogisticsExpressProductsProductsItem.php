<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItem
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
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>            DD: Day Definite product<BR>            TD: Time Definite product.
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
     * @var SupermodelIoLogisticsExpressProductsProductsItemWeight|null
     */
    protected $weight;
    /**
     * @var SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem[]|null
     */
    protected $breakdown;
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @var SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem[]|null
     */
    protected $serviceCodeMutuallyExclusiveGroups;
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @var SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem[]|null
     */
    protected $serviceCodeDependencyRuleGroups;
    /**
     * @var SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities|null
     */
    protected $pickupCapabilities;
    /**
     * @var SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities|null
     */
    protected $deliveryCapabilities;

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
        $this->initialized['productName'] = true;
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
        $this->initialized['productCode'] = true;
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
        $this->initialized['localProductCode'] = true;
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
        $this->initialized['localProductCountryCode'] = true;
        $this->localProductCountryCode = $localProductCountryCode;

        return $this;
    }

    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>            DD: Day Definite product<BR>            TD: Time Definite product.
     */
    public function getNetworkTypeCode(): ?string
    {
        return $this->networkTypeCode;
    }

    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR> Possible Values;<BR>            DD: Day Definite product<BR>            TD: Time Definite product.
     */
    public function setNetworkTypeCode(?string $networkTypeCode): self
    {
        $this->initialized['networkTypeCode'] = true;
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
        $this->initialized['isCustomerAgreement'] = true;
        $this->isCustomerAgreement = $isCustomerAgreement;

        return $this;
    }

    public function getWeight(): ?SupermodelIoLogisticsExpressProductsProductsItemWeight
    {
        return $this->weight;
    }

    public function setWeight(?SupermodelIoLogisticsExpressProductsProductsItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem[]|null
     */
    public function getBreakdown(): ?array
    {
        return $this->breakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem[]|null $breakdown
     */
    public function setBreakdown(?array $breakdown): self
    {
        $this->initialized['breakdown'] = true;
        $this->breakdown = $breakdown;

        return $this;
    }

    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @return SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem[]|null
     */
    public function getServiceCodeMutuallyExclusiveGroups(): ?array
    {
        return $this->serviceCodeMutuallyExclusiveGroups;
    }

    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment.
     *
     * @param SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem[]|null $serviceCodeMutuallyExclusiveGroups
     */
    public function setServiceCodeMutuallyExclusiveGroups(?array $serviceCodeMutuallyExclusiveGroups): self
    {
        $this->initialized['serviceCodeMutuallyExclusiveGroups'] = true;
        $this->serviceCodeMutuallyExclusiveGroups = $serviceCodeMutuallyExclusiveGroups;

        return $this;
    }

    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @return SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem[]|null
     */
    public function getServiceCodeDependencyRuleGroups(): ?array
    {
        return $this->serviceCodeDependencyRuleGroups;
    }

    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @param SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem[]|null $serviceCodeDependencyRuleGroups
     */
    public function setServiceCodeDependencyRuleGroups(?array $serviceCodeDependencyRuleGroups): self
    {
        $this->initialized['serviceCodeDependencyRuleGroups'] = true;
        $this->serviceCodeDependencyRuleGroups = $serviceCodeDependencyRuleGroups;

        return $this;
    }

    public function getPickupCapabilities(): ?SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities
    {
        return $this->pickupCapabilities;
    }

    public function setPickupCapabilities(?SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities $pickupCapabilities): self
    {
        $this->initialized['pickupCapabilities'] = true;
        $this->pickupCapabilities = $pickupCapabilities;

        return $this;
    }

    public function getDeliveryCapabilities(): ?SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities
    {
        return $this->deliveryCapabilities;
    }

    public function setDeliveryCapabilities(?SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities $deliveryCapabilities): self
    {
        $this->initialized['deliveryCapabilities'] = true;
        $this->deliveryCapabilities = $deliveryCapabilities;

        return $this;
    }
}
