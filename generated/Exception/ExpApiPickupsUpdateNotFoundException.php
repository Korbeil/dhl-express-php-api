<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiPickupsUpdateNotFoundException extends NotFoundException
{
    private $supermodelIoLogisticsExpressErrorResponse;

    public function __construct(\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse)
    {
        parent::__construct('Pickup not found', 404);
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
    }

    public function getSupermodelIoLogisticsExpressErrorResponse()
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }
}
