<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem
{
    /**
     * Please enter the document type you want to wish set properties for.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please enter DHL Express document template name.
     *
     * @var string|null
     */
    protected $templateName;
    /**
     * If set to true then the document is rendered otherwise not.
     *
     * @var bool|null
     */
    protected $isRequested;

    /**
     * Please enter the document type you want to wish set properties for.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter the document type you want to wish set properties for.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please enter DHL Express document template name.
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * Please enter DHL Express document template name.
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * If set to true then the document is rendered otherwise not.
     */
    public function getIsRequested(): ?bool
    {
        return $this->isRequested;
    }

    /**
     * If set to true then the document is rendered otherwise not.
     */
    public function setIsRequested(?bool $isRequested): self
    {
        $this->isRequested = $isRequested;

        return $this;
    }
}
