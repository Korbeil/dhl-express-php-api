<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties
{
    /**
     * Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output.
     */
    public ?float $printerDPI;
    /**
     * Customer barcodes to be printed on supported transport label templates.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem>|null
     */
    public ?array $customerBarcodes;
    /**
     * Customer Logo Image to be printed on transport label.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem>|null
     */
    public ?array $customerLogos;
    /**
     * Please provide the format of the output documents. Note that invoice and receipt will always come back as PDF.
     */
    public ?string $encodingFormat = 'pdf';
    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem>|null
     */
    public ?array $imageOptions;
    /**
     * When set to true it will generate a single PDF or thermal output file for the Transport Label, a single PDF or thermal output file for the Waybill document and a single PDF file consisting of Commercial Invoice and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     */
    public ?bool $splitTransportAndWaybillDocLabels;
    /**
     * When set to true it will generate a single PDF or thermal output image file consists of Transport Label, Waybill Document, Shipment Receipt and Commercial Invoice.<BR>          The default value is false, where a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned.
     */
    public ?bool $allDocumentsInOneImage;
    /**
     * When set to true it will generate a single PDF or thermal output image file for each page for the Transport Label and single PDF or thermal output image file for Waybill Document will be returned in the create shipment response. The default value is false, a single PDF or thermal output image file for each page for Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     */
    public ?bool $splitDocumentsByPages;
    /**
     * When set to true it will generate a single PDF or thermal output image file consisting of Transport Label + Waybill Document, a single file consist of Commercial Invoice and a single file consist of Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned in create shipment response.
     */
    public ?bool $splitInvoiceAndReceipt;
    /**
     * When set to true it will generate a single PDF file consisting of Transport Label, Waybill Document and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF file for Shipment Receipt will be returned in create shipment response. Applicable only when #/outputImageProperties/imageOptions/0/typeCode is 'receipt' and #/outputImageProperties/encodingFormat is PDF.
     */
    public ?bool $receiptAndLabelsInOneImage;
}
