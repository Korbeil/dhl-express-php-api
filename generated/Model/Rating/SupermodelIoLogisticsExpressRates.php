<?php

namespace Korbeil\DHLExpress\Api\Model\Rating;

class SupermodelIoLogisticsExpressRates
{
    /**
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem>|null
     */
    public ?array $products;
    /**
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem>|null
     */
    public ?array $exchangeRates;
    /**
     * @var list<string>|null
     */
    public ?array $warnings;
}
