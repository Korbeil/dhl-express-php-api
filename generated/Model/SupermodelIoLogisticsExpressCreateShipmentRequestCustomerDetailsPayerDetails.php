<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails
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
     * @var SupermodelIoLogisticsExpressAddressCreateShipmentRequest|null
     */
    protected $postalAddress;
    /**
     * @var SupermodelIoLogisticsExpressContact|null
     */
    protected $contactInformation;
    /**
     * @var SupermodelIoLogisticsExpressRegistrationNumbers[]|null
     */
    protected $registrationNumbers;
    /**
     * @var SupermodelIoLogisticsExpressBankDetailsItem[]|null
     */
    protected $bankDetails;
    /**
     * Please enter the business party role type of the payer.
     *
     * @var string|null
     */
    protected $typeCode;

    public function getPostalAddress(): ?SupermodelIoLogisticsExpressAddressCreateShipmentRequest
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress): self
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

    /**
     * @return SupermodelIoLogisticsExpressBankDetailsItem[]|null
     */
    public function getBankDetails(): ?array
    {
        return $this->bankDetails;
    }

    /**
     * @param SupermodelIoLogisticsExpressBankDetailsItem[]|null $bankDetails
     */
    public function setBankDetails(?array $bankDetails): self
    {
        $this->initialized['bankDetails'] = true;
        $this->bankDetails = $bankDetails;

        return $this;
    }

    /**
     * Please enter the business party role type of the payer.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the business party role type of the payer.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
