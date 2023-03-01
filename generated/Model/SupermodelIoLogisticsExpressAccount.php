<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAccount
{
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
        $this->number = $number;

        return $this;
    }
}
