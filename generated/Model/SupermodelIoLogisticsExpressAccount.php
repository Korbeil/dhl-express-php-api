<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAccount
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
     * Please enter DHL Express acount type.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please enter DHL Express account number.
     *
     * @var string|null
     */
    protected $number;

    /**
     * Please enter DHL Express acount type.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter DHL Express acount type.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please enter DHL Express account number.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Please enter DHL Express account number.
     */
    public function setNumber(?string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }
}
