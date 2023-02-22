<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem
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
     * When landed-cost is requested then following items name (Charge Types) might be returned: <BR>                        Charge Type : Description <BR>                        STDIS : Quoted shipment total discount <BR>                        SCUSV : Shipment Customs value <BR> SINSV : Insured value <BR> SPRQD : Shipment product quote discount<BR>                        SPRQN : The price quoted to the Customer by DHL at the time of the booking. This quote covers the weight price including discounts and without taxes. <BR>                        STSCH : The total of service charges quoted to customer for DHL Express value added services, the amount is after discounts and doesn't include tax amounts. <BR>                        MACHG : The total of service charges as provided by Merchant for the purpose of landed cost calculation. <BR>                        MFCHG : The freight charge as provided by Merchant for the purpose of landed cost calculation.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Special service or extra charge code. This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     *
     * @var string|null
     */
    protected $serviceCode;
    /**
     * Local service code.
     *
     * @var string|null
     */
    protected $localServiceCode;
    /**
     * Price breakdown type code.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Special service charge code type for service.
     *
     * @var string|null
     */
    protected $serviceTypeCode;
    /**
     * Price breakdown value.
     *
     * @var float|null
     */
    protected $price;
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @var string|null
     */
    protected $priceCurrency;
    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     *
     * @var bool|null
     */
    protected $isCustomerAgreement;
    /**
     * Indicator if the special service is marketed service.
     *
     * @var bool|null
     */
    protected $isMarketedService;
    /**
     * Indicator if there is any discount allowed.
     *
     * @var bool|null
     */
    protected $isBillingServiceIndicator;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem[]|null
     */
    protected $priceBreakdown;
    /**
     * Tariff Rate Formula on Shipment Level.
     *
     * @var string|null
     */
    protected $tariffRateFormula;

    /**
     * When landed-cost is requested then following items name (Charge Types) might be returned: <BR>                        Charge Type : Description <BR>                        STDIS : Quoted shipment total discount <BR>                        SCUSV : Shipment Customs value <BR> SINSV : Insured value <BR> SPRQD : Shipment product quote discount<BR>                        SPRQN : The price quoted to the Customer by DHL at the time of the booking. This quote covers the weight price including discounts and without taxes. <BR>                        STSCH : The total of service charges quoted to customer for DHL Express value added services, the amount is after discounts and doesn't include tax amounts. <BR>                        MACHG : The total of service charges as provided by Merchant for the purpose of landed cost calculation. <BR>                        MFCHG : The freight charge as provided by Merchant for the purpose of landed cost calculation.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * When landed-cost is requested then following items name (Charge Types) might be returned: <BR>                        Charge Type : Description <BR>                        STDIS : Quoted shipment total discount <BR>                        SCUSV : Shipment Customs value <BR> SINSV : Insured value <BR> SPRQD : Shipment product quote discount<BR>                        SPRQN : The price quoted to the Customer by DHL at the time of the booking. This quote covers the weight price including discounts and without taxes. <BR>                        STSCH : The total of service charges quoted to customer for DHL Express value added services, the amount is after discounts and doesn't include tax amounts. <BR>                        MACHG : The total of service charges as provided by Merchant for the purpose of landed cost calculation. <BR>                        MFCHG : The freight charge as provided by Merchant for the purpose of landed cost calculation.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Special service or extra charge code. This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * Special service or extra charge code. This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     */
    public function setServiceCode(?string $serviceCode): self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Local service code.
     */
    public function getLocalServiceCode(): ?string
    {
        return $this->localServiceCode;
    }

    /**
     * Local service code.
     */
    public function setLocalServiceCode(?string $localServiceCode): self
    {
        $this->initialized['localServiceCode'] = true;
        $this->localServiceCode = $localServiceCode;

        return $this;
    }

    /**
     * Price breakdown type code.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Price breakdown type code.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Special service charge code type for service.
     */
    public function getServiceTypeCode(): ?string
    {
        return $this->serviceTypeCode;
    }

    /**
     * Special service charge code type for service.
     */
    public function setServiceTypeCode(?string $serviceTypeCode): self
    {
        $this->initialized['serviceTypeCode'] = true;
        $this->serviceTypeCode = $serviceTypeCode;

        return $this;
    }

    /**
     * Price breakdown value.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Price breakdown value.
     */
    public function setPrice(?float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * This the currency of the rated shipment for the prices listed.
     */
    public function getPriceCurrency(): ?string
    {
        return $this->priceCurrency;
    }

    /**
     * This the currency of the rated shipment for the prices listed.
     */
    public function setPriceCurrency(?string $priceCurrency): self
    {
        $this->initialized['priceCurrency'] = true;
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     */
    public function getIsCustomerAgreement(): ?bool
    {
        return $this->isCustomerAgreement;
    }

    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     */
    public function setIsCustomerAgreement(?bool $isCustomerAgreement): self
    {
        $this->initialized['isCustomerAgreement'] = true;
        $this->isCustomerAgreement = $isCustomerAgreement;

        return $this;
    }

    /**
     * Indicator if the special service is marketed service.
     */
    public function getIsMarketedService(): ?bool
    {
        return $this->isMarketedService;
    }

    /**
     * Indicator if the special service is marketed service.
     */
    public function setIsMarketedService(?bool $isMarketedService): self
    {
        $this->initialized['isMarketedService'] = true;
        $this->isMarketedService = $isMarketedService;

        return $this;
    }

    /**
     * Indicator if there is any discount allowed.
     */
    public function getIsBillingServiceIndicator(): ?bool
    {
        return $this->isBillingServiceIndicator;
    }

    /**
     * Indicator if there is any discount allowed.
     */
    public function setIsBillingServiceIndicator(?bool $isBillingServiceIndicator): self
    {
        $this->initialized['isBillingServiceIndicator'] = true;
        $this->isBillingServiceIndicator = $isBillingServiceIndicator;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem[]|null
     */
    public function getPriceBreakdown(): ?array
    {
        return $this->priceBreakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem[]|null $priceBreakdown
     */
    public function setPriceBreakdown(?array $priceBreakdown): self
    {
        $this->initialized['priceBreakdown'] = true;
        $this->priceBreakdown = $priceBreakdown;

        return $this;
    }

    /**
     * Tariff Rate Formula on Shipment Level.
     */
    public function getTariffRateFormula(): ?string
    {
        return $this->tariffRateFormula;
    }

    /**
     * Tariff Rate Formula on Shipment Level.
     */
    public function setTariffRateFormula(?string $tariffRateFormula): self
    {
        $this->initialized['tariffRateFormula'] = true;
        $this->tariffRateFormula = $tariffRateFormula;

        return $this;
    }
}
