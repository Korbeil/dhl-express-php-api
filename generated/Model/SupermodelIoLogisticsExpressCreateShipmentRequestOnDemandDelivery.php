<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery
{
    /**
     * Please choose from one of the delivery options.
     *
     * @var string|null
     */
    protected $deliveryOption;
    /**
     * If delivery option is signatureDelivery please specify location where to leave the shipment.
     *
     * @var string|null
     */
    protected $location;
    /**
     * Please enter additional information that might be useful for the DHL Express courier.
     *
     * @var string|null
     */
    protected $specialInstructions;
    /**
     * Please provide entry code to gain access to an apartment complex or gate.
     *
     * @var string|null
     */
    protected $gateCode;
    /**
     * In ase your deliveryOption is 'neighbour' please specify where to leave the package.
     *
     * @var string|null
     */
    protected $whereToLeave;
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's name.
     *
     * @var string|null
     */
    protected $neighbourName;
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's house number.
     *
     * @var string|null
     */
    protected $neighbourHouseNumber;
    /**
     * In case your delivery option is 'signatureRelease' please provide name of the person who is authorized to sign and receive the package.
     *
     * @var string|null
     */
    protected $authorizerName;
    /**
     * In case your delivery option is 'servicepoint' please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs).
     *
     * @var string|null
     */
    protected $servicePointId;
    /**
     * for future use.
     *
     * @var string|null
     */
    protected $requestedDeliveryDate;

    /**
     * Please choose from one of the delivery options.
     */
    public function getDeliveryOption(): ?string
    {
        return $this->deliveryOption;
    }

    /**
     * Please choose from one of the delivery options.
     */
    public function setDeliveryOption(?string $deliveryOption): self
    {
        $this->deliveryOption = $deliveryOption;

        return $this;
    }

    /**
     * If delivery option is signatureDelivery please specify location where to leave the shipment.
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * If delivery option is signatureDelivery please specify location where to leave the shipment.
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Please enter additional information that might be useful for the DHL Express courier.
     */
    public function getSpecialInstructions(): ?string
    {
        return $this->specialInstructions;
    }

    /**
     * Please enter additional information that might be useful for the DHL Express courier.
     */
    public function setSpecialInstructions(?string $specialInstructions): self
    {
        $this->specialInstructions = $specialInstructions;

        return $this;
    }

    /**
     * Please provide entry code to gain access to an apartment complex or gate.
     */
    public function getGateCode(): ?string
    {
        return $this->gateCode;
    }

    /**
     * Please provide entry code to gain access to an apartment complex or gate.
     */
    public function setGateCode(?string $gateCode): self
    {
        $this->gateCode = $gateCode;

        return $this;
    }

    /**
     * In ase your deliveryOption is 'neighbour' please specify where to leave the package.
     */
    public function getWhereToLeave(): ?string
    {
        return $this->whereToLeave;
    }

    /**
     * In ase your deliveryOption is 'neighbour' please specify where to leave the package.
     */
    public function setWhereToLeave(?string $whereToLeave): self
    {
        $this->whereToLeave = $whereToLeave;

        return $this;
    }

    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's name.
     */
    public function getNeighbourName(): ?string
    {
        return $this->neighbourName;
    }

    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's name.
     */
    public function setNeighbourName(?string $neighbourName): self
    {
        $this->neighbourName = $neighbourName;

        return $this;
    }

    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's house number.
     */
    public function getNeighbourHouseNumber(): ?string
    {
        return $this->neighbourHouseNumber;
    }

    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's house number.
     */
    public function setNeighbourHouseNumber(?string $neighbourHouseNumber): self
    {
        $this->neighbourHouseNumber = $neighbourHouseNumber;

        return $this;
    }

    /**
     * In case your delivery option is 'signatureRelease' please provide name of the person who is authorized to sign and receive the package.
     */
    public function getAuthorizerName(): ?string
    {
        return $this->authorizerName;
    }

    /**
     * In case your delivery option is 'signatureRelease' please provide name of the person who is authorized to sign and receive the package.
     */
    public function setAuthorizerName(?string $authorizerName): self
    {
        $this->authorizerName = $authorizerName;

        return $this;
    }

    /**
     * In case your delivery option is 'servicepoint' please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs).
     */
    public function getServicePointId(): ?string
    {
        return $this->servicePointId;
    }

    /**
     * In case your delivery option is 'servicepoint' please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs).
     */
    public function setServicePointId(?string $servicePointId): self
    {
        $this->servicePointId = $servicePointId;

        return $this;
    }

    /**
     * for future use.
     */
    public function getRequestedDeliveryDate(): ?string
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * for future use.
     */
    public function setRequestedDeliveryDate(?string $requestedDeliveryDate): self
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;

        return $this;
    }
}
