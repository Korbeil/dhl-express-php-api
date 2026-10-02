<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationInvoice
{
    /**
     * Please enter commercial invoice number.
     */
    public ?string $number;
    /**
     * Please enter commercial invoice date.
     */
    public ?string $date;
    /**
     * Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers.
     */
    public ?string $function;
    /**
     * Please provide the customer references at invoice level.
     * Note: customerReference/0/value with typeCode 'CU' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem>|null
     */
    public ?array $customerReferences;
}
