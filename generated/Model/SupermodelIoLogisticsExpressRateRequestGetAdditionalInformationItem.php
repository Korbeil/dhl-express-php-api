<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem
{
    /**
     * Provide type code of data that can be returned in response. Values can be allValueAddedServices, allValueAddedServicesAndRuleGroups.
     */
    public ?string $typeCode;
    public ?bool $isRequested;
}
