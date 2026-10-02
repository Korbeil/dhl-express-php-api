<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities
{
    /**
     * Delivery Date capabilities considering customs clearance days.<BR>                QDDF: is the fastest ("docs") transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered.<BR>                QDDC: constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special operational non-transport component(s), when relevant.
     */
    public ?string $deliveryTypeCode;
    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed.
     */
    public ?string $estimatedDeliveryDateAndTime;
    /**
     * The DHL Service Area Code for the destination of the Shipment.
     */
    public ?string $destinationServiceAreaCode;
    /**
     * The DHL Facility Code for the Destination.
     */
    public ?string $destinationFacilityAreaCode;
    /**
     * This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     */
    public ?float $deliveryAdditionalDays;
    /**
     * Destination day of the week number.
     */
    public ?float $deliveryDayOfWeek;
    /**
     * The number of transit days.
     */
    public ?float $totalTransitDays;
}
