<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPickupResponse
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
     * List of Dispatch Confirmation Numbers which identifies the scheduled pickup.
     *
     * @var string[]|null
     */
    protected $dispatchConfirmationNumbers;
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
     * List of Dispatch Confirmation Numbers which identifies the scheduled pickup.
     *
     * @return string[]|null
     */
    public function getDispatchConfirmationNumbers(): ?array
    {
        return $this->dispatchConfirmationNumbers;
    }

    /**
     * List of Dispatch Confirmation Numbers which identifies the scheduled pickup.
     *
     * @param string[]|null $dispatchConfirmationNumbers
     */
    public function setDispatchConfirmationNumbers(?array $dispatchConfirmationNumbers): self
    {
        $this->initialized['dispatchConfirmationNumbers'] = true;
        $this->dispatchConfirmationNumbers = $dispatchConfirmationNumbers;

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
