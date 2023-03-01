<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiShipmentsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse
     */
    private $supermodelIoLogisticsExpressErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Wrong input parameters');
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
        $this->response = $response;
    }

    public function getSupermodelIoLogisticsExpressErrorResponse(): \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
