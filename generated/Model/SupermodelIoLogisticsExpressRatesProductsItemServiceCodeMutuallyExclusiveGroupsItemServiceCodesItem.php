<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem
{
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
        $this->serviceCode = $serviceCode;

        return $this;
    }
}
