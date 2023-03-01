<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressErrorResponse
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
    protected $instance;
    /**
     * @var string|null
     */
    protected $detail;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * @var string[]|null
     */
    protected $additionalDetails;
    /**
     * @var string|null
     */
    protected $status;

    public function getInstance(): ?string
    {
        return $this->instance;
    }

    public function setInstance(?string $instance): self
    {
        $this->initialized['instance'] = true;
        $this->instance = $instance;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAdditionalDetails(): ?array
    {
        return $this->additionalDetails;
    }

    /**
     * @param string[]|null $additionalDetails
     */
    public function setAdditionalDetails(?array $additionalDetails): self
    {
        $this->initialized['additionalDetails'] = true;
        $this->additionalDetails = $additionalDetails;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
