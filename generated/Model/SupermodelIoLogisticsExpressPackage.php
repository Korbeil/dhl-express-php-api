<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackage
{
    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * The weight of the package.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Dimensions of the package.
     *
     * @var SupermodelIoLogisticsExpressPackageDimensions|null
     */
    protected $dimensions;
    /**
     * Here you can declare your customer references for each package.
     *
     * @var SupermodelIoLogisticsExpressPackageReference[]|null
     */
    protected $customerReferences;
    /**
     * Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @var SupermodelIoLogisticsExpressIdentifier[]|null
     */
    protected $identifiers;
    /**
     * Please enter description of content for each package.
     *
     * @var string|null
     */
    protected $description;
    /**
     * This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @var SupermodelIoLogisticsExpressPackageLabelBarcodesItem[]|null
     */
    protected $labelBarcodes;
    /**
     * This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @var SupermodelIoLogisticsExpressPackageLabelTextItem[]|null
     */
    protected $labelText;
    /**
     * Please enter additional customer description.
     *
     * @var string|null
     */
    protected $labelDescription;

    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * The weight of the package.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * The weight of the package.
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Dimensions of the package.
     */
    public function getDimensions(): ?SupermodelIoLogisticsExpressPackageDimensions
    {
        return $this->dimensions;
    }

    /**
     * Dimensions of the package.
     */
    public function setDimensions(?SupermodelIoLogisticsExpressPackageDimensions $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * Here you can declare your customer references for each package.
     *
     * @return SupermodelIoLogisticsExpressPackageReference[]|null
     */
    public function getCustomerReferences(): ?array
    {
        return $this->customerReferences;
    }

    /**
     * Here you can declare your customer references for each package.
     *
     * @param SupermodelIoLogisticsExpressPackageReference[]|null $customerReferences
     */
    public function setCustomerReferences(?array $customerReferences): self
    {
        $this->customerReferences = $customerReferences;

        return $this;
    }

    /**
     * Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @return SupermodelIoLogisticsExpressIdentifier[]|null
     */
    public function getIdentifiers(): ?array
    {
        return $this->identifiers;
    }

    /**
     * Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @param SupermodelIoLogisticsExpressIdentifier[]|null $identifiers
     */
    public function setIdentifiers(?array $identifiers): self
    {
        $this->identifiers = $identifiers;

        return $this;
    }

    /**
     * Please enter description of content for each package.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Please enter description of content for each package.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @return SupermodelIoLogisticsExpressPackageLabelBarcodesItem[]|null
     */
    public function getLabelBarcodes(): ?array
    {
        return $this->labelBarcodes;
    }

    /**
     * This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @param SupermodelIoLogisticsExpressPackageLabelBarcodesItem[]|null $labelBarcodes
     */
    public function setLabelBarcodes(?array $labelBarcodes): self
    {
        $this->labelBarcodes = $labelBarcodes;

        return $this;
    }

    /**
     * This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @return SupermodelIoLogisticsExpressPackageLabelTextItem[]|null
     */
    public function getLabelText(): ?array
    {
        return $this->labelText;
    }

    /**
     * This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label.
     *
     * @param SupermodelIoLogisticsExpressPackageLabelTextItem[]|null $labelText
     */
    public function setLabelText(?array $labelText): self
    {
        $this->labelText = $labelText;

        return $this;
    }

    /**
     * Please enter additional customer description.
     */
    public function getLabelDescription(): ?string
    {
        return $this->labelDescription;
    }

    /**
     * Please enter additional customer description.
     */
    public function setLabelDescription(?string $labelDescription): self
    {
        $this->labelDescription = $labelDescription;

        return $this;
    }
}
