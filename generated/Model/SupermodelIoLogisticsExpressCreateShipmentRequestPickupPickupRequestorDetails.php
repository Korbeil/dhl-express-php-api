<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails
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
     * Please enter the business party type of the pickup requestor.
     */
    public ?string $typeCode;
}
