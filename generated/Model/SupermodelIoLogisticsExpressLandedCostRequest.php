<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequest
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
     * Here you need to define all the parties needed to ship the package.
     *
     * @var SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails|null
     */
    protected $customerDetails;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var SupermodelIoLogisticsExpressAccount[]|null
     */
    protected $accounts;
    /**
     * Please enter DHL Express Global Product code.
     *
     * @var string|null
     */
    protected $productCode;
    /**
     * Please enter DHL Express Local Product code.
     *
     * @var string|null
     */
    protected $localProductCode;
    /**
     * Please enter Unit of measurement - metric,imperial.
     *
     * @var string|null
     */
    protected $unitOfMeasurement;
    /**
     * Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Set this to true is shipment contains declarable content.
     *
     * @var bool|null
     */
    protected $isCustomsDeclarable;
    /**
     * Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination.
     *
     * @var bool|null
     */
    protected $isDTPRequested;
    /**
     * Set this true if you ask for DHL Express insurance service.
     *
     * @var bool|null
     */
    protected $isInsuranceRequested;
    /**
     * Allowed values 'true' - item cost breakdown will be returned, 'false' - item cost breakdown will not be returned.
     *
     * @var bool|null
     */
    protected $getCostBreakdown;
    /**
     * Please provide any additional charges you would like to include in total cost calculation.
     *
     * @var SupermodelIoLogisticsExpressLandedCostRequestChargesItem[]|null
     */
    protected $charges;
    /**
     * Possible values:<BR>      commercial: B2B<BR>      personal: B2C<BR>      commercia': B2B<BR>      personal: B2C.
     *
     * @var string|null
     */
    protected $shipmentPurpose;
    /**
     * @var string|null
     */
    protected $transportationMode;
    /**
     * Carrier being used to ship with. Allowed values are:<BR> 'DHL','UPS','FEDEX','TNT','POST',<BR>      'OTHERS'.
     *
     * @var string|null
     */
    protected $merchantSelectedCarrierName;
    /**
     * Here you can define properties per package.
     *
     * @var SupermodelIoLogisticsExpressPackageRR[]|null
     */
    protected $packages;
    /**
     * @var SupermodelIoLogisticsExpressLandedCostRequestItemsItem[]|null
     */
    protected $items;
    /**
     * Allowed values 'true' - tariff formula on item and shipment level will be returned, 'false' - tariff formula on item and shipment level will not be returned.
     *
     * @var bool|null
     */
    protected $getTariffFormula;
    /**
     * Allowed values 'true' - quotation ID on shipment level will be returned, 'false' - quotation ID on shipment level will not be returned.
     *
     * @var bool|null
     */
    protected $getQuotationID;

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function getCustomerDetails(): ?SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails
    {
        return $this->customerDetails;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function setCustomerDetails(?SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;

        return $this;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @return SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @param SupermodelIoLogisticsExpressAccount[]|null $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * Please enter DHL Express Global Product code.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Please enter DHL Express Global Product code.
     */
    public function setProductCode(?string $productCode): self
    {
        $this->initialized['productCode'] = true;
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Please enter DHL Express Local Product code.
     */
    public function getLocalProductCode(): ?string
    {
        return $this->localProductCode;
    }

    /**
     * Please enter DHL Express Local Product code.
     */
    public function setLocalProductCode(?string $localProductCode): self
    {
        $this->initialized['localProductCode'] = true;
        $this->localProductCode = $localProductCode;

        return $this;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement): self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }

    /**
     * Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency.
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency.
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Set this to true is shipment contains declarable content.
     */
    public function getIsCustomsDeclarable(): ?bool
    {
        return $this->isCustomsDeclarable;
    }

    /**
     * Set this to true is shipment contains declarable content.
     */
    public function setIsCustomsDeclarable(?bool $isCustomsDeclarable): self
    {
        $this->initialized['isCustomsDeclarable'] = true;
        $this->isCustomsDeclarable = $isCustomsDeclarable;

        return $this;
    }

    /**
     * Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination.
     */
    public function getIsDTPRequested(): ?bool
    {
        return $this->isDTPRequested;
    }

    /**
     * Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination.
     */
    public function setIsDTPRequested(?bool $isDTPRequested): self
    {
        $this->initialized['isDTPRequested'] = true;
        $this->isDTPRequested = $isDTPRequested;

        return $this;
    }

    /**
     * Set this true if you ask for DHL Express insurance service.
     */
    public function getIsInsuranceRequested(): ?bool
    {
        return $this->isInsuranceRequested;
    }

    /**
     * Set this true if you ask for DHL Express insurance service.
     */
    public function setIsInsuranceRequested(?bool $isInsuranceRequested): self
    {
        $this->initialized['isInsuranceRequested'] = true;
        $this->isInsuranceRequested = $isInsuranceRequested;

        return $this;
    }

    /**
     * Allowed values 'true' - item cost breakdown will be returned, 'false' - item cost breakdown will not be returned.
     */
    public function getGetCostBreakdown(): ?bool
    {
        return $this->getCostBreakdown;
    }

    /**
     * Allowed values 'true' - item cost breakdown will be returned, 'false' - item cost breakdown will not be returned.
     */
    public function setGetCostBreakdown(?bool $getCostBreakdown): self
    {
        $this->initialized['getCostBreakdown'] = true;
        $this->getCostBreakdown = $getCostBreakdown;

        return $this;
    }

    /**
     * Please provide any additional charges you would like to include in total cost calculation.
     *
     * @return SupermodelIoLogisticsExpressLandedCostRequestChargesItem[]|null
     */
    public function getCharges(): ?array
    {
        return $this->charges;
    }

    /**
     * Please provide any additional charges you would like to include in total cost calculation.
     *
     * @param SupermodelIoLogisticsExpressLandedCostRequestChargesItem[]|null $charges
     */
    public function setCharges(?array $charges): self
    {
        $this->initialized['charges'] = true;
        $this->charges = $charges;

        return $this;
    }

    /**
     * Possible values:<BR>      commercial: B2B<BR>      personal: B2C<BR>      commercia': B2B<BR>      personal: B2C.
     */
    public function getShipmentPurpose(): ?string
    {
        return $this->shipmentPurpose;
    }

    /**
     * Possible values:<BR>      commercial: B2B<BR>      personal: B2C<BR>      commercia': B2B<BR>      personal: B2C.
     */
    public function setShipmentPurpose(?string $shipmentPurpose): self
    {
        $this->initialized['shipmentPurpose'] = true;
        $this->shipmentPurpose = $shipmentPurpose;

        return $this;
    }

    public function getTransportationMode(): ?string
    {
        return $this->transportationMode;
    }

    public function setTransportationMode(?string $transportationMode): self
    {
        $this->initialized['transportationMode'] = true;
        $this->transportationMode = $transportationMode;

        return $this;
    }

    /**
     * Carrier being used to ship with. Allowed values are:<BR> 'DHL','UPS','FEDEX','TNT','POST',<BR>      'OTHERS'.
     */
    public function getMerchantSelectedCarrierName(): ?string
    {
        return $this->merchantSelectedCarrierName;
    }

    /**
     * Carrier being used to ship with. Allowed values are:<BR> 'DHL','UPS','FEDEX','TNT','POST',<BR>      'OTHERS'.
     */
    public function setMerchantSelectedCarrierName(?string $merchantSelectedCarrierName): self
    {
        $this->initialized['merchantSelectedCarrierName'] = true;
        $this->merchantSelectedCarrierName = $merchantSelectedCarrierName;

        return $this;
    }

    /**
     * Here you can define properties per package.
     *
     * @return SupermodelIoLogisticsExpressPackageRR[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * Here you can define properties per package.
     *
     * @param SupermodelIoLogisticsExpressPackageRR[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressLandedCostRequestItemsItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param SupermodelIoLogisticsExpressLandedCostRequestItemsItem[]|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * Allowed values 'true' - tariff formula on item and shipment level will be returned, 'false' - tariff formula on item and shipment level will not be returned.
     */
    public function getGetTariffFormula(): ?bool
    {
        return $this->getTariffFormula;
    }

    /**
     * Allowed values 'true' - tariff formula on item and shipment level will be returned, 'false' - tariff formula on item and shipment level will not be returned.
     */
    public function setGetTariffFormula(?bool $getTariffFormula): self
    {
        $this->initialized['getTariffFormula'] = true;
        $this->getTariffFormula = $getTariffFormula;

        return $this;
    }

    /**
     * Allowed values 'true' - quotation ID on shipment level will be returned, 'false' - quotation ID on shipment level will not be returned.
     */
    public function getGetQuotationID(): ?bool
    {
        return $this->getQuotationID;
    }

    /**
     * Allowed values 'true' - quotation ID on shipment level will be returned, 'false' - quotation ID on shipment level will not be returned.
     */
    public function setGetQuotationID(?bool $getQuotationID): self
    {
        $this->initialized['getQuotationID'] = true;
        $this->getQuotationID = $getQuotationID;

        return $this;
    }
}
