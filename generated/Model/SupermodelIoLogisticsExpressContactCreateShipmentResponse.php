<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressContactCreateShipmentResponse
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
     * Company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Full name.
     *
     * @var string|null
     */
    protected $fullName;

    /**
     * Company name.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Company name.
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Full name.
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * Full name.
     */
    public function setFullName(?string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;

        return $this;
    }
}
