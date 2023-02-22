<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea
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
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $gMTOffset;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getGMTOffset(): ?string
    {
        return $this->gMTOffset;
    }

    public function setGMTOffset(?string $gMTOffset): self
    {
        $this->initialized['gMTOffset'] = true;
        $this->gMTOffset = $gMTOffset;

        return $this;
    }
}
