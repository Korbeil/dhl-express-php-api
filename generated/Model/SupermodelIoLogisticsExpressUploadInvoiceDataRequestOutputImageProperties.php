<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties
{
    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem[]|null
     */
    protected $imageOptions;

    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem[]|null
     */
    public function getImageOptions(): ?array
    {
        return $this->imageOptions;
    }

    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode.
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem[]|null $imageOptions
     */
    public function setImageOptions(?array $imageOptions): self
    {
        $this->imageOptions = $imageOptions;

        return $this;
    }
}
