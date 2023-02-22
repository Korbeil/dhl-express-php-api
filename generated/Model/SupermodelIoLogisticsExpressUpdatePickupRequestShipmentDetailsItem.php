<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem
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
     * @var SupermodelIoLogisticsExpressAccount[]|null
     */
    protected $accounts;
    /**
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
        $this->initialized['productCode'] = true;
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
        $this->initialized['localProductCode'] = true;
        $this->localProductCode = $localProductCode;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * @param SupermodelIoLogisticsExpressAccount[]|null $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressValueAddedServicesRates[]|null
     */
    public function getValueAddedServices(): ?array
    {
        return $this->valueAddedServices;
    }

    /**
     * @param SupermodelIoLogisticsExpressValueAddedServicesRates[]|null $valueAddedServices
     */
    public function setValueAddedServices(?array $valueAddedServices): self
    {
        $this->initialized['valueAddedServices'] = true;
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
        $this->initialized['isCustomsDeclarable'] = true;
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
        $this->initialized['declaredValue'] = true;
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
        $this->initialized['declaredValueCurrency'] = true;
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
        $this->initialized['unitOfMeasurement'] = true;
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
        $this->initialized['shipmentTrackingNumber'] = true;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressPackageRR[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * @param SupermodelIoLogisticsExpressPackageRR[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;

        return $this;
    }
}
