<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem
{
    /**
     * Please enter channel type to send the notification by. At this moment only email is supported.
     */
    public ?string $typeCode;
    /**
     * Please enter notification receiver email address.
     */
    public ?string $receiverId;
    /**
     * Please enter three letter lanuage code in which you wish to receive the notification in.
     */
    public ?string $languageCode = 'eng';
    /**
     * Please enter two letter language country code.
     */
    public ?string $languageCountryCode = 'UK';
    /**
     * Please enter your message which will be added to the DHL Express notification email.
     */
    public ?string $bespokeMessage;
}
