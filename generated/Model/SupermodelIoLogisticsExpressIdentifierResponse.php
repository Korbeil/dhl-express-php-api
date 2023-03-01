<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressIdentifierResponse
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
     * @var string[]|null
     */
    protected $warnings;
    /**
     * @var SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem[]|null
     */
    protected $identifiers;

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

    /**
     * @return SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem[]|null
     */
    public function getIdentifiers(): ?array
    {
        return $this->identifiers;
    }

    /**
     * @param SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem[]|null $identifiers
     */
    public function setIdentifiers(?array $identifiers): self
    {
        $this->initialized['identifiers'] = true;
        $this->identifiers = $identifiers;

        return $this;
    }
}
