<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails
{
    public ?Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress;
    public ?Common\SupermodelIoLogisticsExpressContact $contactInformation;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    public ?array $registrationNumbers;
    /**
     * Should your country require registration numbers, such as VAT, EOR etc., please declare it here.
     */
    public ?Common\SupermodelIoLogisticsExpressRegistrationNumbers $bankDetails;
    /**
     * Please enter the business party role type of the ultimate consignee.
     */
    public ?string $typeCode;
}
