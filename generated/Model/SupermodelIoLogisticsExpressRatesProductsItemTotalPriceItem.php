<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem
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
     * This is the total prize of the rated shipment for the product listed.
     */
    public ?float $price;
}
