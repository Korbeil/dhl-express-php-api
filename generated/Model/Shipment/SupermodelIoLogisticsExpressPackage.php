<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment;

class SupermodelIoLogisticsExpressPackage
{
    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     */
    public ?string $typeCode;
    /**
     * The weight of the package.
     */
    public ?float $weight;
    /**
     * Dimensions of the package.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageDimensions $dimensions;
    /**
     * Here you can declare your customer references for each package.
     *
     * @var list<SupermodelIoLogisticsExpressPackageReference>|null
     */
    public ?array $customerReferences;
    /**
     * Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @var list<SupermodelIoLogisticsExpressIdentifier>|null
     */
    public ?array $identifiers;
    /**
     * Please enter description of content for each package.
     */
    public ?string $description;
    /**
     * This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem>|null
     */
    public ?array $labelBarcodes;
    /**
     * This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem>|null
     */
    public ?array $labelText;
    /**
     * Please enter additional customer description.
     */
    public ?string $labelDescription;
}
