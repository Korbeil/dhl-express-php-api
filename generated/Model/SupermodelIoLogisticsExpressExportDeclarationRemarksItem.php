<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationRemarksItem
{
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
        $this->value = $value;

        return $this;
    }
}
