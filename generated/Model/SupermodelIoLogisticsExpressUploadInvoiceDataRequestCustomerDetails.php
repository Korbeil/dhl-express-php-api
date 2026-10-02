<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
{
    /**
     * Please enter address and contact details related to seller.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails $sellerDetails;
    /**
     * Please enter address and contact details related to buyer.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails $buyerDetails;
    /**
     * Please enter address and contact details related to importer.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails $importerDetails;
    /**
     * Please enter address and contact details related to exporter.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails $exporterDetails;
    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails;
}
