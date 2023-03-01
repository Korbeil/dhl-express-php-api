<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem
{
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
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(?string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
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
        $this->serviceArea = $serviceArea;

        return $this;
    }

    public function getSignedBy(): ?string
    {
        return $this->signedBy;
    }

    public function setSignedBy(?string $signedBy): self
    {
        $this->signedBy = $signedBy;

        return $this;
    }
}
