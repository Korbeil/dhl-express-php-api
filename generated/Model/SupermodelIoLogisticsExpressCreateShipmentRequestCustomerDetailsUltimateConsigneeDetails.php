<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails
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
     * @var Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest|null
     */
    protected $postalAddress;
    /**
     * @var Common\SupermodelIoLogisticsExpressContact|null
     */
    protected $contactInformation;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    protected $registrationNumbers;
    /**
     * Should your country require registration numbers, such as VAT, EOR etc., please declare it here.
     *
     * @var Common\SupermodelIoLogisticsExpressRegistrationNumbers|null
     */
    protected $bankDetails;
    /**
     * Please enter the business party role type of the ultimate consignee.
     *
     * @var string|null
     */
    protected $typeCode;

    public function getPostalAddress(): ?Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(?Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress): self
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

    /**
     * Should your country require registration numbers, such as VAT, EOR etc., please declare it here.
     */
    public function getBankDetails(): ?Common\SupermodelIoLogisticsExpressRegistrationNumbers
    {
        return $this->bankDetails;
    }

    /**
     * Should your country require registration numbers, such as VAT, EOR etc., please declare it here.
     */
    public function setBankDetails(?Common\SupermodelIoLogisticsExpressRegistrationNumbers $bankDetails): self
    {
        $this->initialized['bankDetails'] = true;
        $this->bankDetails = $bankDetails;

        return $this;
    }

    /**
     * Please enter the business party role type of the ultimate consignee.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the business party role type of the ultimate consignee.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
