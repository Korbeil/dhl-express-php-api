<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['imageOptions'] = true;
        $this->imageOptions = $imageOptions;

        return $this;
    }
}
