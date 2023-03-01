<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiPickupsCancelBadRequestException extends BadRequestException
{
    private $supermodelIoLogisticsExpressErrorResponse;

    public function __construct(\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse)
    {
        parent::__construct('Pickup already cancelled or completed / Wrong input parameters', 400);
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
    }

    public function getSupermodelIoLogisticsExpressErrorResponse()
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }
}
