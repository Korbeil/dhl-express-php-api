<?php

namespace Korbeil\DHLExpress\Api\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}
