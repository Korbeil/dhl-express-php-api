<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent
{
    /**
     * Here you can find all details related to export declaration.
     *
     * @var SupermodelIoLogisticsExpressExportDeclaration[]|null
     */
    protected $exportDeclaration;
    /**
     * For customs purposes please advise on currency code of the indicated amount in invoice.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Please enter Unit of measurement - metric,imperial.
     *
     * @var string|null
     */
    protected $unitOfMeasurement;

    /**
     * Here you can find all details related to export declaration.
     *
     * @return SupermodelIoLogisticsExpressExportDeclaration[]|null
     */
    public function getExportDeclaration(): ?array
    {
        return $this->exportDeclaration;
    }

    /**
     * Here you can find all details related to export declaration.
     *
     * @param SupermodelIoLogisticsExpressExportDeclaration[]|null $exportDeclaration
     */
    public function setExportDeclaration(?array $exportDeclaration): self
    {
        $this->exportDeclaration = $exportDeclaration;

        return $this;
    }

    /**
     * For customs purposes please advise on currency code of the indicated amount in invoice.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * For customs purposes please advise on currency code of the indicated amount in invoice.
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement): self
    {
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }
}
