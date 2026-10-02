<?php

namespace Korbeil\DHLExpress\Api\Model\Pickup;

class SupermodelIoLogisticsExpressUpdatePickupResponse
{
    /**
     * Identifies the pickup you made the changes for.
     */
    public ?string $dispatchConfirmationNumber;
    public ?string $readyByTime;
    public ?string $nextPickupDate;
    /**
     * @var list<string>|null
     */
    public ?array $warnings;
}
