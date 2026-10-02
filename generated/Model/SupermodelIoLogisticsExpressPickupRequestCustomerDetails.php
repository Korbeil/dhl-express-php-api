<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPickupRequestCustomerDetails
{
    public ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails $shipperDetails;
    public ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails $receiverDetails;
    public ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails;
    public ?SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails $pickupDetails;
}
