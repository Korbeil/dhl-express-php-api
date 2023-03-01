<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails
{
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
     * Please enter the business party type of the receiver.
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
        $this->postalAddress = $postalAddress;

        return $this;
    }

    public function getContactInformation(): ?SupermodelIoLogisticsExpressContact
    {
        return $this->contactInformation;
    }

    public function setContactInformation(?SupermodelIoLogisticsExpressContact $contactInformation): self
    {
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
        $this->bankDetails = $bankDetails;

        return $this;
    }

    /**
     * Please enter the business party type of the receiver.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the business party type of the receiver.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }
}
