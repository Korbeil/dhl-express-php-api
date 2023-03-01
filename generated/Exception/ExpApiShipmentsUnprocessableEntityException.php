<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiShipmentsUnprocessableEntityException extends UnprocessableEntityException
{
    private $supermodelIoLogisticsExpressErrorResponse;

    public function __construct(\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse)
    {
        parent::__construct('Wrong input parameters', 422);
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
    }

    public function getSupermodelIoLogisticsExpressErrorResponse()
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }
}
