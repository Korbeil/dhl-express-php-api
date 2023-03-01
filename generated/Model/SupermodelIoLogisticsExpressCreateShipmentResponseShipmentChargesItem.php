<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem
{
    /**
     * Possible Values :<BR>            - 'BILLC', billing currency<BR>            - 'PULCL', country public rates currency<BR>            - 'BASEC', base currency.
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
     * The amount price of DHL product and services.
     *
     * @var float|null
     */
    protected $price;
    /**
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem[]|null
     */
    protected $serviceBreakdown;

    /**
     * Possible Values :<BR>            - 'BILLC', billing currency<BR>            - 'PULCL', country public rates currency<BR>            - 'BASEC', base currency.
     */
    public function getCurrencyType(): ?string
    {
        return $this->currencyType;
    }

    /**
     * Possible Values :<BR>            - 'BILLC', billing currency<BR>            - 'PULCL', country public rates currency<BR>            - 'BASEC', base currency.
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
     * The amount price of DHL product and services.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * The amount price of DHL product and services.
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem[]|null
     */
    public function getServiceBreakdown(): ?array
    {
        return $this->serviceBreakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem[]|null $serviceBreakdown
     */
    public function setServiceBreakdown(?array $serviceBreakdown): self
    {
        $this->serviceBreakdown = $serviceBreakdown;

        return $this;
    }
}
