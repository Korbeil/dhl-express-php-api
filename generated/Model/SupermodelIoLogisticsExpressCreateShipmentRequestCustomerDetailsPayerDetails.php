<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails
{
    public ?Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress;
    public ?Common\SupermodelIoLogisticsExpressContact $contactInformation;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    public ?array $registrationNumbers;
    /**
     * @var list<SupermodelIoLogisticsExpressBankDetailsItem>|null
     */
    public ?array $bankDetails;
    /**
     * Please enter the business party role type of the payer.
     */
    public ?string $typeCode;
}
