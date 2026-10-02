<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails
{
    public ?Common\SupermodelIoLogisticsExpressAddress $postalAddress;
    public ?Common\SupermodelIoLogisticsExpressContact $contactInformation;
    /**
     * Please enter the business party type of the buyer.
     */
    public ?string $typeCode;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    public ?array $registrationNumbers;
}
