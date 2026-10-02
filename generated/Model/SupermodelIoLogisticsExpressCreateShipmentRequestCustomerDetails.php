<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails
{
    /**
     * Please enter address and contact details related to shipper.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails $shipperDetails;
    /**
     * Please enter address and contact details related to receiver.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails $receiverDetails;
    /**
     * Please enter address and contact details related to buyer.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails $buyerDetails;
    /**
     * Please enter address and contact details related to importer.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails $importerDetails;
    /**
     * Please enter address and contact details related to exporter.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails $exporterDetails;
    /**
     * Please enter address and contact details related to seller.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails $sellerDetails;
    /**
     * Please enter address and contact details related to payer.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails $payerDetails;
    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails;
}
