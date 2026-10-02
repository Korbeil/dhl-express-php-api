<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails
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
     * Please enter the business party type of the importer.
     */
    public ?string $typeCode;
}
