<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties
{
    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem[]|null
     */
    protected $imageOptions;

    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem[]|null
     */
    public function getImageOptions(): ?array
    {
        return $this->imageOptions;
    }

    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem[]|null $imageOptions
     */
    public function setImageOptions(?array $imageOptions): self
    {
        $this->imageOptions = $imageOptions;

        return $this;
    }
}
