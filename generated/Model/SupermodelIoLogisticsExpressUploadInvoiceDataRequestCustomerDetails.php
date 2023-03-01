<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
{
    /**
     * Please enter address and contact details related to seller.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails|null
     */
    protected $sellerDetails;
    /**
     * Please enter address and contact details related to buyer.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails|null
     */
    protected $buyerDetails;
    /**
     * Please enter address and contact details related to importer.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails|null
     */
    protected $importerDetails;
    /**
     * Please enter address and contact details related to exporter.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails|null
     */
    protected $exporterDetails;
    /**
     * Please enter address and contact details related to ultimate consignee.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails|null
     */
    protected $ultimateConsigneeDetails;

    /**
     * Please enter address and contact details related to seller.
     */
    public function getSellerDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails
    {
        return $this->sellerDetails;
    }

    /**
     * Please enter address and contact details related to seller.
     */
    public function setSellerDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails $sellerDetails): self
    {
        $this->sellerDetails = $sellerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to buyer.
     */
    public function getBuyerDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails
    {
        return $this->buyerDetails;
    }

    /**
     * Please enter address and contact details related to buyer.
     */
    public function setBuyerDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails $buyerDetails): self
    {
        $this->buyerDetails = $buyerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to importer.
     */
    public function getImporterDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails
    {
        return $this->importerDetails;
    }

    /**
     * Please enter address and contact details related to importer.
     */
    public function setImporterDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails $importerDetails): self
    {
        $this->importerDetails = $importerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to exporter.
     */
    public function getExporterDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails
    {
        return $this->exporterDetails;
    }

    /**
     * Please enter address and contact details related to exporter.
     */
    public function setExporterDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails $exporterDetails): self
    {
        $this->exporterDetails = $exporterDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public function getUltimateConsigneeDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails
    {
        return $this->ultimateConsigneeDetails;
    }

    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public function setUltimateConsigneeDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails): self
    {
        $this->ultimateConsigneeDetails = $ultimateConsigneeDetails;

        return $this;
    }
}
