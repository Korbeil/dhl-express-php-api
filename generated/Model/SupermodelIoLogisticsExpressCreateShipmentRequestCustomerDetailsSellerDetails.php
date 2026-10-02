<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails
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
     * Please enter the business party role type of the seller.
     */
    public ?string $typeCode;
}
