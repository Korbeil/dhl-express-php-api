<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem
{
    /**
     * Discount or tax type codes as provided by DHL.<BR>                              Example values;<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special.
     */
    public ?string $priceType;
    /**
     * If a breakdown is provided, details can either be; - "TAX",<BR>                              - "DISCOUNT".
     */
    public ?string $typeCode;
    /**
     * The actual amount of the discount/tax.
     */
    public ?float $price;
    /**
     * Percentage of the discount/tax.
     */
    public ?float $rate;
    /**
     * The base amount of the service charge.
     */
    public ?float $basePrice;
}
