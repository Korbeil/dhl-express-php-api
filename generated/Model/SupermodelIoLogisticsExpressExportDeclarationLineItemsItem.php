<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItem
{
    /**
     * Please provide line item number.
     */
    public ?int $number;
    /**
     * Please provide description of the line item.
     */
    public ?string $description;
    /**
     * Please provide monetary value of the line item.
     */
    public ?float $price;
    /**
     * Please enter information about quantity for this line item.
     */
    public ?SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity $quantity;
    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem>|null
     */
    public ?array $commodityCodes;
    /**
     * Please provide the reason for export.
     */
    public ?string $exportReasonType;
    /**
     * Please enter two letter ISO manufacturer country code.
     */
    public ?string $manufacturerCountry;
    /**
     * Please enter the weight information for line item.  Either a netValue or grossValue must be provided for the line item.
     */
    public ?SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight $weight;
    /**
     * Please provide if the Taxes is paid for the line item.
     */
    public ?bool $isTaxesPaid;
    /**
     * Please provide the Customer References for the line item.
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem>|null
     */
    public ?array $customerReferences;
    /**
     * Please provide the customs documents details.
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem>|null
     */
    public ?array $customsDocuments;
}
