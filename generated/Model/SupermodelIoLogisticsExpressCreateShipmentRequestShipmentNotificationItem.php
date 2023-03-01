<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem
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
     * Please enter channel type to send the notification by. At this moment only email is supported.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please enter notification receiver email address.
     *
     * @var string|null
     */
    protected $receiverId;
    /**
     * Please enter three letter lanuage code in which you wish to receive the notification in.
     *
     * @var string|null
     */
    protected $languageCode = 'eng';
    /**
     * Please enter two letter language country code.
     *
     * @var string|null
     */
    protected $languageCountryCode = 'UK';
    /**
     * Please enter your message which will be added to the DHL Express notification email.
     *
     * @var string|null
     */
    protected $bespokeMessage;

    /**
     * Please enter channel type to send the notification by. At this moment only email is supported.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter channel type to send the notification by. At this moment only email is supported.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please enter notification receiver email address.
     */
    public function getReceiverId(): ?string
    {
        return $this->receiverId;
    }

    /**
     * Please enter notification receiver email address.
     */
    public function setReceiverId(?string $receiverId): self
    {
        $this->initialized['receiverId'] = true;
        $this->receiverId = $receiverId;

        return $this;
    }

    /**
     * Please enter three letter lanuage code in which you wish to receive the notification in.
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * Please enter three letter lanuage code in which you wish to receive the notification in.
     */
    public function setLanguageCode(?string $languageCode): self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Please enter two letter language country code.
     */
    public function getLanguageCountryCode(): ?string
    {
        return $this->languageCountryCode;
    }

    /**
     * Please enter two letter language country code.
     */
    public function setLanguageCountryCode(?string $languageCountryCode): self
    {
        $this->initialized['languageCountryCode'] = true;
        $this->languageCountryCode = $languageCountryCode;

        return $this;
    }

    /**
     * Please enter your message which will be added to the DHL Express notification email.
     */
    public function getBespokeMessage(): ?string
    {
        return $this->bespokeMessage;
    }

    /**
     * Please enter your message which will be added to the DHL Express notification email.
     */
    public function setBespokeMessage(?string $bespokeMessage): self
    {
        $this->initialized['bespokeMessage'] = true;
        $this->bespokeMessage = $bespokeMessage;

        return $this;
    }
}
