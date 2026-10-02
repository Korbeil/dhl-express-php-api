<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem
{
    /**
     * Expected values in Breakdown/Type are below:<BR>                        STTXA:  Total tax for the shipment<BR>                        STDIS: Total discount for the shipment<BR>                        SPRQT: Net shipment / weight charge.
     */
    public ?string $typeCode;
    /**
     * The amount price of DHL product and services.
     */
    public ?float $price;
}
