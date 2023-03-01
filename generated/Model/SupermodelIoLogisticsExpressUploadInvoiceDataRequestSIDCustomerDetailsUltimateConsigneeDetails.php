<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails
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
     * @var SupermodelIoLogisticsExpressAddress|null
     */
    protected $postalAddress;
    /**
     * @var SupermodelIoLogisticsExpressContact|null
     */
    protected $contactInformation;
    /**
     * Please enter the business party type of the ultimate consignee.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * @var SupermodelIoLogisticsExpressRegistrationNumbers[]|null
     */
    protected $registrationNumbers;

    public function getPostalAddress(): ?SupermodelIoLogisticsExpressAddress
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?SupermodelIoLogisticsExpressAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;

        return $this;
    }

    public function getContactInformation(): ?SupermodelIoLogisticsExpressContact
    {
        return $this->contactInformation;
    }

    public function setContactInformation(?SupermodelIoLogisticsExpressContact $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;

        return $this;
    }

    /**
     * Please enter the business party type of the ultimate consignee.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the business party type of the ultimate consignee.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRegistrationNumbers[]|null
     */
    public function getRegistrationNumbers(): ?array
    {
        return $this->registrationNumbers;
    }

    /**
     * @param SupermodelIoLogisticsExpressRegistrationNumbers[]|null $registrationNumbers
     */
    public function setRegistrationNumbers(?array $registrationNumbers): self
    {
        $this->initialized['registrationNumbers'] = true;
        $this->registrationNumbers = $registrationNumbers;

        return $this;
    }
}
