<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem
{
    /**
     * This array contains all the DHL Express special handling feature codes.
     *
     * @var string[]|null
     */
    protected $serviceHandlingFeatureCodes;
    /**
     * Here you can find calculated volumetric weight based on dimensions provided in the request.
     *
     * @var float|null
     */
    protected $volumetricWeight;
    /**
     * Here you can find billing code which was applied on your shipment.
     *
     * @var string|null
     */
    protected $billingCode;
    /**
     * Here you can find the DHL Express shipment content code of your shipment.
     *
     * @var string|null
     */
    protected $serviceContentCode;
    /**
     * Here you need to define all the parties needed to ship the package.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails|null
     */
    protected $customerDetails;
    /**
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea|null
     */
    protected $originServiceArea;
    /**
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea|null
     */
    protected $destinationServiceArea;
    /**
     * Here you can find DHL Routing Code which was applied on your shipment.
     *
     * @var string|null
     */
    protected $dhlRoutingCode;
    /**
     * Here you can find DHL Routing Data ID which was applied on your shipment.
     *
     * @var string|null
     */
    protected $dhlRoutingDataId;
    /**
     * Here you can find Delivery Date Code which was applied on your shipment.
     *
     * @var string|null
     */
    protected $deliveryDateCode;
    /**
     * Here you can find Delivery Time Code which was applied on your shipment.
     *
     * @var string|null
     */
    protected $deliveryTimeCode;
    /**
     * Here you can find the product short name of your shipment.
     *
     * @var string|null
     */
    protected $productShortName;
    /**
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem[]|null
     */
    protected $valueAddedServices;
    /**
     * Here you can find pickup details.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails|null
     */
    protected $pickupDetails;

    /**
     * This array contains all the DHL Express special handling feature codes.
     *
     * @return string[]|null
     */
    public function getServiceHandlingFeatureCodes(): ?array
    {
        return $this->serviceHandlingFeatureCodes;
    }

    /**
     * This array contains all the DHL Express special handling feature codes.
     *
     * @param string[]|null $serviceHandlingFeatureCodes
     */
    public function setServiceHandlingFeatureCodes(?array $serviceHandlingFeatureCodes): self
    {
        $this->serviceHandlingFeatureCodes = $serviceHandlingFeatureCodes;

        return $this;
    }

    /**
     * Here you can find calculated volumetric weight based on dimensions provided in the request.
     */
    public function getVolumetricWeight(): ?float
    {
        return $this->volumetricWeight;
    }

    /**
     * Here you can find calculated volumetric weight based on dimensions provided in the request.
     */
    public function setVolumetricWeight(?float $volumetricWeight): self
    {
        $this->volumetricWeight = $volumetricWeight;

        return $this;
    }

    /**
     * Here you can find billing code which was applied on your shipment.
     */
    public function getBillingCode(): ?string
    {
        return $this->billingCode;
    }

    /**
     * Here you can find billing code which was applied on your shipment.
     */
    public function setBillingCode(?string $billingCode): self
    {
        $this->billingCode = $billingCode;

        return $this;
    }

    /**
     * Here you can find the DHL Express shipment content code of your shipment.
     */
    public function getServiceContentCode(): ?string
    {
        return $this->serviceContentCode;
    }

    /**
     * Here you can find the DHL Express shipment content code of your shipment.
     */
    public function setServiceContentCode(?string $serviceContentCode): self
    {
        $this->serviceContentCode = $serviceContentCode;

        return $this;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function getCustomerDetails(): ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails
    {
        return $this->customerDetails;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function setCustomerDetails(?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails $customerDetails): self
    {
        $this->customerDetails = $customerDetails;

        return $this;
    }

    public function getOriginServiceArea(): ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea
    {
        return $this->originServiceArea;
    }

    public function setOriginServiceArea(?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea $originServiceArea): self
    {
        $this->originServiceArea = $originServiceArea;

        return $this;
    }

    public function getDestinationServiceArea(): ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea
    {
        return $this->destinationServiceArea;
    }

    public function setDestinationServiceArea(?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea $destinationServiceArea): self
    {
        $this->destinationServiceArea = $destinationServiceArea;

        return $this;
    }

    /**
     * Here you can find DHL Routing Code which was applied on your shipment.
     */
    public function getDhlRoutingCode(): ?string
    {
        return $this->dhlRoutingCode;
    }

    /**
     * Here you can find DHL Routing Code which was applied on your shipment.
     */
    public function setDhlRoutingCode(?string $dhlRoutingCode): self
    {
        $this->dhlRoutingCode = $dhlRoutingCode;

        return $this;
    }

    /**
     * Here you can find DHL Routing Data ID which was applied on your shipment.
     */
    public function getDhlRoutingDataId(): ?string
    {
        return $this->dhlRoutingDataId;
    }

    /**
     * Here you can find DHL Routing Data ID which was applied on your shipment.
     */
    public function setDhlRoutingDataId(?string $dhlRoutingDataId): self
    {
        $this->dhlRoutingDataId = $dhlRoutingDataId;

        return $this;
    }

    /**
     * Here you can find Delivery Date Code which was applied on your shipment.
     */
    public function getDeliveryDateCode(): ?string
    {
        return $this->deliveryDateCode;
    }

    /**
     * Here you can find Delivery Date Code which was applied on your shipment.
     */
    public function setDeliveryDateCode(?string $deliveryDateCode): self
    {
        $this->deliveryDateCode = $deliveryDateCode;

        return $this;
    }

    /**
     * Here you can find Delivery Time Code which was applied on your shipment.
     */
    public function getDeliveryTimeCode(): ?string
    {
        return $this->deliveryTimeCode;
    }

    /**
     * Here you can find Delivery Time Code which was applied on your shipment.
     */
    public function setDeliveryTimeCode(?string $deliveryTimeCode): self
    {
        $this->deliveryTimeCode = $deliveryTimeCode;

        return $this;
    }

    /**
     * Here you can find the product short name of your shipment.
     */
    public function getProductShortName(): ?string
    {
        return $this->productShortName;
    }

    /**
     * Here you can find the product short name of your shipment.
     */
    public function setProductShortName(?string $productShortName): self
    {
        $this->productShortName = $productShortName;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem[]|null
     */
    public function getValueAddedServices(): ?array
    {
        return $this->valueAddedServices;
    }

    /**
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem[]|null $valueAddedServices
     */
    public function setValueAddedServices(?array $valueAddedServices): self
    {
        $this->valueAddedServices = $valueAddedServices;

        return $this;
    }

    /**
     * Here you can find pickup details.
     */
    public function getPickupDetails(): ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails
    {
        return $this->pickupDetails;
    }

    /**
     * Here you can find pickup details.
     */
    public function setPickupDetails(?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails $pickupDetails): self
    {
        $this->pickupDetails = $pickupDetails;

        return $this;
    }
}
