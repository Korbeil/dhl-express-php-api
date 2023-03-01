<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem
{
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
        $this->list = $list;

        return $this;
    }
}
