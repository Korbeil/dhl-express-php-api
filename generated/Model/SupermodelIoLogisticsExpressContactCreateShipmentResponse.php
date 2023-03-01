<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressContactCreateShipmentResponse
{
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
        $this->fullName = $fullName;

        return $this;
    }
}
