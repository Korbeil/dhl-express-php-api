<?php

namespace Korbeil\DHLExpress\Api\Model\Pickup;

class SupermodelIoLogisticsExpressPickupResponse
{
    /**
     * List of Dispatch Confirmation Numbers which identifies the scheduled pickup.
     *
     * @var list<string>|null
     */
    public ?array $dispatchConfirmationNumbers;
    public ?string $readyByTime;
    public ?string $nextPickupDate;
    /**
     * @var list<string>|null
     */
    public ?array $warnings;
}
