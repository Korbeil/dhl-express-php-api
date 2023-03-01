<?php

namespace Korbeil\DHLExpress\Api\Exception;

class ExpApiShipmentsImgUploadUnprocessableEntityException extends UnprocessableEntityException
{
    private $supermodelIoLogisticsExpressErrorResponse;

    public function __construct(\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse)
    {
        parent::__construct('Unprocessable Entity', 422);
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
    }

    public function getSupermodelIoLogisticsExpressErrorResponse()
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }
}
