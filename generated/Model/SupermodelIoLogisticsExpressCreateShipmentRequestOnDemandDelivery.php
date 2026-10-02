<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery
{
    /**
     * Please choose from one of the delivery options.
     */
    public ?string $deliveryOption;
    /**
     * If delivery option is signatureDelivery please specify location where to leave the shipment.
     */
    public ?string $location;
    /**
     * Please enter additional information that might be useful for the DHL Express courier.
     */
    public ?string $specialInstructions;
    /**
     * Please provide entry code to gain access to an apartment complex or gate.
     */
    public ?string $gateCode;
    /**
     * In ase your deliveryOption is 'neighbour' please specify where to leave the package.
     */
    public ?string $whereToLeave;
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's name.
     */
    public ?string $neighbourName;
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's house number.
     */
    public ?string $neighbourHouseNumber;
    /**
     * In case your delivery option is 'signatureRelease' please provide name of the person who is authorized to sign and receive the package.
     */
    public ?string $authorizerName;
    /**
     * In case your delivery option is 'servicepoint' please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs).
     */
    public ?string $servicePointId;
    /**
     * for future use.
     */
    public ?string $requestedDeliveryDate;
}
