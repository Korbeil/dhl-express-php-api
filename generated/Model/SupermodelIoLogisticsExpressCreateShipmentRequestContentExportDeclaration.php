<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration
{
    /**
     * Please enter details for each export line item.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem>|null
     */
    public ?array $lineItems;
    /**
     * Please provide invoice related information.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice $invoice;
    /**
     * Please enter up to three remarks. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_04, the invoice can only print the first remarks field. The recommended max length is 20 characters. <BR>              If using Customs Invoice template COMMERCIAL_INVOICE_L_10 or COMMERCIAL_INVOICE_P_10, the invoice can print all three remraks fields.  The recommended max length is 45 characters.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem>|null
     */
    public ?array $remarks;
    /**
     * Please enter additional charge to appear on the invoice<BR>              admin, Administration Charge<BR>              delivery, Delivery Charge<BR>              documentation, Documentation Charge<BR>              expedite, Expedite Charge<BR>              export, Export Charge<BR> freight, Freight Charge<BR>              fuel_surcharge, Fuel Surcharge<BR>              logistic, Logistic Charge<BR>              other, Other Charge<BR> packaging, Packaging Charge<BR>              pickup, Pickup Charge<BR>              handling, Handling Charge<BR>              vat, VAT Charge<BR> insurance, Insurance Cost<BR>              reverse_charge, Reverse Charge.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem>|null
     */
    public ?array $additionalCharges;
    /**
     * Please provide destination port details.
     */
    public ?string $destinationPortName;
    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     */
    public ?string $placeOfIncoterm;
    /**
     * Please provide Payer VAT number.
     */
    public ?string $payerVATNumber;
    /**
     * Please enter recipient reference.
     */
    public ?string $recipientReference;
    /**
     * Exporter related details.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter $exporter;
    /**
     * Please enter package marks.
     */
    public ?string $packageMarks;
    /**
     * Please provide up to three dcelaration notes.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem>|null
     */
    public ?array $declarationNotes;
    /**
     * Please enter export reference.
     */
    public ?string $exportReference;
    /**
     * Please enter export reason.
     */
    public ?string $exportReason;
    /**
     * Please provide the reason for export.
     */
    public ?string $exportReasonType;
    /**
     * Please provide details about export and import licenses.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem>|null
     */
    public ?array $licenses;
    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons.
     */
    public ?string $shipmentType;
    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem>|null
     */
    public ?array $customsDocuments;
}
