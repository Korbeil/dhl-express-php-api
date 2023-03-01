<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressIdentifierResponse
{
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
        $this->identifiers = $identifiers;

        return $this;
    }
}
