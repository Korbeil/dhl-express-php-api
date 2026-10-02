<?php

namespace Korbeil\DHLExpress\Api\Model\Rating;

class SupermodelIoLogisticsExpressLandedCostRequest
{
    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails $customerDetails;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * Please enter DHL Express Global Product code.
     */
    public ?string $productCode;
    /**
     * Please enter DHL Express Local Product code.
     */
    public ?string $localProductCode;
    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public ?string $unitOfMeasurement;
    /**
     * Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency.
     */
    public ?string $currencyCode;
    /**
     * Set this to true is shipment contains declarable content.
     */
    public ?bool $isCustomsDeclarable;
    /**
     * Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination.
     */
    public ?bool $isDTPRequested;
    /**
     * Set this true if you ask for DHL Express insurance service.
     */
    public ?bool $isInsuranceRequested;
    /**
     * Allowed values 'true' - item cost breakdown will be returned, 'false' - item cost breakdown will not be returned.
     */
    public ?bool $getCostBreakdown;
    /**
     * Please provide any additional charges you would like to include in total cost calculation.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem>|null
     */
    public ?array $charges;
    /**
     * Possible values:<BR>      commercial: B2B<BR>      personal: B2C<BR>      commercia': B2B<BR>      personal: B2C.
     */
    public ?string $shipmentPurpose;
    public ?string $transportationMode;
    /**
     * Carrier being used to ship with. Allowed values are:<BR> 'DHL','UPS','FEDEX','TNT','POST',<BR>      'OTHERS'.
     */
    public ?string $merchantSelectedCarrierName;
    /**
     * Here you can define properties per package.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressPackageRR>|null
     */
    public ?array $packages;
    /**
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem>|null
     */
    public ?array $items;
    /**
     * Allowed values 'true' - tariff formula on item and shipment level will be returned, 'false' - tariff formula on item and shipment level will not be returned.
     */
    public ?bool $getTariffFormula;
    /**
     * Allowed values 'true' - quotation ID on shipment level will be returned, 'false' - quotation ID on shipment level will not be returned.
     */
    public ?bool $getQuotationID;
}
