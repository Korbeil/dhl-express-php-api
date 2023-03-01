<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponse
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
        $this->initialized['warnings'] = true;
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
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
