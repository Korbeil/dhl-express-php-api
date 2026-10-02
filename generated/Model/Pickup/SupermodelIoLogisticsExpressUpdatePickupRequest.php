<?php

namespace Korbeil\DHLExpress\Api\Model\Pickup;

class SupermodelIoLogisticsExpressUpdatePickupRequest
{
    /**
     * Please enter Dispatch confirmation number which identifies the already scheduled pickup.
     */
    public ?string $dispatchConfirmationNumber;
    /**
     * Please enter the shipper account number which was used during the scheduled pickup creation.
     */
    public ?string $originalShipperAccountNumber;
    /**
     * Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).<BR>.
     */
    public ?string $plannedPickupDateAndTime;
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM).
     */
    public ?string $closeTime;
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     */
    public ?string $location;
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>.
     */
    public ?string $locationType;
    /**
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem>|null
     */
    public ?array $specialInstructions;
    /**
     * Please provide additional pickup remark.
     */
    public ?string $remark;
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails $customerDetails;
    /**
     * Please provide updated details related to shipment you want update the pickup for.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem>|null
     */
    public ?array $shipmentDetails;
}
