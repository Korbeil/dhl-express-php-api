<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem
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
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity $quantity;
    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem>|null
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
     * Please enter Export Control Classification Number info<BR>                    This is required for EEI filing US country usage.
     */
    public ?string $exportControlClassificationNumber;
    /**
     * Please enter the weight information for line item.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight $weight;
    /**
     * Please provide if the Taxes is paid for the line item.
     */
    public ?bool $isTaxesPaid;
    /**
     * Please provide the additional information.
     *
     * @var list<string>|null
     */
    public ?array $additionalInformation;
    /**
     * Please provide the Customer References for the line item.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem>|null
     */
    public ?array $customerReferences;
    /**
     * Please provide the customs documents details.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem>|null
     */
    public ?array $customsDocuments;
}
