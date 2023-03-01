<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponse
{
    /**
     * @var string[]|null
     */
    protected $warnings;
    /**
     * @var SupermodelIoLogisticsExpressAddressValidateResponseAddressItem[]|null
     */
    protected $address;

    /**
     * @return string[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param string[]|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressAddressValidateResponseAddressItem[]|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * @param SupermodelIoLogisticsExpressAddressValidateResponseAddressItem[]|null $address
     */
    public function setAddress(?array $address): self
    {
        $this->address = $address;

        return $this;
    }
}
