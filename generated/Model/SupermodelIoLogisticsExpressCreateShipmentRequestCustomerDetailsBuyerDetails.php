<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails
{
    public ?Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress;
    public ?Shipment\SupermodelIoLogisticsExpressContactBuyer $contactInformation;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    public ?array $registrationNumbers;
    /**
     * @var list<SupermodelIoLogisticsExpressBankDetailsItem>|null
     */
    public ?array $bankDetails;
    /**
     * Please enter the business party type of the buyer.
     */
    public ?string $typeCode;
}
