<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesExchangeRatesItem
{
    /**
     * Rate of the currency exchange.
     */
    public ?float $currentExchangeRate;
    /**
     * The currency code.
     */
    public ?string $currency;
    /**
     * The currency code of the base currency is either USD or EUR.
     */
    public ?string $baseCurrency;
}
