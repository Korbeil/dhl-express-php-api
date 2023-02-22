<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem
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
     * This is the total prize of the rated shipment for the product listed.
     *
     * @var float|null
     */
    protected $price;

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
        $this->initialized['currencyType'] = true;
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
        $this->initialized['priceCurrency'] = true;
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * This is the total prize of the rated shipment for the product listed.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * This is the total prize of the rated shipment for the product listed.
     */
    public function setPrice(?float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }
}
