<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities
{
    /**
     * Delivery Date capabilities considering customs clearance days.<BR>                QDDF: is the fastest ("docs") transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered.<BR>                QDDC: constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special operational non-transport component(s), when relevant.
     *
     * @var string|null
     */
    protected $deliveryTypeCode;
    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed.
     *
     * @var string|null
     */
    protected $estimatedDeliveryDateAndTime;
    /**
     * The DHL Service Area Code for the destination of the Shipment.
     *
     * @var string|null
     */
    protected $destinationServiceAreaCode;
    /**
     * The DHL Facility Code for the Destination.
     *
     * @var string|null
     */
    protected $destinationFacilityAreaCode;
    /**
     * This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     *
     * @var float|null
     */
    protected $deliveryAdditionalDays;
    /**
     * Destination day of the week number.
     *
     * @var float|null
     */
    protected $deliveryDayOfWeek;
    /**
     * The number of transit days.
     *
     * @var float|null
     */
    protected $totalTransitDays;

    /**
     * Delivery Date capabilities considering customs clearance days.<BR>                QDDF: is the fastest ("docs") transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered.<BR>                QDDC: constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special operational non-transport component(s), when relevant.
     */
    public function getDeliveryTypeCode(): ?string
    {
        return $this->deliveryTypeCode;
    }

    /**
     * Delivery Date capabilities considering customs clearance days.<BR>                QDDF: is the fastest ("docs") transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered.<BR>                QDDC: constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special operational non-transport component(s), when relevant.
     */
    public function setDeliveryTypeCode(?string $deliveryTypeCode): self
    {
        $this->deliveryTypeCode = $deliveryTypeCode;

        return $this;
    }

    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed.
     */
    public function getEstimatedDeliveryDateAndTime(): ?string
    {
        return $this->estimatedDeliveryDateAndTime;
    }

    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed.
     */
    public function setEstimatedDeliveryDateAndTime(?string $estimatedDeliveryDateAndTime): self
    {
        $this->estimatedDeliveryDateAndTime = $estimatedDeliveryDateAndTime;

        return $this;
    }

    /**
     * The DHL Service Area Code for the destination of the Shipment.
     */
    public function getDestinationServiceAreaCode(): ?string
    {
        return $this->destinationServiceAreaCode;
    }

    /**
     * The DHL Service Area Code for the destination of the Shipment.
     */
    public function setDestinationServiceAreaCode(?string $destinationServiceAreaCode): self
    {
        $this->destinationServiceAreaCode = $destinationServiceAreaCode;

        return $this;
    }

    /**
     * The DHL Facility Code for the Destination.
     */
    public function getDestinationFacilityAreaCode(): ?string
    {
        return $this->destinationFacilityAreaCode;
    }

    /**
     * The DHL Facility Code for the Destination.
     */
    public function setDestinationFacilityAreaCode(?string $destinationFacilityAreaCode): self
    {
        $this->destinationFacilityAreaCode = $destinationFacilityAreaCode;

        return $this;
    }

    /**
     * This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     */
    public function getDeliveryAdditionalDays(): ?float
    {
        return $this->deliveryAdditionalDays;
    }

    /**
     * This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     */
    public function setDeliveryAdditionalDays(?float $deliveryAdditionalDays): self
    {
        $this->deliveryAdditionalDays = $deliveryAdditionalDays;

        return $this;
    }

    /**
     * Destination day of the week number.
     */
    public function getDeliveryDayOfWeek(): ?float
    {
        return $this->deliveryDayOfWeek;
    }

    /**
     * Destination day of the week number.
     */
    public function setDeliveryDayOfWeek(?float $deliveryDayOfWeek): self
    {
        $this->deliveryDayOfWeek = $deliveryDayOfWeek;

        return $this;
    }

    /**
     * The number of transit days.
     */
    public function getTotalTransitDays(): ?float
    {
        return $this->totalTransitDays;
    }

    /**
     * The number of transit days.
     */
    public function setTotalTransitDays(?float $totalTransitDays): self
    {
        $this->totalTransitDays = $totalTransitDays;

        return $this;
    }
}
