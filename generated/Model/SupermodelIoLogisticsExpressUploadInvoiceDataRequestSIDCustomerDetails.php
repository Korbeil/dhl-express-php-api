<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails
{
    /**
     * Please enter address and contact details related to seller.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails $sellerDetails;
    /**
     * Please enter address and contact details related to buyer.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails $buyerDetails;
    /**
     * Please enter address and contact details related to importer.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails $importerDetails;
    /**
     * Please enter address and contact details related to exporter.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails $exporterDetails;
    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails;
}
