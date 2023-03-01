<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter
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
        $this->initialized['id'] = true;
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
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }
}
