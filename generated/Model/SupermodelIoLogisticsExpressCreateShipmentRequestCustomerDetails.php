<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails
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
     * Please enter address and contact details related to shipper.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails|null
     */
    protected $shipperDetails;
    /**
     * Please enter address and contact details related to receiver.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails|null
     */
    protected $receiverDetails;
    /**
     * Please enter address and contact details related to buyer.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails|null
     */
    protected $buyerDetails;
    /**
     * Please enter address and contact details related to importer.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails|null
     */
    protected $importerDetails;
    /**
     * Please enter address and contact details related to exporter.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails|null
     */
    protected $exporterDetails;
    /**
     * Please enter address and contact details related to seller.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails|null
     */
    protected $sellerDetails;
    /**
     * Please enter address and contact details related to payer.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails|null
     */
    protected $payerDetails;
    /**
     * Please enter address and contact details related to ultimate consignee.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails|null
     */
    protected $ultimateConsigneeDetails;

    /**
     * Please enter address and contact details related to shipper.
     */
    public function getShipperDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails
    {
        return $this->shipperDetails;
    }

    /**
     * Please enter address and contact details related to shipper.
     */
    public function setShipperDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to receiver.
     */
    public function getReceiverDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }

    /**
     * Please enter address and contact details related to receiver.
     */
    public function setReceiverDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to buyer.
     */
    public function getBuyerDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails
    {
        return $this->buyerDetails;
    }

    /**
     * Please enter address and contact details related to buyer.
     */
    public function setBuyerDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails $buyerDetails): self
    {
        $this->initialized['buyerDetails'] = true;
        $this->buyerDetails = $buyerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to importer.
     */
    public function getImporterDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails
    {
        return $this->importerDetails;
    }

    /**
     * Please enter address and contact details related to importer.
     */
    public function setImporterDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails $importerDetails): self
    {
        $this->initialized['importerDetails'] = true;
        $this->importerDetails = $importerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to exporter.
     */
    public function getExporterDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails
    {
        return $this->exporterDetails;
    }

    /**
     * Please enter address and contact details related to exporter.
     */
    public function setExporterDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails $exporterDetails): self
    {
        $this->initialized['exporterDetails'] = true;
        $this->exporterDetails = $exporterDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to seller.
     */
    public function getSellerDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails
    {
        return $this->sellerDetails;
    }

    /**
     * Please enter address and contact details related to seller.
     */
    public function setSellerDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails $sellerDetails): self
    {
        $this->initialized['sellerDetails'] = true;
        $this->sellerDetails = $sellerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to payer.
     */
    public function getPayerDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails
    {
        return $this->payerDetails;
    }

    /**
     * Please enter address and contact details related to payer.
     */
    public function setPayerDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails $payerDetails): self
    {
        $this->initialized['payerDetails'] = true;
        $this->payerDetails = $payerDetails;

        return $this;
    }

    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public function getUltimateConsigneeDetails(): ?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails
    {
        return $this->ultimateConsigneeDetails;
    }

    /**
     * Please enter address and contact details related to ultimate consignee.
     */
    public function setUltimateConsigneeDetails(?SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails): self
    {
        $this->initialized['ultimateConsigneeDetails'] = true;
        $this->ultimateConsigneeDetails = $ultimateConsigneeDetails;

        return $this;
    }
}
