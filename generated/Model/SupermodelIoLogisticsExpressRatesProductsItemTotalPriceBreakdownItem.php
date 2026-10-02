<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem
{
    /**
     * Possible Values :<BR>                  'BILLC', billing currency<BR>                  'PULCL', country public rates currency<BR>                  'BASEC', base currency.
     */
    public ?string $currencyType;
    /**
     * This the currency of the rated shipment for the prices listed.
     */
    public ?string $priceCurrency;
    /**
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem>|null
     */
    public ?array $priceBreakdown;
}
