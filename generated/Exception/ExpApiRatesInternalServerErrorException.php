<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiRatesInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse
         */
        private readonly \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response,
    ) {
        parent::__construct('Process errors');
    }

    public function getSupermodelIoLogisticsExpressErrorResponse(): \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }

    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}
