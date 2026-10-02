<?php

namespace Korbeil\DHLExpress\Api\Model\Common;

class SupermodelIoLogisticsExpressExportDeclaration
{
    /**
     * Please enter details for each export line item.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem>|null
     */
    public ?array $lineItems;
    /**
     * Please provide invoice related information.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice $invoice;
    /**
     * Please enter up to three remarks.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem>|null
     */
    public ?array $remarks;
    /**
     * Please enter additional charge to appear on the invoice<BR>      admin, Administration Charge<BR>      delivery, Delivery Charge<BR> documentation, Documentation Charge<BR>      expedite, Expedite Charge<BR>      freight, Freight Charge<BR>      fuel surcharge, Fuel Surcharge<BR>      logistic, Logistic Charge<BR>      other, Other Charge<BR>      packaging, Packaging Charge<BR>      pickup, Pickup Charge<BR>      handling, Handling Charge<BR>      vat, VAT Charge<BR>      insurance, Insurance Cost.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem>|null
     */
    public ?array $additionalCharges;
    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     */
    public ?string $placeOfIncoterm;
    /**
     * Please enter recipient reference.
     */
    public ?string $recipientReference;
    /**
     * Exporter related details.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter $exporter;
    /**
     * Please provide the reason for export.
     */
    public ?string $exportReasonType;
    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons.
     */
    public ?string $shipmentType;
    /**
     * Please provide the Customs Documents at invoice level.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem>|null
     */
    public ?array $customsDocuments;
    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>      EXW ExWorks<BR>      FCA Free Carrier<BR>      CPT Carriage Paid To<BR>      CIP Carriage and Insurance Paid To<BR>      DPU Delivered at Place Unloaded<BR>      DAP Delivered at Place<BR>      DDP Delivered Duty Paid<BR>      FAS Free Alongside Ship<BR>      FOB Free on Board<BR>      CFR Cost and Freight<BR>      CIF Cost, Insurance and Freight<BR>      DAF Delivered at Frontier<BR>      DAT Delivered at Terminal<BR>      DDU Delivered Duty Unpaid<BR>      DEQ Delivery ex Quay<BR>      DES Delivered ex Ship.
     */
    public ?string $incoterm;
}
