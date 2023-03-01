<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressContactBuyer
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
     * Please enter email address.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Please enter phone number.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Please enter mobile phone number.
     *
     * @var string|null
     */
    protected $mobilePhone;
    /**
     * Please enter company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Please enter full name.
     *
     * @var string|null
     */
    protected $fullName;

    /**
     * Please enter email address.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Please enter email address.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * Please enter phone number.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Please enter phone number.
     */
    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    /**
     * Please enter mobile phone number.
     */
    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    /**
     * Please enter mobile phone number.
     */
    public function setMobilePhone(?string $mobilePhone): self
    {
        $this->initialized['mobilePhone'] = true;
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Please enter company name.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Please enter company name.
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Please enter full name.
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * Please enter full name.
     */
    public function setFullName(?string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;

        return $this;
    }
}
