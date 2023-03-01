<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackageRR
{
    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * The weight of the package.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Dimensions of the package.
     *
     * @var SupermodelIoLogisticsExpressPackageRRDimensions|null
     */
    protected $dimensions;

    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * The weight of the package.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * The weight of the package.
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Dimensions of the package.
     */
    public function getDimensions(): ?SupermodelIoLogisticsExpressPackageRRDimensions
    {
        return $this->dimensions;
    }

    /**
     * Dimensions of the package.
     */
    public function setDimensions(?SupermodelIoLogisticsExpressPackageRRDimensions $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }
}
