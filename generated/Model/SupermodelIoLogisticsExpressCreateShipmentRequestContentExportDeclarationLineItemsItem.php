<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem
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
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity|null
     */
    protected $quantity;
    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem[]|null
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
     * Please enter Export Control Classification Number info<BR>                    This is required for EEI filing US country usage.
     *
     * @var string|null
     */
    protected $exportControlClassificationNumber;
    /**
     * Please enter the weight information for line item.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight|null
     */
    protected $weight;
    /**
     * Please provide if the Taxes is paid for the line item.
     *
     * @var bool|null
     */
    protected $isTaxesPaid;
    /**
     * Please provide the additional information.
     *
     * @var string[]|null
     */
    protected $additionalInformation;
    /**
     * Please provide the Customer References for the line item.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem[]|null
     */
    protected $customerReferences;
    /**
     * Please provide the customs documents details.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem[]|null
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
    public function getQuantity(): ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity
    {
        return $this->quantity;
    }

    /**
     * Please enter information about quantity for this line item.
     */
    public function setQuantity(?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem[]|null
     */
    public function getCommodityCodes(): ?array
    {
        return $this->commodityCodes;
    }

    /**
     * Please provide Commodity codes for the shipment at item line level.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem[]|null $commodityCodes
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
     * Please enter Export Control Classification Number info<BR>                    This is required for EEI filing US country usage.
     */
    public function getExportControlClassificationNumber(): ?string
    {
        return $this->exportControlClassificationNumber;
    }

    /**
     * Please enter Export Control Classification Number info<BR>                    This is required for EEI filing US country usage.
     */
    public function setExportControlClassificationNumber(?string $exportControlClassificationNumber): self
    {
        $this->initialized['exportControlClassificationNumber'] = true;
        $this->exportControlClassificationNumber = $exportControlClassificationNumber;

        return $this;
    }

    /**
     * Please enter the weight information for line item.
     */
    public function getWeight(): ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight
    {
        return $this->weight;
    }

    /**
     * Please enter the weight information for line item.
     */
    public function setWeight(?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight $weight): self
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
     * Please provide the additional information.
     *
     * @return string[]|null
     */
    public function getAdditionalInformation(): ?array
    {
        return $this->additionalInformation;
    }

    /**
     * Please provide the additional information.
     *
     * @param string[]|null $additionalInformation
     */
    public function setAdditionalInformation(?array $additionalInformation): self
    {
        $this->initialized['additionalInformation'] = true;
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Please provide the Customer References for the line item.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem[]|null
     */
    public function getCustomerReferences(): ?array
    {
        return $this->customerReferences;
    }

    /**
     * Please provide the Customer References for the line item.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem[]|null $customerReferences
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
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem[]|null
     */
    public function getCustomsDocuments(): ?array
    {
        return $this->customsDocuments;
    }

    /**
     * Please provide the customs documents details.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem[]|null $customsDocuments
     */
    public function setCustomsDocuments(?array $customsDocuments): self
    {
        $this->initialized['customsDocuments'] = true;
        $this->customsDocuments = $customsDocuments;

        return $this;
    }
}
