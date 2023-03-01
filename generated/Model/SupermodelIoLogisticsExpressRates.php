<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRates
{
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItem[]|null
     */
    protected $products;
    /**
     * @var SupermodelIoLogisticsExpressRatesExchangeRatesItem[]|null
     */
    protected $exchangeRates;
    /**
     * @var string[]|null
     */
    protected $warnings;

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItem[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItem[]|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesExchangeRatesItem[]|null
     */
    public function getExchangeRates(): ?array
    {
        return $this->exchangeRates;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesExchangeRatesItem[]|null $exchangeRates
     */
    public function setExchangeRates(?array $exchangeRates): self
    {
        $this->exchangeRates = $exchangeRates;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param string[]|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }
}
