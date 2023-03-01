<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiShipmentsTrackingNotFoundException extends NotFoundException
{
    private $supermodelIoLogisticsExpressErrorResponse;

    public function __construct(\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse)
    {
        parent::__construct('No data found', 404);
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
    }

    public function getSupermodelIoLogisticsExpressErrorResponse()
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }
}
