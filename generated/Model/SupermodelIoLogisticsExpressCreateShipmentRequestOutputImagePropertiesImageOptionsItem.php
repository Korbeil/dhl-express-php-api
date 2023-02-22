<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem
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
     * Please enter the document type you want to wish set properties for.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please enter DHL Express document template name. <BR>                Sample Transport label templates:<BR>                ECOM26_84_A4_001 <BR>                ECOM26_84_001 - default<BR> ECOM_TC_A4<BR>                ECOM26_A6_002<BR> ECOM26_84CI_001<BR>                ECOM26_84CI_002 - supported single customer barcode<BR>                ECOM26_84CI_003 - to be used if customer barcodes are used<BR> ECOM_A4_RU_002<BR>                <BR>                Sample WaybillDoc templates<BR> ARCH_8X4_A4_002<BR>                ARCH_8X4 - default<BR>                ARCH_6X4<BR> ARCH_A4_RU_002<BR>                <BR>                Sample Commercial invoice templates:<BR> COMMERCIAL_INVOICE_04 - This template can print the Shipper, Recipient, and Buyer and Importer address details and is on portrait orientation, exclusive use for preparing Loose BBX shipment.<BR>                COMMERCIAL_INVOICE_P_10 - (default) This template can print the Shipper, Recipient and upto two more additional address details in portrait orientation. Note: If customer provided more than four address roles in the request message and this template is selected, the rendered invoice will only contain four address roles based on order of priority: Shipper, Recipient, Seller, Importer, Exporter, Buyer. <BR> COMMERCIAL_INVOICE_L_10 - This template can print the Shipper,Recipient, Buyer, and Importer and Exporter address details and is on landscape orientation..<BR> RET_COM_INVOICE_A4_01 - This template can print the Shipper, Recipient and Importer of record address details and is on landscape orientation. This template is for exclusive use for certain shipment where the goods are actual 'returns'. The Shipper is the party that earlier has received the goods, but now wishes to return the goods to its originating party. The Recipient in this shipment scenario will receive the 'returned goods'. Therefore such request of shipment with an invoice rendering may utilize the specific invoice template for 'Returns Invoice'.<BR>                <BR> Sample Shipment Receipt template<BR> SHIP_RECPT_A4_RU_002 - default<BR>                Sample QR Code template template<BR>                <BR> QR_1_00_LL_PNG_001 - default.
     *
     * @var string|null
     */
    protected $templateName;
    /**
     * To be used for waybillDoc, invoice, receipt and QRcode. If set to true then the document is provided otherwise not.
     *
     * @var bool|null
     */
    protected $isRequested;
    /**
     * To be used for waybillDoc. If set to true then account information will not be printed on the waybillDoc.
     *
     * @var bool|null
     */
    protected $hideAccountNumber;
    /**
     * You can ask up to 2 waybillDoc copies to be provided.
     *
     * @var float|null
     */
    protected $numberOfCopies;
    /**
     * Please advise what type of customs documentation is required.
     *
     * @var string|null
     */
    protected $invoiceType;
    /**
     * Please enter ISO 3 letters language code for invoice.
     *
     * @var string|null
     */
    protected $languageCode;
    /**
     * Please enter ISO 2 letters language country code for invoice.
     *
     * @var string|null
     */
    protected $languageCountryCode;
    /**
     * Please provide the format of the QR Code output format.
     *
     * @var string|null
     */
    protected $encodingFormat;
    /**
     * DHL Logo to be printed in Transport Label or Waybill Document.
     *
     * @var bool|null
     */
    protected $renderDHLLogo;
    /**
     * To print respective Transport Label and Waybill document into A4 margin PDF.<BR>                Note: ECOM26_A6_002,ECOM26_84CI_001,ECOM26_84CI_002,ARCH_6X4,ARCH_8X4 template. <BR>                This option is applicable only for PDF encodingFormat selection.<BR>                false: Transport Label and Waybill document will use default margin settings (default behavior) <BR>                true: Transport Label and Waybill document will print into A4 margin PDF.
     *
     * @var bool|null
     */
    protected $fitLabelsToA4;
    /**
     * Additional customer label free text that can be printed in certain label.Note: Applicable only to ECOM26_A6_002, ECOM_TC_A4 and ECOM26_84CI_001.
     *
     * @var string|null
     */
    protected $labelFreeText;
    /**
     * Additional customer label text that can be printed in certain label.Note: Applicable only to ECOM26_84_A4_001, ECOM_TC_A4 and ECOM26_84CI_001.
     *
     * @var string|null
     */
    protected $labelCustomerDataText;

    /**
     * Please enter the document type you want to wish set properties for.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the document type you want to wish set properties for.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please enter DHL Express document template name. <BR>                Sample Transport label templates:<BR>                ECOM26_84_A4_001 <BR>                ECOM26_84_001 - default<BR> ECOM_TC_A4<BR>                ECOM26_A6_002<BR> ECOM26_84CI_001<BR>                ECOM26_84CI_002 - supported single customer barcode<BR>                ECOM26_84CI_003 - to be used if customer barcodes are used<BR> ECOM_A4_RU_002<BR>                <BR>                Sample WaybillDoc templates<BR> ARCH_8X4_A4_002<BR>                ARCH_8X4 - default<BR>                ARCH_6X4<BR> ARCH_A4_RU_002<BR>                <BR>                Sample Commercial invoice templates:<BR> COMMERCIAL_INVOICE_04 - This template can print the Shipper, Recipient, and Buyer and Importer address details and is on portrait orientation, exclusive use for preparing Loose BBX shipment.<BR>                COMMERCIAL_INVOICE_P_10 - (default) This template can print the Shipper, Recipient and upto two more additional address details in portrait orientation. Note: If customer provided more than four address roles in the request message and this template is selected, the rendered invoice will only contain four address roles based on order of priority: Shipper, Recipient, Seller, Importer, Exporter, Buyer. <BR> COMMERCIAL_INVOICE_L_10 - This template can print the Shipper,Recipient, Buyer, and Importer and Exporter address details and is on landscape orientation..<BR> RET_COM_INVOICE_A4_01 - This template can print the Shipper, Recipient and Importer of record address details and is on landscape orientation. This template is for exclusive use for certain shipment where the goods are actual 'returns'. The Shipper is the party that earlier has received the goods, but now wishes to return the goods to its originating party. The Recipient in this shipment scenario will receive the 'returned goods'. Therefore such request of shipment with an invoice rendering may utilize the specific invoice template for 'Returns Invoice'.<BR>                <BR> Sample Shipment Receipt template<BR> SHIP_RECPT_A4_RU_002 - default<BR>                Sample QR Code template template<BR>                <BR> QR_1_00_LL_PNG_001 - default.
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * Please enter DHL Express document template name. <BR>                Sample Transport label templates:<BR>                ECOM26_84_A4_001 <BR>                ECOM26_84_001 - default<BR> ECOM_TC_A4<BR>                ECOM26_A6_002<BR> ECOM26_84CI_001<BR>                ECOM26_84CI_002 - supported single customer barcode<BR>                ECOM26_84CI_003 - to be used if customer barcodes are used<BR> ECOM_A4_RU_002<BR>                <BR>                Sample WaybillDoc templates<BR> ARCH_8X4_A4_002<BR>                ARCH_8X4 - default<BR>                ARCH_6X4<BR> ARCH_A4_RU_002<BR>                <BR>                Sample Commercial invoice templates:<BR> COMMERCIAL_INVOICE_04 - This template can print the Shipper, Recipient, and Buyer and Importer address details and is on portrait orientation, exclusive use for preparing Loose BBX shipment.<BR>                COMMERCIAL_INVOICE_P_10 - (default) This template can print the Shipper, Recipient and upto two more additional address details in portrait orientation. Note: If customer provided more than four address roles in the request message and this template is selected, the rendered invoice will only contain four address roles based on order of priority: Shipper, Recipient, Seller, Importer, Exporter, Buyer. <BR> COMMERCIAL_INVOICE_L_10 - This template can print the Shipper,Recipient, Buyer, and Importer and Exporter address details and is on landscape orientation..<BR> RET_COM_INVOICE_A4_01 - This template can print the Shipper, Recipient and Importer of record address details and is on landscape orientation. This template is for exclusive use for certain shipment where the goods are actual 'returns'. The Shipper is the party that earlier has received the goods, but now wishes to return the goods to its originating party. The Recipient in this shipment scenario will receive the 'returned goods'. Therefore such request of shipment with an invoice rendering may utilize the specific invoice template for 'Returns Invoice'.<BR>                <BR> Sample Shipment Receipt template<BR> SHIP_RECPT_A4_RU_002 - default<BR>                Sample QR Code template template<BR>                <BR> QR_1_00_LL_PNG_001 - default.
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->initialized['templateName'] = true;
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * To be used for waybillDoc, invoice, receipt and QRcode. If set to true then the document is provided otherwise not.
     */
    public function getIsRequested(): ?bool
    {
        return $this->isRequested;
    }

    /**
     * To be used for waybillDoc, invoice, receipt and QRcode. If set to true then the document is provided otherwise not.
     */
    public function setIsRequested(?bool $isRequested): self
    {
        $this->initialized['isRequested'] = true;
        $this->isRequested = $isRequested;

        return $this;
    }

    /**
     * To be used for waybillDoc. If set to true then account information will not be printed on the waybillDoc.
     */
    public function getHideAccountNumber(): ?bool
    {
        return $this->hideAccountNumber;
    }

    /**
     * To be used for waybillDoc. If set to true then account information will not be printed on the waybillDoc.
     */
    public function setHideAccountNumber(?bool $hideAccountNumber): self
    {
        $this->initialized['hideAccountNumber'] = true;
        $this->hideAccountNumber = $hideAccountNumber;

        return $this;
    }

    /**
     * You can ask up to 2 waybillDoc copies to be provided.
     */
    public function getNumberOfCopies(): ?float
    {
        return $this->numberOfCopies;
    }

    /**
     * You can ask up to 2 waybillDoc copies to be provided.
     */
    public function setNumberOfCopies(?float $numberOfCopies): self
    {
        $this->initialized['numberOfCopies'] = true;
        $this->numberOfCopies = $numberOfCopies;

        return $this;
    }

    /**
     * Please advise what type of customs documentation is required.
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }

    /**
     * Please advise what type of customs documentation is required.
     */
    public function setInvoiceType(?string $invoiceType): self
    {
        $this->initialized['invoiceType'] = true;
        $this->invoiceType = $invoiceType;

        return $this;
    }

    /**
     * Please enter ISO 3 letters language code for invoice.
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * Please enter ISO 3 letters language code for invoice.
     */
    public function setLanguageCode(?string $languageCode): self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Please enter ISO 2 letters language country code for invoice.
     */
    public function getLanguageCountryCode(): ?string
    {
        return $this->languageCountryCode;
    }

    /**
     * Please enter ISO 2 letters language country code for invoice.
     */
    public function setLanguageCountryCode(?string $languageCountryCode): self
    {
        $this->initialized['languageCountryCode'] = true;
        $this->languageCountryCode = $languageCountryCode;

        return $this;
    }

    /**
     * Please provide the format of the QR Code output format.
     */
    public function getEncodingFormat(): ?string
    {
        return $this->encodingFormat;
    }

    /**
     * Please provide the format of the QR Code output format.
     */
    public function setEncodingFormat(?string $encodingFormat): self
    {
        $this->initialized['encodingFormat'] = true;
        $this->encodingFormat = $encodingFormat;

        return $this;
    }

    /**
     * DHL Logo to be printed in Transport Label or Waybill Document.
     */
    public function getRenderDHLLogo(): ?bool
    {
        return $this->renderDHLLogo;
    }

    /**
     * DHL Logo to be printed in Transport Label or Waybill Document.
     */
    public function setRenderDHLLogo(?bool $renderDHLLogo): self
    {
        $this->initialized['renderDHLLogo'] = true;
        $this->renderDHLLogo = $renderDHLLogo;

        return $this;
    }

    /**
     * To print respective Transport Label and Waybill document into A4 margin PDF.<BR>                Note: ECOM26_A6_002,ECOM26_84CI_001,ECOM26_84CI_002,ARCH_6X4,ARCH_8X4 template. <BR>                This option is applicable only for PDF encodingFormat selection.<BR>                false: Transport Label and Waybill document will use default margin settings (default behavior) <BR>                true: Transport Label and Waybill document will print into A4 margin PDF.
     */
    public function getFitLabelsToA4(): ?bool
    {
        return $this->fitLabelsToA4;
    }

    /**
     * To print respective Transport Label and Waybill document into A4 margin PDF.<BR>                Note: ECOM26_A6_002,ECOM26_84CI_001,ECOM26_84CI_002,ARCH_6X4,ARCH_8X4 template. <BR>                This option is applicable only for PDF encodingFormat selection.<BR>                false: Transport Label and Waybill document will use default margin settings (default behavior) <BR>                true: Transport Label and Waybill document will print into A4 margin PDF.
     */
    public function setFitLabelsToA4(?bool $fitLabelsToA4): self
    {
        $this->initialized['fitLabelsToA4'] = true;
        $this->fitLabelsToA4 = $fitLabelsToA4;

        return $this;
    }

    /**
     * Additional customer label free text that can be printed in certain label.Note: Applicable only to ECOM26_A6_002, ECOM_TC_A4 and ECOM26_84CI_001.
     */
    public function getLabelFreeText(): ?string
    {
        return $this->labelFreeText;
    }

    /**
     * Additional customer label free text that can be printed in certain label.Note: Applicable only to ECOM26_A6_002, ECOM_TC_A4 and ECOM26_84CI_001.
     */
    public function setLabelFreeText(?string $labelFreeText): self
    {
        $this->initialized['labelFreeText'] = true;
        $this->labelFreeText = $labelFreeText;

        return $this;
    }

    /**
     * Additional customer label text that can be printed in certain label.Note: Applicable only to ECOM26_84_A4_001, ECOM_TC_A4 and ECOM26_84CI_001.
     */
    public function getLabelCustomerDataText(): ?string
    {
        return $this->labelCustomerDataText;
    }

    /**
     * Additional customer label text that can be printed in certain label.Note: Applicable only to ECOM26_84_A4_001, ECOM_TC_A4 and ECOM26_84CI_001.
     */
    public function setLabelCustomerDataText(?string $labelCustomerDataText): self
    {
        $this->initialized['labelCustomerDataText'] = true;
        $this->labelCustomerDataText = $labelCustomerDataText;

        return $this;
    }
}
