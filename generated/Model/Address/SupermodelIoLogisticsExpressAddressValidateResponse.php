<?php

namespace Korbeil\DHLExpress\Api\Model\Address;

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
     * @var list<string>|null
     */
    protected $warnings;
    /**
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem>|null
     */
    protected $address;

    /**
     * @return list<string>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param list<string>|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * @return list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem>|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * @param list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem>|null $address
     */
    public function setAddress(?array $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
