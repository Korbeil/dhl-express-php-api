<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclaration
{
    /**
     * Please enter details for each export line item.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItem[]|null
     */
    protected $lineItems;
    /**
     * Please provide invoice related information.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationInvoice|null
     */
    protected $invoice;
    /**
     * Please enter up to three remarks.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationRemarksItem[]|null
     */
    protected $remarks;
    /**
     * Please enter additional charge to appear on the invoice<BR>      admin, Administration Charge<BR>      delivery, Delivery Charge<BR> documentation, Documentation Charge<BR>      expedite, Expedite Charge<BR>      freight, Freight Charge<BR>      fuel surcharge, Fuel Surcharge<BR>      logistic, Logistic Charge<BR>      other, Other Charge<BR>      packaging, Packaging Charge<BR>      pickup, Pickup Charge<BR>      handling, Handling Charge<BR>      vat, VAT Charge<BR>      insurance, Insurance Cost.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem[]|null
     */
    protected $additionalCharges;
    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     *
     * @var string|null
     */
    protected $placeOfIncoterm;
    /**
     * Please enter recipient reference.
     *
     * @var string|null
     */
    protected $recipientReference;
    /**
     * Exporter related details.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationExporter|null
     */
    protected $exporter;
    /**
     * Please provide the reason for export.
     *
     * @var string|null
     */
    protected $exportReasonType;
    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons.
     *
     * @var string|null
     */
    protected $shipmentType;
    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem[]|null
     */
    protected $customsDocuments;
    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>      EXW ExWorks<BR>      FCA Free Carrier<BR>      CPT Carriage Paid To<BR>      CIP Carriage and Insurance Paid To<BR>      DPU Delivered at Place Unloaded<BR>      DAP Delivered at Place<BR>      DDP Delivered Duty Paid<BR>      FAS Free Alongside Ship<BR>      FOB Free on Board<BR>      CFR Cost and Freight<BR>      CIF Cost, Insurance and Freight<BR>      DAF Delivered at Frontier<BR>      DAT Delivered at Terminal<BR>      DDU Delivered Duty Unpaid<BR>      DEQ Delivery ex Quay<BR>      DES Delivered ex Ship.
     *
     * @var string|null
     */
    protected $incoterm;

    /**
     * Please enter details for each export line item.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationLineItemsItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Please enter details for each export line item.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationLineItemsItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * Please provide invoice related information.
     */
    public function getInvoice(): ?SupermodelIoLogisticsExpressExportDeclarationInvoice
    {
        return $this->invoice;
    }

    /**
     * Please provide invoice related information.
     */
    public function setInvoice(?SupermodelIoLogisticsExpressExportDeclarationInvoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Please enter up to three remarks.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationRemarksItem[]|null
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * Please enter up to three remarks.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationRemarksItem[]|null $remarks
     */
    public function setRemarks(?array $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Please enter additional charge to appear on the invoice<BR>      admin, Administration Charge<BR>      delivery, Delivery Charge<BR> documentation, Documentation Charge<BR>      expedite, Expedite Charge<BR>      freight, Freight Charge<BR>      fuel surcharge, Fuel Surcharge<BR>      logistic, Logistic Charge<BR>      other, Other Charge<BR>      packaging, Packaging Charge<BR>      pickup, Pickup Charge<BR>      handling, Handling Charge<BR>      vat, VAT Charge<BR>      insurance, Insurance Cost.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem[]|null
     */
    public function getAdditionalCharges(): ?array
    {
        return $this->additionalCharges;
    }

    /**
     * Please enter additional charge to appear on the invoice<BR>      admin, Administration Charge<BR>      delivery, Delivery Charge<BR> documentation, Documentation Charge<BR>      expedite, Expedite Charge<BR>      freight, Freight Charge<BR>      fuel surcharge, Fuel Surcharge<BR>      logistic, Logistic Charge<BR>      other, Other Charge<BR>      packaging, Packaging Charge<BR>      pickup, Pickup Charge<BR>      handling, Handling Charge<BR>      vat, VAT Charge<BR>      insurance, Insurance Cost.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem[]|null $additionalCharges
     */
    public function setAdditionalCharges(?array $additionalCharges): self
    {
        $this->additionalCharges = $additionalCharges;

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
        $this->placeOfIncoterm = $placeOfIncoterm;

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
        $this->recipientReference = $recipientReference;

        return $this;
    }

    /**
     * Exporter related details.
     */
    public function getExporter(): ?SupermodelIoLogisticsExpressExportDeclarationExporter
    {
        return $this->exporter;
    }

    /**
     * Exporter related details.
     */
    public function setExporter(?SupermodelIoLogisticsExpressExportDeclarationExporter $exporter): self
    {
        $this->exporter = $exporter;

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
        $this->exportReasonType = $exportReasonType;

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
        $this->shipmentType = $shipmentType;

        return $this;
    }

    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem[]|null
     */
    public function getCustomsDocuments(): ?array
    {
        return $this->customsDocuments;
    }

    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem[]|null $customsDocuments
     */
    public function setCustomsDocuments(?array $customsDocuments): self
    {
        $this->customsDocuments = $customsDocuments;

        return $this;
    }

    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>      EXW ExWorks<BR>      FCA Free Carrier<BR>      CPT Carriage Paid To<BR>      CIP Carriage and Insurance Paid To<BR>      DPU Delivered at Place Unloaded<BR>      DAP Delivered at Place<BR>      DDP Delivered Duty Paid<BR>      FAS Free Alongside Ship<BR>      FOB Free on Board<BR>      CFR Cost and Freight<BR>      CIF Cost, Insurance and Freight<BR>      DAF Delivered at Frontier<BR>      DAT Delivered at Terminal<BR>      DDU Delivered Duty Unpaid<BR>      DEQ Delivery ex Quay<BR>      DES Delivered ex Ship.
     */
    public function getIncoterm(): ?string
    {
        return $this->incoterm;
    }

    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>      EXW ExWorks<BR>      FCA Free Carrier<BR>      CPT Carriage Paid To<BR>      CIP Carriage and Insurance Paid To<BR>      DPU Delivered at Place Unloaded<BR>      DAP Delivered at Place<BR>      DDP Delivered Duty Paid<BR>      FAS Free Alongside Ship<BR>      FOB Free on Board<BR>      CFR Cost and Freight<BR>      CIF Cost, Insurance and Freight<BR>      DAF Delivered at Frontier<BR>      DAT Delivered at Terminal<BR>      DDU Delivered Duty Unpaid<BR>      DEQ Delivery ex Quay<BR>      DES Delivered ex Ship.
     */
    public function setIncoterm(?string $incoterm): self
    {
        $this->incoterm = $incoterm;

        return $this;
    }
}
