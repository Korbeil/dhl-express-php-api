<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemWeight
{
    /**
     * The dimensional weight of the shipment.
     *
     * @var float|null
     */
    protected $volumetric;
    /**
     * The quoted weight of the shipment.
     *
     * @var float|null
     */
    protected $provided;
    /**
     * The unit of measurement for the dimensions of the package.
     *
     * @var string|null
     */
    protected $unitOfMeasurement;

    /**
     * The dimensional weight of the shipment.
     */
    public function getVolumetric(): ?float
    {
        return $this->volumetric;
    }

    /**
     * The dimensional weight of the shipment.
     */
    public function setVolumetric(?float $volumetric): self
    {
        $this->volumetric = $volumetric;

        return $this;
    }

    /**
     * The quoted weight of the shipment.
     */
    public function getProvided(): ?float
    {
        return $this->provided;
    }

    /**
     * The quoted weight of the shipment.
     */
    public function setProvided(?float $provided): self
    {
        $this->provided = $provided;

        return $this;
    }

    /**
     * The unit of measurement for the dimensions of the package.
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->unitOfMeasurement;
    }

    /**
     * The unit of measurement for the dimensions of the package.
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement): self
    {
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }
}
