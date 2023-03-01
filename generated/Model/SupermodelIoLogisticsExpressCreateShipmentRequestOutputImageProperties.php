<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties
{
    /**
     * Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output.
     *
     * @var float|null
     */
    protected $printerDPI;
    /**
     * Customer barcodes to be printed on supported transport label templates.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem[]|null
     */
    protected $customerBarcodes;
    /**
     * Customer Logo Image to be printed on transport label.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem[]|null
     */
    protected $customerLogos;
    /**
     * Please provide the format of the output documents. Note that invoice and receipt will always come back as PDF.
     *
     * @var string|null
     */
    protected $encodingFormat = 'pdf';
    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem[]|null
     */
    protected $imageOptions;
    /**
     * When set to true it will generate a single PDF or thermal output file for the Transport Label, a single PDF or thermal output file for the Waybill document and a single PDF file consisting of Commercial Invoice and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @var bool|null
     */
    protected $splitTransportAndWaybillDocLabels;
    /**
     * When set to true it will generate a single PDF or thermal output image file consists of Transport Label, Waybill Document, Shipment Receipt and Commercial Invoice.<BR>          The default value is false, where a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned.
     *
     * @var bool|null
     */
    protected $allDocumentsInOneImage;
    /**
     * When set to true it will generate a single PDF or thermal output image file for each page for the Transport Label and single PDF or thermal output image file for Waybill Document will be returned in the create shipment response. The default value is false, a single PDF or thermal output image file for each page for Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @var bool|null
     */
    protected $splitDocumentsByPages;
    /**
     * When set to true it will generate a single PDF or thermal output image file consisting of Transport Label + Waybill Document, a single file consist of Commercial Invoice and a single file consist of Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned in create shipment response.
     *
     * @var bool|null
     */
    protected $splitInvoiceAndReceipt;
    /**
     * When set to true it will generate a single PDF file consisting of Transport Label, Waybill Document and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF file for Shipment Receipt will be returned in create shipment response. Applicable only when #/outputImageProperties/imageOptions/0/typeCode is 'receipt' and #/outputImageProperties/encodingFormat is PDF.
     *
     * @var bool|null
     */
    protected $receiptAndLabelsInOneImage;

    /**
     * Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output.
     */
    public function getPrinterDPI(): ?float
    {
        return $this->printerDPI;
    }

    /**
     * Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output.
     */
    public function setPrinterDPI(?float $printerDPI): self
    {
        $this->printerDPI = $printerDPI;

        return $this;
    }

    /**
     * Customer barcodes to be printed on supported transport label templates.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem[]|null
     */
    public function getCustomerBarcodes(): ?array
    {
        return $this->customerBarcodes;
    }

    /**
     * Customer barcodes to be printed on supported transport label templates.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem[]|null $customerBarcodes
     */
    public function setCustomerBarcodes(?array $customerBarcodes): self
    {
        $this->customerBarcodes = $customerBarcodes;

        return $this;
    }

    /**
     * Customer Logo Image to be printed on transport label.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem[]|null
     */
    public function getCustomerLogos(): ?array
    {
        return $this->customerLogos;
    }

    /**
     * Customer Logo Image to be printed on transport label.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem[]|null $customerLogos
     */
    public function setCustomerLogos(?array $customerLogos): self
    {
        $this->customerLogos = $customerLogos;

        return $this;
    }

    /**
     * Please provide the format of the output documents. Note that invoice and receipt will always come back as PDF.
     */
    public function getEncodingFormat(): ?string
    {
        return $this->encodingFormat;
    }

    /**
     * Please provide the format of the output documents. Note that invoice and receipt will always come back as PDF.
     */
    public function setEncodingFormat(?string $encodingFormat): self
    {
        $this->encodingFormat = $encodingFormat;

        return $this;
    }

    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem[]|null
     */
    public function getImageOptions(): ?array
    {
        return $this->imageOptions;
    }

    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem[]|null $imageOptions
     */
    public function setImageOptions(?array $imageOptions): self
    {
        $this->imageOptions = $imageOptions;

        return $this;
    }

    /**
     * When set to true it will generate a single PDF or thermal output file for the Transport Label, a single PDF or thermal output file for the Waybill document and a single PDF file consisting of Commercial Invoice and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     */
    public function getSplitTransportAndWaybillDocLabels(): ?bool
    {
        return $this->splitTransportAndWaybillDocLabels;
    }

    /**
     * When set to true it will generate a single PDF or thermal output file for the Transport Label, a single PDF or thermal output file for the Waybill document and a single PDF file consisting of Commercial Invoice and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     */
    public function setSplitTransportAndWaybillDocLabels(?bool $splitTransportAndWaybillDocLabels): self
    {
        $this->splitTransportAndWaybillDocLabels = $splitTransportAndWaybillDocLabels;

        return $this;
    }

    /**
     * When set to true it will generate a single PDF or thermal output image file consists of Transport Label, Waybill Document, Shipment Receipt and Commercial Invoice.<BR>          The default value is false, where a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned.
     */
    public function getAllDocumentsInOneImage(): ?bool
    {
        return $this->allDocumentsInOneImage;
    }

    /**
     * When set to true it will generate a single PDF or thermal output image file consists of Transport Label, Waybill Document, Shipment Receipt and Commercial Invoice.<BR>          The default value is false, where a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned.
     */
    public function setAllDocumentsInOneImage(?bool $allDocumentsInOneImage): self
    {
        $this->allDocumentsInOneImage = $allDocumentsInOneImage;

        return $this;
    }

    /**
     * When set to true it will generate a single PDF or thermal output image file for each page for the Transport Label and single PDF or thermal output image file for Waybill Document will be returned in the create shipment response. The default value is false, a single PDF or thermal output image file for each page for Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     */
    public function getSplitDocumentsByPages(): ?bool
    {
        return $this->splitDocumentsByPages;
    }

    /**
     * When set to true it will generate a single PDF or thermal output image file for each page for the Transport Label and single PDF or thermal output image file for Waybill Document will be returned in the create shipment response. The default value is false, a single PDF or thermal output image file for each page for Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     */
    public function setSplitDocumentsByPages(?bool $splitDocumentsByPages): self
    {
        $this->splitDocumentsByPages = $splitDocumentsByPages;

        return $this;
    }

    /**
     * When set to true it will generate a single PDF or thermal output image file consisting of Transport Label + Waybill Document, a single file consist of Commercial Invoice and a single file consist of Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned in create shipment response.
     */
    public function getSplitInvoiceAndReceipt(): ?bool
    {
        return $this->splitInvoiceAndReceipt;
    }

    /**
     * When set to true it will generate a single PDF or thermal output image file consisting of Transport Label + Waybill Document, a single file consist of Commercial Invoice and a single file consist of Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned in create shipment response.
     */
    public function setSplitInvoiceAndReceipt(?bool $splitInvoiceAndReceipt): self
    {
        $this->splitInvoiceAndReceipt = $splitInvoiceAndReceipt;

        return $this;
    }

    /**
     * When set to true it will generate a single PDF file consisting of Transport Label, Waybill Document and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF file for Shipment Receipt will be returned in create shipment response. Applicable only when #/outputImageProperties/imageOptions/0/typeCode is 'receipt' and #/outputImageProperties/encodingFormat is PDF.
     */
    public function getReceiptAndLabelsInOneImage(): ?bool
    {
        return $this->receiptAndLabelsInOneImage;
    }

    /**
     * When set to true it will generate a single PDF file consisting of Transport Label, Waybill Document and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF file for Shipment Receipt will be returned in create shipment response. Applicable only when #/outputImageProperties/imageOptions/0/typeCode is 'receipt' and #/outputImageProperties/encodingFormat is PDF.
     */
    public function setReceiptAndLabelsInOneImage(?bool $receiptAndLabelsInOneImage): self
    {
        $this->receiptAndLabelsInOneImage = $receiptAndLabelsInOneImage;

        return $this;
    }
}
