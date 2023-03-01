<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions
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
        $this->initialized['length'] = true;
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
        $this->initialized['width'] = true;
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
        $this->initialized['height'] = true;
        $this->height = $height;

        return $this;
    }
}
