<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackageRRDimensions
{
    /**
     * Length of the package.
     *
     * @var float|null
     */
    protected $length;
    /**
     * Width of the package.
     *
     * @var float|null
     */
    protected $width;
    /**
     * Height of the package.
     *
     * @var float|null
     */
    protected $height;

    /**
     * Length of the package.
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * Length of the package.
     */
    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Width of the package.
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * Width of the package.
     */
    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Height of the package.
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * Height of the package.
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }
}
