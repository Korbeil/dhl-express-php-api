<?php

namespace Korbeil\DHLExpress\Api\Model\Common;

class SupermodelIoLogisticsExpressErrorResponse
{
    public ?string $instance;
    public ?string $detail;
    public ?string $title;
    public ?string $message;
    /**
     * @var list<string>|null
     */
    public ?array $additionalDetails;
    public ?string $status;
}
