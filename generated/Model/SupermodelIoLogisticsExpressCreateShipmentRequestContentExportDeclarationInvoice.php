<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice
{
    /**
     * Please enter commercial invoice number.
     *
     * @var string|null
     */
    protected $number;
    /**
     * Please enter commercial invoice date.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * Please enter who has signed the invoce.
     *
     * @var string|null
     */
    protected $signatureName;
    /**
     * Please provide title of person who has signed the invoice.
     *
     * @var string|null
     */
    protected $signatureTitle;
    /**
     * Please provide the signature image.
     *
     * @var string|null
     */
    protected $signatureImage;
    /**
     * Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template 			COMMERCIAL_INVOICE_04, recommended max length is 120 characters.
     *
     * @var string[]|null
     */
    protected $instructions;
    /**
     * Customer data text to be printed in<BR> customs invoice.<BR>                  Printed only when using Customs<BR>                  Invoice template<BR>                  COMMERCIAL_INVOICE_04.
     *
     * @var string[]|null
     */
    protected $customerDataTextEntries;
    /**
     * Please provide the total net weight.
     *
     * @var float|null
     */
    protected $totalNetWeight;
    /**
     * Please provide the total gross weight.
     *
     * @var float|null
     */
    protected $totalGrossWeight;
    /**
     * Please provide the customer references at invoice level.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem[]|null
     */
    protected $customerReferences;
    /**
     * Please provide the terms of payment.
     *
     * @var string|null
     */
    protected $termsOfPayment;
    /**
     * indicativeCustomsValues contains child nodes importCustomsDutyValue and importTaxesValue.<BR>                  <BR> These 2 child elements are only applicable for Commercial Invoice printing purpose in Customs Invoice template*: COMMERCIAL_INVOICE_P_10 and COMMERCIAL_INVOICE_L_10.<BR>                  If any of this child nodes are present, it will only be able to display up to three OtherCharges. <BR> <BR>                  Nonetheless, the ShipmentRequest can still contain up to five additionalCharges.<BR>                  If there are more than three additionalCharges, the third additionalCharges onwards will be combined and displayed under one single caption of 'Other Charges'.<BR> <BR>                  Note: If either first or second additionalCharges has typeCode of 'other', and there are more than three additionalCharges provided in the request, the additionalCharges with typeCode of 'other' will be consolidated under the combined 'Other Charges' caption as well.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues|null
     */
    protected $indicativeCustomsValues;

    /**
     * Please enter commercial invoice number.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Please enter commercial invoice number.
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Please enter commercial invoice date.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Please enter commercial invoice date.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Please enter who has signed the invoce.
     */
    public function getSignatureName(): ?string
    {
        return $this->signatureName;
    }

    /**
     * Please enter who has signed the invoce.
     */
    public function setSignatureName(?string $signatureName): self
    {
        $this->signatureName = $signatureName;

        return $this;
    }

    /**
     * Please provide title of person who has signed the invoice.
     */
    public function getSignatureTitle(): ?string
    {
        return $this->signatureTitle;
    }

    /**
     * Please provide title of person who has signed the invoice.
     */
    public function setSignatureTitle(?string $signatureTitle): self
    {
        $this->signatureTitle = $signatureTitle;

        return $this;
    }

    /**
     * Please provide the signature image.
     */
    public function getSignatureImage(): ?string
    {
        return $this->signatureImage;
    }

    /**
     * Please provide the signature image.
     */
    public function setSignatureImage(?string $signatureImage): self
    {
        $this->signatureImage = $signatureImage;

        return $this;
    }

    /**
     * Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template 			COMMERCIAL_INVOICE_04, recommended max length is 120 characters.
     *
     * @return string[]|null
     */
    public function getInstructions(): ?array
    {
        return $this->instructions;
    }

    /**
     * Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template 			COMMERCIAL_INVOICE_04, recommended max length is 120 characters.
     *
     * @param string[]|null $instructions
     */
    public function setInstructions(?array $instructions): self
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Customer data text to be printed in<BR> customs invoice.<BR>                  Printed only when using Customs<BR>                  Invoice template<BR>                  COMMERCIAL_INVOICE_04.
     *
     * @return string[]|null
     */
    public function getCustomerDataTextEntries(): ?array
    {
        return $this->customerDataTextEntries;
    }

    /**
     * Customer data text to be printed in<BR> customs invoice.<BR>                  Printed only when using Customs<BR>                  Invoice template<BR>                  COMMERCIAL_INVOICE_04.
     *
     * @param string[]|null $customerDataTextEntries
     */
    public function setCustomerDataTextEntries(?array $customerDataTextEntries): self
    {
        $this->customerDataTextEntries = $customerDataTextEntries;

        return $this;
    }

    /**
     * Please provide the total net weight.
     */
    public function getTotalNetWeight(): ?float
    {
        return $this->totalNetWeight;
    }

    /**
     * Please provide the total net weight.
     */
    public function setTotalNetWeight(?float $totalNetWeight): self
    {
        $this->totalNetWeight = $totalNetWeight;

        return $this;
    }

    /**
     * Please provide the total gross weight.
     */
    public function getTotalGrossWeight(): ?float
    {
        return $this->totalGrossWeight;
    }

    /**
     * Please provide the total gross weight.
     */
    public function setTotalGrossWeight(?float $totalGrossWeight): self
    {
        $this->totalGrossWeight = $totalGrossWeight;

        return $this;
    }

    /**
     * Please provide the customer references at invoice level.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem[]|null
     */
    public function getCustomerReferences(): ?array
    {
        return $this->customerReferences;
    }

    /**
     * Please provide the customer references at invoice level.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem[]|null $customerReferences
     */
    public function setCustomerReferences(?array $customerReferences): self
    {
        $this->customerReferences = $customerReferences;

        return $this;
    }

    /**
     * Please provide the terms of payment.
     */
    public function getTermsOfPayment(): ?string
    {
        return $this->termsOfPayment;
    }

    /**
     * Please provide the terms of payment.
     */
    public function setTermsOfPayment(?string $termsOfPayment): self
    {
        $this->termsOfPayment = $termsOfPayment;

        return $this;
    }

    /**
     * indicativeCustomsValues contains child nodes importCustomsDutyValue and importTaxesValue.<BR>                  <BR> These 2 child elements are only applicable for Commercial Invoice printing purpose in Customs Invoice template*: COMMERCIAL_INVOICE_P_10 and COMMERCIAL_INVOICE_L_10.<BR>                  If any of this child nodes are present, it will only be able to display up to three OtherCharges. <BR> <BR>                  Nonetheless, the ShipmentRequest can still contain up to five additionalCharges.<BR>                  If there are more than three additionalCharges, the third additionalCharges onwards will be combined and displayed under one single caption of 'Other Charges'.<BR> <BR>                  Note: If either first or second additionalCharges has typeCode of 'other', and there are more than three additionalCharges provided in the request, the additionalCharges with typeCode of 'other' will be consolidated under the combined 'Other Charges' caption as well.
     */
    public function getIndicativeCustomsValues(): ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues
    {
        return $this->indicativeCustomsValues;
    }

    /**
     * indicativeCustomsValues contains child nodes importCustomsDutyValue and importTaxesValue.<BR>                  <BR> These 2 child elements are only applicable for Commercial Invoice printing purpose in Customs Invoice template*: COMMERCIAL_INVOICE_P_10 and COMMERCIAL_INVOICE_L_10.<BR>                  If any of this child nodes are present, it will only be able to display up to three OtherCharges. <BR> <BR>                  Nonetheless, the ShipmentRequest can still contain up to five additionalCharges.<BR>                  If there are more than three additionalCharges, the third additionalCharges onwards will be combined and displayed under one single caption of 'Other Charges'.<BR> <BR>                  Note: If either first or second additionalCharges has typeCode of 'other', and there are more than three additionalCharges provided in the request, the additionalCharges with typeCode of 'other' will be consolidated under the combined 'Other Charges' caption as well.
     */
    public function setIndicativeCustomsValues(?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues $indicativeCustomsValues): self
    {
        $this->indicativeCustomsValues = $indicativeCustomsValues;

        return $this;
    }
}
