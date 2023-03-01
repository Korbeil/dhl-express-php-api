<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesExchangeRatesItem
{
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
        $this->baseCurrency = $baseCurrency;

        return $this;
    }
}
