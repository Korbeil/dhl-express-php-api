<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter
{
    /**
     * Please provide exporter Id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Please provide exporter code.
     *
     * @var string|null
     */
    protected $code;

    /**
     * Please provide exporter Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Please provide exporter Id.
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Please provide exporter code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Please provide exporter code.
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
