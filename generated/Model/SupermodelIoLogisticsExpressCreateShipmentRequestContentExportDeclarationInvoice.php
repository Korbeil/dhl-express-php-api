<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice
{
    /**
     * Please enter commercial invoice number.
     */
    public ?string $number;
    /**
     * Please enter commercial invoice date.
     */
    public ?\DateTime $date;
    /**
     * Please enter who has signed the invoce.
     */
    public ?string $signatureName;
    /**
     * Please provide title of person who has signed the invoice.
     */
    public ?string $signatureTitle;
    /**
     * Please provide the signature image.
     */
    public ?string $signatureImage;
    /**
     * Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template 			COMMERCIAL_INVOICE_04, recommended max length is 120 characters.
     *
     * @var list<string>|null
     */
    public ?array $instructions;
    /**
     * Customer data text to be printed in<BR> customs invoice.<BR>                  Printed only when using Customs<BR>                  Invoice template<BR>                  COMMERCIAL_INVOICE_04.
     *
     * @var list<string>|null
     */
    public ?array $customerDataTextEntries;
    /**
     * Please provide the total net weight.
     */
    public ?float $totalNetWeight;
    /**
     * Please provide the total gross weight.
     */
    public ?float $totalGrossWeight;
    /**
     * Please provide the customer references at invoice level.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem>|null
     */
    public ?array $customerReferences;
    /**
     * Please provide the terms of payment.
     */
    public ?string $termsOfPayment;
    /**
     * indicativeCustomsValues contains child nodes importCustomsDutyValue and importTaxesValue.<BR>                  <BR> These 2 child elements are only applicable for Commercial Invoice printing purpose in Customs Invoice template*: COMMERCIAL_INVOICE_P_10 and COMMERCIAL_INVOICE_L_10.<BR>                  If any of this child nodes are present, it will only be able to display up to three OtherCharges. <BR> <BR>                  Nonetheless, the ShipmentRequest can still contain up to five additionalCharges.<BR>                  If there are more than three additionalCharges, the third additionalCharges onwards will be combined and displayed under one single caption of 'Other Charges'.<BR> <BR>                  Note: If either first or second additionalCharges has typeCode of 'other', and there are more than three additionalCharges provided in the request, the additionalCharges with typeCode of 'other' will be consolidated under the combined 'Other Charges' caption as well.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues $indicativeCustomsValues;
}
