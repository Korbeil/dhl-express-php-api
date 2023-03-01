<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem
{
    /**
     * Possible Values :<BR>                  'BILLC', billing currency<BR>                  'PULCL', country public rates currency<BR>                  'BASEC', base currency.
     *
     * @var string|null
     */
    protected $currencyType;
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @var string|null
     */
    protected $priceCurrency;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem[]|null
     */
    protected $priceBreakdown;

    /**
     * Possible Values :<BR>                  'BILLC', billing currency<BR>                  'PULCL', country public rates currency<BR>                  'BASEC', base currency.
     */
    public function getCurrencyType(): ?string
    {
        return $this->currencyType;
    }

    /**
     * Possible Values :<BR>                  'BILLC', billing currency<BR>                  'PULCL', country public rates currency<BR>                  'BASEC', base currency.
     */
    public function setCurrencyType(?string $currencyType): self
    {
        $this->currencyType = $currencyType;

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
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem[]|null
     */
    public function getPriceBreakdown(): ?array
    {
        return $this->priceBreakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem[]|null $priceBreakdown
     */
    public function setPriceBreakdown(?array $priceBreakdown): self
    {
        $this->priceBreakdown = $priceBreakdown;

        return $this;
    }
}
