<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails
{
    public ?Common\SupermodelIoLogisticsExpressAddress $postalAddress;
    public ?Common\SupermodelIoLogisticsExpressContact $contactInformation;
    /**
     * Please enter the business party type of the ultimate consignee.
     */
    public ?string $typeCode;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    public ?array $registrationNumbers;
}
