<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment
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
     * Please provide the parent (mother) Product Code.
     *
     * @var string|null
     */
    protected $productCode;
    /**
     * Please provide the parent (mother) shipment's Number of Packages.
     *
     * @var float|null
     */
    protected $packagesCount;

    /**
     * Please provide the parent (mother) Product Code.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Please provide the parent (mother) Product Code.
     */
    public function setProductCode(?string $productCode): self
    {
        $this->initialized['productCode'] = true;
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Please provide the parent (mother) shipment's Number of Packages.
     */
    public function getPackagesCount(): ?float
    {
        return $this->packagesCount;
    }

    /**
     * Please provide the parent (mother) shipment's Number of Packages.
     */
    public function setPackagesCount(?float $packagesCount): self
    {
        $this->initialized['packagesCount'] = true;
        $this->packagesCount = $packagesCount;

        return $this;
    }
}
