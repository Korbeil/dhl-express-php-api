<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesExchangeRatesItem
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
     * Rate of the currency exchange.
     *
     * @var float|null
     */
    protected $currentExchangeRate;
    /**
     * The currency code.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * The currency code of the base currency is either USD or EUR.
     *
     * @var string|null
     */
    protected $baseCurrency;

    /**
     * Rate of the currency exchange.
     */
    public function getCurrentExchangeRate(): ?float
    {
        return $this->currentExchangeRate;
    }

    /**
     * Rate of the currency exchange.
     */
    public function setCurrentExchangeRate(?float $currentExchangeRate): self
    {
        $this->initialized['currentExchangeRate'] = true;
        $this->currentExchangeRate = $currentExchangeRate;

        return $this;
    }

    /**
     * The currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency code.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * The currency code of the base currency is either USD or EUR.
     */
    public function getBaseCurrency(): ?string
    {
        return $this->baseCurrency;
    }

    /**
     * The currency code of the base currency is either USD or EUR.
     */
    public function setBaseCurrency(?string $baseCurrency): self
    {
        $this->initialized['baseCurrency'] = true;
        $this->baseCurrency = $baseCurrency;

        return $this;
    }
}
