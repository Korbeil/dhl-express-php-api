<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem
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
     * Type of identifier.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * List of identifers.
     *
     * @var string[]|null
     */
    protected $list;

    /**
     * Type of identifier.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Type of identifier.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * List of identifers.
     *
     * @return string[]|null
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * List of identifers.
     *
     * @param string[]|null $list
     */
    public function setList(?array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;

        return $this;
    }
}
