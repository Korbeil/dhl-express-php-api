<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails
{
    public ?Common\SupermodelIoLogisticsExpressAddress $postalAddress;
    public ?Common\SupermodelIoLogisticsExpressContact $contactInformation;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressRegistrationNumbers>|null
     */
    public ?array $registrationNumbers;
    /**
     * Please enter the business party type of the exporter.
     */
    public ?string $typeCode;
}
