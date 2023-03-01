<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem
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
     * @var SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem[]|null
     */
    protected $breakdown;

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
     * @return SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem[]|null
     */
    public function getBreakdown(): ?array
    {
        return $this->breakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem[]|null $breakdown
     */
    public function setBreakdown(?array $breakdown): self
    {
        $this->breakdown = $breakdown;

        return $this;
    }
}
