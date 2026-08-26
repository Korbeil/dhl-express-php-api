<?php

namespace Korbeil\DHLExpress\Api\Model\Rating;

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
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem>|null
     */
    protected $products;
    /**
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem>|null
     */
    protected $exchangeRates;
    /**
     * @var list<string>|null
     */
    protected $warnings;

    /**
     * @return list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem>|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }

    /**
     * @return list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem>|null
     */
    public function getExchangeRates(): ?array
    {
        return $this->exchangeRates;
    }

    /**
     * @param list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem>|null $exchangeRates
     */
    public function setExchangeRates(?array $exchangeRates): self
    {
        $this->initialized['exchangeRates'] = true;
        $this->exchangeRates = $exchangeRates;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param list<string>|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }
}
