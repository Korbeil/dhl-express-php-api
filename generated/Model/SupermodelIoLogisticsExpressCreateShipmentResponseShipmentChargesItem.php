<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem
{
    /**
     * Possible Values :<BR>            - 'BILLC', billing currency<BR>            - 'PULCL', country public rates currency<BR>            - 'BASEC', base currency.
     */
    public ?string $currencyType;
    /**
     * This the currency of the rated shipment for the prices listed.
     */
    public ?string $priceCurrency;
    /**
     * The amount price of DHL product and services.
     */
    public ?float $price;
    /**
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem>|null
     */
    public ?array $serviceBreakdown;
}
