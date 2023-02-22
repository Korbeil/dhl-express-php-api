<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem
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
     * @var string|null
     */
    protected $date;
    /**
     * @var string|null
     */
    protected $time;
    /**
     * @var string|null
     */
    protected $typeCode;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem[]|null
     */
    protected $serviceArea;
    /**
     * @var string|null
     */
    protected $signedBy;

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(?string $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem[]|null
     */
    public function getServiceArea(): ?array
    {
        return $this->serviceArea;
    }

    /**
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem[]|null $serviceArea
     */
    public function setServiceArea(?array $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;

        return $this;
    }

    public function getSignedBy(): ?string
    {
        return $this->signedBy;
    }

    public function setSignedBy(?string $signedBy): self
    {
        $this->initialized['signedBy'] = true;
        $this->signedBy = $signedBy;

        return $this;
    }
}
