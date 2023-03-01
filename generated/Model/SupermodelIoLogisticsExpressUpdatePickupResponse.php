<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupResponse
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
     * Identifies the pickup you made the changes for.
     *
     * @var string|null
     */
    protected $dispatchConfirmationNumber;
    /**
     * @var string|null
     */
    protected $readyByTime;
    /**
     * @var string|null
     */
    protected $nextPickupDate;
    /**
     * @var string[]|null
     */
    protected $warnings;

    /**
     * Identifies the pickup you made the changes for.
     */
    public function getDispatchConfirmationNumber(): ?string
    {
        return $this->dispatchConfirmationNumber;
    }

    /**
     * Identifies the pickup you made the changes for.
     */
    public function setDispatchConfirmationNumber(?string $dispatchConfirmationNumber): self
    {
        $this->initialized['dispatchConfirmationNumber'] = true;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;

        return $this;
    }

    public function getReadyByTime(): ?string
    {
        return $this->readyByTime;
    }

    public function setReadyByTime(?string $readyByTime): self
    {
        $this->initialized['readyByTime'] = true;
        $this->readyByTime = $readyByTime;

        return $this;
    }

    public function getNextPickupDate(): ?string
    {
        return $this->nextPickupDate;
    }

    public function setNextPickupDate(?string $nextPickupDate): self
    {
        $this->initialized['nextPickupDate'] = true;
        $this->nextPickupDate = $nextPickupDate;

        return $this;
    }

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
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }
}
