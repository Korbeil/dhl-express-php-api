<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem
{
    /**
     * Please enter the document type you want to wish set properties for.
     */
    public ?string $typeCode;
    /**
     * Please enter DHL Express document template name.
     */
    public ?string $templateName;
    /**
     * If set to true then the document is rendered otherwise not.
     */
    public ?bool $isRequested;
}
