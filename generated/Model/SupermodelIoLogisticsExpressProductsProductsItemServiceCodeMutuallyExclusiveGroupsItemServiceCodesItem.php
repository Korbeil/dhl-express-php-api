<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem
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
     * The special service charge code.
     *
     * @var string|null
     */
    protected $serviceCode;

    /**
     * The special service charge code.
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * The special service charge code.
     */
    public function setServiceCode(?string $serviceCode): self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;

        return $this;
    }
}
