<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration
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
     * Please enter details for each export line item.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem[]|null
     */
    protected $lineItems;
    /**
     * Please provide invoice related information.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice|null
     */
    protected $invoice;
    /**
     * Please enter up to three remarks. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_04, the invoice can only print the first remarks field. The recommended max length is 20 characters. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_L_10 or COMMERCIAL_INVOICE_P_10, the invoice can print all three remraks fields.  The recommended max length is 45 characters.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem[]|null
     */
    protected $remarks;
    /**
     * Please enter additional charge to appear on the invoice<BR>              admin, Administration Charge<BR>              delivery, Delivery Charge<BR>              documentation, Documentation Charge<BR>              expedite, Expedite Charge<BR>              export, Export Charge<BR> freight, Freight Charge<BR>              fuel_surcharge, Fuel Surcharge<BR>              logistic, Logistic Charge<BR>              other, Other Charge<BR> packaging, Packaging Charge<BR>              pickup, Pickup Charge<BR>              handling, Handling Charge<BR>              vat, VAT Charge<BR> insurance, Insurance Cost<BR>              reverse_charge, Reverse Charge.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem[]|null
     */
    protected $additionalCharges;
    /**
     * Please provide destination port details.
     *
     * @var string|null
     */
    protected $destinationPortName;
    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     *
     * @var string|null
     */
    protected $placeOfIncoterm;
    /**
     * Please provide Payer VAT number.
     *
     * @var string|null
     */
    protected $payerVATNumber;
    /**
     * Please enter recipient reference.
     *
     * @var string|null
     */
    protected $recipientReference;
    /**
     * Exporter related details.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter|null
     */
    protected $exporter;
    /**
     * Please enter package marks.
     *
     * @var string|null
     */
    protected $packageMarks;
    /**
     * Please provide up to three dcelaration notes.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem[]|null
     */
    protected $declarationNotes;
    /**
     * Please enter export reference.
     *
     * @var string|null
     */
    protected $exportReference;
    /**
     * Please enter export reason.
     *
     * @var string|null
     */
    protected $exportReason;
    /**
     * Please provide the reason for export.
     *
     * @var string|null
     */
    protected $exportReasonType;
    /**
     * Please provide details about export and import licenses.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem[]|null
     */
    protected $licenses;
    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons.
     *
     * @var string|null
     */
    protected $shipmentType;
    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem[]|null
     */
    protected $customsDocuments;

    /**
     * Please enter details for each export line item.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Please enter details for each export line item.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * Please provide invoice related information.
     */
    public function getInvoice(): ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice
    {
        return $this->invoice;
    }

    /**
     * Please provide invoice related information.
     */
    public function setInvoice(?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Please enter up to three remarks. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_04, the invoice can only print the first remarks field. The recommended max length is 20 characters. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_L_10 or COMMERCIAL_INVOICE_P_10, the invoice can print all three remraks fields.  The recommended max length is 45 characters.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem[]|null
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * Please enter up to three remarks. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_04, the invoice can only print the first remarks field. The recommended max length is 20 characters. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_L_10 or COMMERCIAL_INVOICE_P_10, the invoice can print all three remraks fields.  The recommended max length is 45 characters.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem[]|null $remarks
     */
    public function setRemarks(?array $remarks): self
    {
        $this->initialized['remarks'] = true;
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Please enter additional charge to appear on the invoice<BR>              admin, Administration Charge<BR>              delivery, Delivery Charge<BR>              documentation, Documentation Charge<BR>              expedite, Expedite Charge<BR>              export, Export Charge<BR> freight, Freight Charge<BR>              fuel_surcharge, Fuel Surcharge<BR>              logistic, Logistic Charge<BR>              other, Other Charge<BR> packaging, Packaging Charge<BR>              pickup, Pickup Charge<BR>              handling, Handling Charge<BR>              vat, VAT Charge<BR> insurance, Insurance Cost<BR>              reverse_charge, Reverse Charge.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem[]|null
     */
    public function getAdditionalCharges(): ?array
    {
        return $this->additionalCharges;
    }

    /**
     * Please enter additional charge to appear on the invoice<BR>              admin, Administration Charge<BR>              delivery, Delivery Charge<BR>              documentation, Documentation Charge<BR>              expedite, Expedite Charge<BR>              export, Export Charge<BR> freight, Freight Charge<BR>              fuel_surcharge, Fuel Surcharge<BR>              logistic, Logistic Charge<BR>              other, Other Charge<BR> packaging, Packaging Charge<BR>              pickup, Pickup Charge<BR>              handling, Handling Charge<BR>              vat, VAT Charge<BR> insurance, Insurance Cost<BR>              reverse_charge, Reverse Charge.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem[]|null $additionalCharges
     */
    public function setAdditionalCharges(?array $additionalCharges): self
    {
        $this->initialized['additionalCharges'] = true;
        $this->additionalCharges = $additionalCharges;

        return $this;
    }

    /**
     * Please provide destination port details.
     */
    public function getDestinationPortName(): ?string
    {
        return $this->destinationPortName;
    }

    /**
     * Please provide destination port details.
     */
    public function setDestinationPortName(?string $destinationPortName): self
    {
        $this->initialized['destinationPortName'] = true;
        $this->destinationPortName = $destinationPortName;

        return $this;
    }

    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     */
    public function getPlaceOfIncoterm(): ?string
    {
        return $this->placeOfIncoterm;
    }

    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     */
    public function setPlaceOfIncoterm(?string $placeOfIncoterm): self
    {
        $this->initialized['placeOfIncoterm'] = true;
        $this->placeOfIncoterm = $placeOfIncoterm;

        return $this;
    }

    /**
     * Please provide Payer VAT number.
     */
    public function getPayerVATNumber(): ?string
    {
        return $this->payerVATNumber;
    }

    /**
     * Please provide Payer VAT number.
     */
    public function setPayerVATNumber(?string $payerVATNumber): self
    {
        $this->initialized['payerVATNumber'] = true;
        $this->payerVATNumber = $payerVATNumber;

        return $this;
    }

    /**
     * Please enter recipient reference.
     */
    public function getRecipientReference(): ?string
    {
        return $this->recipientReference;
    }

    /**
     * Please enter recipient reference.
     */
    public function setRecipientReference(?string $recipientReference): self
    {
        $this->initialized['recipientReference'] = true;
        $this->recipientReference = $recipientReference;

        return $this;
    }

    /**
     * Exporter related details.
     */
    public function getExporter(): ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter
    {
        return $this->exporter;
    }

    /**
     * Exporter related details.
     */
    public function setExporter(?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter $exporter): self
    {
        $this->initialized['exporter'] = true;
        $this->exporter = $exporter;

        return $this;
    }

    /**
     * Please enter package marks.
     */
    public function getPackageMarks(): ?string
    {
        return $this->packageMarks;
    }

    /**
     * Please enter package marks.
     */
    public function setPackageMarks(?string $packageMarks): self
    {
        $this->initialized['packageMarks'] = true;
        $this->packageMarks = $packageMarks;

        return $this;
    }

    /**
     * Please provide up to three dcelaration notes.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem[]|null
     */
    public function getDeclarationNotes(): ?array
    {
        return $this->declarationNotes;
    }

    /**
     * Please provide up to three dcelaration notes.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem[]|null $declarationNotes
     */
    public function setDeclarationNotes(?array $declarationNotes): self
    {
        $this->initialized['declarationNotes'] = true;
        $this->declarationNotes = $declarationNotes;

        return $this;
    }

    /**
     * Please enter export reference.
     */
    public function getExportReference(): ?string
    {
        return $this->exportReference;
    }

    /**
     * Please enter export reference.
     */
    public function setExportReference(?string $exportReference): self
    {
        $this->initialized['exportReference'] = true;
        $this->exportReference = $exportReference;

        return $this;
    }

    /**
     * Please enter export reason.
     */
    public function getExportReason(): ?string
    {
        return $this->exportReason;
    }

    /**
     * Please enter export reason.
     */
    public function setExportReason(?string $exportReason): self
    {
        $this->initialized['exportReason'] = true;
        $this->exportReason = $exportReason;

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
     * Please provide details about export and import licenses.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem[]|null
     */
    public function getLicenses(): ?array
    {
        return $this->licenses;
    }

    /**
     * Please provide details about export and import licenses.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem[]|null $licenses
     */
    public function setLicenses(?array $licenses): self
    {
        $this->initialized['licenses'] = true;
        $this->licenses = $licenses;

        return $this;
    }

    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons.
     */
    public function getShipmentType(): ?string
    {
        return $this->shipmentType;
    }

    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons.
     */
    public function setShipmentType(?string $shipmentType): self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;

        return $this;
    }

    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem[]|null
     */
    public function getCustomsDocuments(): ?array
    {
        return $this->customsDocuments;
    }

    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem[]|null $customsDocuments
     */
    public function setCustomsDocuments(?array $customsDocuments): self
    {
        $this->initialized['customsDocuments'] = true;
        $this->customsDocuments = $customsDocuments;

        return $this;
    }
}
