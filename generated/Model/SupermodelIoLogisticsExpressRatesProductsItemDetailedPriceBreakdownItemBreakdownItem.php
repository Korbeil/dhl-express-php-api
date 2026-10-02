<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem
{
    /**
     * When landed-cost is requested then following items name (Charge Types) might be returned: <BR>                        Charge Type : Description <BR>                        STDIS : Quoted shipment total discount <BR>                        SCUSV : Shipment Customs value <BR> SINSV : Insured value <BR> SPRQD : Shipment product quote discount<BR>                        SPRQN : The price quoted to the Customer by DHL at the time of the booking. This quote covers the weight price including discounts and without taxes. <BR>                        STSCH : The total of service charges quoted to customer for DHL Express value added services, the amount is after discounts and doesn't include tax amounts. <BR>                        MACHG : The total of service charges as provided by Merchant for the purpose of landed cost calculation. <BR>                        MFCHG : The freight charge as provided by Merchant for the purpose of landed cost calculation.
     */
    public ?string $name;
    /**
     * Special service or extra charge code. This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     */
    public ?string $serviceCode;
    /**
     * Local service code.
     */
    public ?string $localServiceCode;
    /**
     * Price breakdown type code.
     */
    public ?string $typeCode;
    /**
     * Special service charge code type for service.
     */
    public ?string $serviceTypeCode;
    /**
     * Price breakdown value.
     */
    public ?float $price;
    /**
     * This the currency of the rated shipment for the prices listed.
     */
    public ?string $priceCurrency;
    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     */
    public ?bool $isCustomerAgreement;
    /**
     * Indicator if the special service is marketed service.
     */
    public ?bool $isMarketedService;
    /**
     * Indicator if there is any discount allowed.
     */
    public ?bool $isBillingServiceIndicator;
    /**
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem>|null
     */
    public ?array $priceBreakdown;
    /**
     * Tariff Rate Formula on Shipment Level.
     */
    public ?string $tariffRateFormula;
}
