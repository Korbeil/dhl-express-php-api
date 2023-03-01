<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRates
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
        $this->initialized['products'] = true;
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
        $this->initialized['exchangeRates'] = true;
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
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }
}
