<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiPickupsUpdateNotFoundException extends NotFoundException
{
    /**
     * @var \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse
     */
    private $supermodelIoLogisticsExpressErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Pickup not found');
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
        $this->response = $response;
    }

    public function getSupermodelIoLogisticsExpressErrorResponse(): \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
