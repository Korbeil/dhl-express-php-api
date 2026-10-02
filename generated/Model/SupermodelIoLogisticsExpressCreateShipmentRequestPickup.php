<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPickup
{
    /**
     * Please advise if a pickup is needed for this shipment.
     */
    public ?bool $isRequested = false;
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM).
     */
    public ?string $closeTime;
    /**
     * Provides information on where the package should be picked up by DHL courier.
     */
    public ?string $location;
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem>|null
     */
    public ?array $specialInstructions;
    /**
     * Please enter address and contact details related to your pickup.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails $pickupDetails;
    /**
     * Please enter address and contact details of the individual requesting the pickup.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails $pickupRequestorDetails;
}
