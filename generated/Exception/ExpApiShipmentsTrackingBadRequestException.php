<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiShipmentsTrackingBadRequestException extends BadRequestException
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
        parent::__construct('Wrong input parameters');
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
