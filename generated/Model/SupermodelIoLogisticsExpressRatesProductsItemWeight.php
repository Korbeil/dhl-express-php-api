<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemWeight
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
        $this->initialized['volumetric'] = true;
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
        $this->initialized['provided'] = true;
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
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }
}
