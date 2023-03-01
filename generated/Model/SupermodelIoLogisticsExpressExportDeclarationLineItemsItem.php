<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItem
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Please provide line item number.
     *
     * @var int|null
     */
    protected $number;
    /**
     * Please provide description of the line item.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Please provide monetary value of the line item.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Please enter information about quantity for this line item.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity|null
     */
    protected $quantity;
    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem[]|null
     */
    protected $commodityCodes;
    /**
     * Please provide the reason for export.
     *
     * @var string|null
     */
    protected $exportReasonType;
    /**
     * Please enter two letter ISO manufacturer country code.
     *
     * @var string|null
     */
    protected $manufacturerCountry;
    /**
     * Please enter the weight information for line item.  Either a netValue or grossValue must be provided for the line item.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight|null
     */
    protected $weight;
    /**
     * Please provide if the Taxes is paid for the line item.
     *
     * @var bool|null
     */
    protected $isTaxesPaid;
    /**
     * Please provide the Customer References for the line item.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem[]|null
     */
    protected $customerReferences;
    /**
     * Please provide the customs documents details.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem[]|null
     */
    protected $customsDocuments;

    /**
     * Please provide line item number.
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Please provide line item number.
     */
    public function setNumber(?int $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }

    /**
     * Please provide description of the line item.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Please provide description of the line item.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Please provide monetary value of the line item.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Please provide monetary value of the line item.
     */
    public function setPrice(?float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * Please enter information about quantity for this line item.
     */
    public function getQuantity(): ?SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity
    {
        return $this->quantity;
    }

    /**
     * Please enter information about quantity for this line item.
     */
    public function setQuantity(?SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem[]|null
     */
    public function getCommodityCodes(): ?array
    {
        return $this->commodityCodes;
    }

    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem[]|null $commodityCodes
     */
    public function setCommodityCodes(?array $commodityCodes): self
    {
        $this->initialized['commodityCodes'] = true;
        $this->commodityCodes = $commodityCodes;

        return $this;
    }

    /**
     * Please provide the reason for export.
     */
    public function getExportReasonType(): ?string
    {
        return $this->exportReasonType;
    }

    /**
     * Please provide the reason for export.
     */
    public function setExportReasonType(?string $exportReasonType): self
    {
        $this->initialized['exportReasonType'] = true;
        $this->exportReasonType = $exportReasonType;

        return $this;
    }

    /**
     * Please enter two letter ISO manufacturer country code.
     */
    public function getManufacturerCountry(): ?string
    {
        return $this->manufacturerCountry;
    }

    /**
     * Please enter two letter ISO manufacturer country code.
     */
    public function setManufacturerCountry(?string $manufacturerCountry): self
    {
        $this->initialized['manufacturerCountry'] = true;
        $this->manufacturerCountry = $manufacturerCountry;

        return $this;
    }

    /**
     * Please enter the weight information for line item.  Either a netValue or grossValue must be provided for the line item.
     */
    public function getWeight(): ?SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight
    {
        return $this->weight;
    }

    /**
     * Please enter the weight information for line item.  Either a netValue or grossValue must be provided for the line item.
     */
    public function setWeight(?SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }

    /**
     * Please provide if the Taxes is paid for the line item.
     */
    public function getIsTaxesPaid(): ?bool
    {
        return $this->isTaxesPaid;
    }

    /**
     * Please provide if the Taxes is paid for the line item.
     */
    public function setIsTaxesPaid(?bool $isTaxesPaid): self
    {
        $this->initialized['isTaxesPaid'] = true;
        $this->isTaxesPaid = $isTaxesPaid;

        return $this;
    }

    /**
     * Please provide the Customer References for the line item.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem[]|null
     */
    public function getCustomerReferences(): ?array
    {
        return $this->customerReferences;
    }

    /**
     * Please provide the Customer References for the line item.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem[]|null $customerReferences
     */
    public function setCustomerReferences(?array $customerReferences): self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;

        return $this;
    }

    /**
     * Please provide the customs documents details.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem[]|null
     */
    public function getCustomsDocuments(): ?array
    {
        return $this->customsDocuments;
    }

    /**
     * Please provide the customs documents details.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem[]|null $customsDocuments
     */
    public function setCustomsDocuments(?array $customsDocuments): self
    {
        $this->initialized['customsDocuments'] = true;
        $this->customsDocuments = $customsDocuments;

        return $this;
    }
}
