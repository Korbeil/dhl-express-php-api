<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails
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
     * @var Common\SupermodelIoLogisticsExpressAddress|null
     */
    protected $postalAddress;
    /**
     * @var Common\SupermodelIoLogisticsExpressContact|null
     */
    protected $contactInformation;
    /**
     * Please enter the business party type of the buyer.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    protected $registrationNumbers;

    public function getPostalAddress(): ?Common\SupermodelIoLogisticsExpressAddress
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?Common\SupermodelIoLogisticsExpressAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;

        return $this;
    }

    public function getContactInformation(): ?Common\SupermodelIoLogisticsExpressContact
    {
        return $this->contactInformation;
    }

    public function setContactInformation(?Common\SupermodelIoLogisticsExpressContact $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;

        return $this;
    }

    /**
     * Please enter the business party type of the buyer.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the business party type of the buyer.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    public function getRegistrationNumbers(): ?array
    {
        return $this->registrationNumbers;
    }

    /**
     * @param list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null $registrationNumbers
     */
    public function setRegistrationNumbers(?array $registrationNumbers): self
    {
        $this->initialized['registrationNumbers'] = true;
        $this->registrationNumbers = $registrationNumbers;

        return $this;
    }
}
