<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails
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
     * @var list<SupermodelIoLogisticsExpressBankDetailsItem>|null
     */
    protected $bankDetails;
    /**
     * Please enter the business party type of the importer.
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
     * @return list<SupermodelIoLogisticsExpressBankDetailsItem>|null
     */
    public function getBankDetails(): ?array
    {
        return $this->bankDetails;
    }

    /**
     * @param list<SupermodelIoLogisticsExpressBankDetailsItem>|null $bankDetails
     */
    public function setBankDetails(?array $bankDetails): self
    {
        $this->initialized['bankDetails'] = true;
        $this->bankDetails = $bankDetails;

        return $this;
    }

    /**
     * Please enter the business party type of the importer.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the business party type of the importer.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
