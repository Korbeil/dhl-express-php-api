<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackageLabelTextItem
{
    /**
     * Position of the bespoke text.
     *
     * @var string|null
     */
    protected $position;
    /**
     * Please enter caption to be printed in the tag value.
     *
     * @var string|null
     */
    protected $caption;
    /**
     * Please enter value to be printed for the respective tag in caption.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Position of the bespoke text.
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * Position of the bespoke text.
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Please enter caption to be printed in the tag value.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Please enter caption to be printed in the tag value.
     */
    public function setCaption(?string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Please enter value to be printed for the respective tag in caption.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please enter value to be printed for the respective tag in caption.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
