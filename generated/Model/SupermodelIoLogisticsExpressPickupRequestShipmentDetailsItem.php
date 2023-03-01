<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem
{
    /**
     * Please provide DHL Express Global product code of the shipment.
     *
     * @var string|null
     */
    protected $productCode;
    /**
     * Please provide DHL Express Local product code of the shipment.
     *
     * @var string|null
     */
    protected $localProductCode;
    /**
     * Please enter all the DHL Express accounts related to this shipment.
     *
     * @var SupermodelIoLogisticsExpressAccount[]|null
     */
    protected $accounts;
    /**
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
     * @var SupermodelIoLogisticsExpressValueAddedServicesRates[]|null
     */
    protected $valueAddedServices;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     *
     * @var bool|null
     */
    protected $isCustomsDeclarable;
    /**
     * For customs purposes please advise on declared value of the shipment.
     *
     * @var float|null
     */
    protected $declaredValue;
    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     *
     * @var string|null
     */
    protected $declaredValueCurrency;
    /**
     * Please enter Unit of measurement - metric,imperial.
     *
     * @var string|null
     */
    protected $unitOfMeasurement;
    /**
     * Please provide Shipment Identification number (AWB number).
     *
     * @var string|null
     */
    protected $shipmentTrackingNumber;
    /**
     * Here you can define properties per package.
     *
     * @var SupermodelIoLogisticsExpressPackageRR[]|null
     */
    protected $packages;

    /**
     * Please provide DHL Express Global product code of the shipment.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Please provide DHL Express Global product code of the shipment.
     */
    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Please provide DHL Express Local product code of the shipment.
     */
    public function getLocalProductCode(): ?string
    {
        return $this->localProductCode;
    }

    /**
     * Please provide DHL Express Local product code of the shipment.
     */
    public function setLocalProductCode(?string $localProductCode): self
    {
        $this->localProductCode = $localProductCode;

        return $this;
    }

    /**
     * Please enter all the DHL Express accounts related to this shipment.
     *
     * @return SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Please enter all the DHL Express accounts related to this shipment.
     *
     * @param SupermodelIoLogisticsExpressAccount[]|null $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
     * @return SupermodelIoLogisticsExpressValueAddedServicesRates[]|null
     */
    public function getValueAddedServices(): ?array
    {
        return $this->valueAddedServices;
    }

    /**
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
     * @param SupermodelIoLogisticsExpressValueAddedServicesRates[]|null $valueAddedServices
     */
    public function setValueAddedServices(?array $valueAddedServices): self
    {
        $this->valueAddedServices = $valueAddedServices;

        return $this;
    }

    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     */
    public function getIsCustomsDeclarable(): ?bool
    {
        return $this->isCustomsDeclarable;
    }

    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     */
    public function setIsCustomsDeclarable(?bool $isCustomsDeclarable): self
    {
        $this->isCustomsDeclarable = $isCustomsDeclarable;

        return $this;
    }

    /**
     * For customs purposes please advise on declared value of the shipment.
     */
    public function getDeclaredValue(): ?float
    {
        return $this->declaredValue;
    }

    /**
     * For customs purposes please advise on declared value of the shipment.
     */
    public function setDeclaredValue(?float $declaredValue): self
    {
        $this->declaredValue = $declaredValue;

        return $this;
    }

    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     */
    public function getDeclaredValueCurrency(): ?string
    {
        return $this->declaredValueCurrency;
    }

    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     */
    public function setDeclaredValueCurrency(?string $declaredValueCurrency): self
    {
        $this->declaredValueCurrency = $declaredValueCurrency;

        return $this;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement): self
    {
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }

    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    /**
     * Here you can define properties per package.
     *
     * @return SupermodelIoLogisticsExpressPackageRR[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * Here you can define properties per package.
     *
     * @param SupermodelIoLogisticsExpressPackageRR[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->packages = $packages;

        return $this;
    }
}
