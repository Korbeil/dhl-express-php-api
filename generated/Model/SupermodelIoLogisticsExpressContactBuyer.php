<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressContactBuyer
{
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
        $this->fullName = $fullName;

        return $this;
    }
}
