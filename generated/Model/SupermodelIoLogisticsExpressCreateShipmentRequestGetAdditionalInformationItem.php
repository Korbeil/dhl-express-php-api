<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem
{
    /**
     * Provide type code of data that can be returned in response. Values can be pickupDetails, optionalShipmentData, transliterateResponse.
     */
    public ?string $typeCode;
    public ?bool $isRequested;
}
