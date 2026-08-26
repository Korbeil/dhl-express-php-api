<?php

namespace Korbeil\DHLExpress\Api\Model\Identifier;

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
     * @var list<string>|null
     */
    protected $warnings;
    /**
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem>|null
     */
    protected $identifiers;

    /**
     * @return list<string>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param list<string>|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * @return list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem>|null
     */
    public function getIdentifiers(): ?array
    {
        return $this->identifiers;
    }

    /**
     * @param list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem>|null $identifiers
     */
    public function setIdentifiers(?array $identifiers): self
    {
        $this->initialized['identifiers'] = true;
        $this->identifiers = $identifiers;

        return $this;
    }
}
