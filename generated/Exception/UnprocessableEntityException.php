<?php

namespace Korbeil\DHLExpress\Api\Exception;

class UnprocessableEntityException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 422);
    }
}
