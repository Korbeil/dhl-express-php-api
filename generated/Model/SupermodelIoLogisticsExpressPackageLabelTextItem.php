<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackageLabelTextItem
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
        $this->initialized['position'] = true;
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
        $this->initialized['caption'] = true;
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
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
