<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationRemarksItem
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
     * Please enter remark text.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please enter remark text.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please enter remark text.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
