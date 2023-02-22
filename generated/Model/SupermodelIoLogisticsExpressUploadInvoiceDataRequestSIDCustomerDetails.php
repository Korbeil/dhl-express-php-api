<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails
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
     * Please enter address and contact details related to seller.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails|null
     */
    protected $sellerDetails;
    /**
     * Please enter address and contact details related to buyer.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails|null
     */
    protected $buyerDetails;
    /**
     * Please enter address and contact details related to importer.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails|null
     */
    protected $importerDetails;
    /**
     * Please enter address and contact details related to exporter.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails|null
     */
    protected $exporterDetails;
    /**
     * Please enter address and contact details related to ultimate consignee.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails|null
     */
    protected $ultimateConsigneeDetails;

    /**
     * Please enter address and contact details related to seller.
     */
    public function getSellerDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails
    {
        return $this->sellerDetails;
    }

    /**
     * Please enter address and contact details related to seller.
     */
    public function setSellerDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails $sellerDetails): self
    {
        $this->initialized['sellerDetails'] = true;
        $this->sellerDetails = $sellerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to buyer.
     */
    public function getBuyerDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails
    {
        return $this->buyerDetails;
    }

    /**
     * Please enter address and contact details related to buyer.
     */
    public function setBuyerDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails $buyerDetails): self
    {
        $this->initialized['buyerDetails'] = true;
        $this->buyerDetails = $buyerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to importer.
     */
    public function getImporterDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails
    {
        return $this->importerDetails;
    }

    /**
     * Please enter address and contact details related to importer.
     */
    public function setImporterDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails $importerDetails): self
    {
        $this->initialized['importerDetails'] = true;
        $this->importerDetails = $importerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to exporter.
     */
    public function getExporterDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails
    {
        return $this->exporterDetails;
    }

    /**
     * Please enter address and contact details related to exporter.
     */
    public function setExporterDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails $exporterDetails): self
    {
        $this->initialized['exporterDetails'] = true;
        $this->exporterDetails = $exporterDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public function getUltimateConsigneeDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails
    {
        return $this->ultimateConsigneeDetails;
    }

    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public function setUltimateConsigneeDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails): self
    {
        $this->initialized['ultimateConsigneeDetails'] = true;
        $this->ultimateConsigneeDetails = $ultimateConsigneeDetails;

        return $this;
    }
}
