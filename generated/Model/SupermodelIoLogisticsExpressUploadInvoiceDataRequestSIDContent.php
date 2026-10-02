<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent
{
    /**
     * Here you can find all details related to export declaration.
     *
     * @var list<Common\SupermodelIoLogisticsExpressExportDeclaration>|null
     */
    public ?array $exportDeclaration;
    /**
     * For customs purposes please advise on currency code of the indicated amount in invoice.
     */
    public ?string $currency;
    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public ?string $unitOfMeasurement;
}
