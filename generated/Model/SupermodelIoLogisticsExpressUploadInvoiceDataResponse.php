<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataResponse
{
    /**
     * @var string[]|null
     */
    protected $warnings;
    /**
     * Status description.
     *
     * @var string|null
     */
    protected $status;

    /**
     * @return string[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param string[]|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * Status description.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status description.
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
