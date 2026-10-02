<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem
{
    /**
     * Name of the charge.
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
     * Charge type or category.<BR> Possible values;<BR>                        - DUTY<BR>                        - TAX<BR>                        - FEE.
     */
    public ?string $typeCode;
    /**
     * Special service charge code type for service. XCH type charge codes are Optional Services and should be displayed to users for selection.<BR>                        The possible values are;<BR>                        - XCH = Extra charge<BR>                        - FEE = Fee<BR>                        - SCH = Surcharge<BR>                        - NRI = Non Revenue Item<BR>                        Other charges may be automatically returned when applicable.
     */
    public ?string $serviceTypeCode;
    /**
     * The charge amount of the line item charge.
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
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem>|null
     */
    public ?array $priceBreakdown;
    /**
     * Tariff Rate Formula on Line Item Level.
     */
    public ?string $tariffRateFormula;
}
