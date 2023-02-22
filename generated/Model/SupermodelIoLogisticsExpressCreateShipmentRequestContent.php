<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContent
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Here you can define properties per package.
     *
     * @var SupermodelIoLogisticsExpressPackage[]|null
     */
    protected $packages;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).Note:If the shipment is dutiable, exportDeclaration element must be provided.
     *
     * @var bool|null
     */
    protected $isCustomsDeclarable;
    /**
     * For customs purposes please advise on declared value of the shipment.
     *
     * @var float|null
     */
    protected $declaredValue;
    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     *
     * @var string|null
     */
    protected $declaredValueCurrency;
    /**
     * Here you can find all details related to export declaration.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration|null
     */
    protected $exportDeclaration;
    /**
     * Please enter description of your shipment.
     *
     * @var string|null
     */
    protected $description;
    /**
     * This is used for the US AES4, FTR and ITN numbers to be printed on the Transport Label.
     *
     * @var string|null
     */
    protected $uSFilingTypeValue;
    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>          EXW ExWorks<BR>          FCA Free Carrier<BR>          CPT Carriage Paid To<BR>          CIP Carriage and Insurance Paid To<BR>          DPU Delivered at Place Unloaded<BR>          DAP Delivered at Place<BR>          DDP Delivered Duty Paid<BR>          FAS Free Alongside Ship<BR>          FOB Free on Board<BR>          CFR Cost and Freight<BR>          CIF Cost, Insurance and Freight<BR>          DAF Delivered at Frontier<BR>          DAT Delivered at Terminal<BR>          DDU Delivered Duty Unpaid<BR>          DEQ Delivery ex Quay<BR>          DES Delivered ex Ship.
     *
     * @var string|null
     */
    protected $incoterm;
    /**
     * Please enter Unit of measurement - metric,imperial.
     *
     * @var string|null
     */
    protected $unitOfMeasurement;

    /**
     * Here you can define properties per package.
     *
     * @return SupermodelIoLogisticsExpressPackage[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * Here you can define properties per package.
     *
     * @param SupermodelIoLogisticsExpressPackage[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;

        return $this;
    }

    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).Note:If the shipment is dutiable, exportDeclaration element must be provided.
     */
    public function getIsCustomsDeclarable(): ?bool
    {
        return $this->isCustomsDeclarable;
    }

    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).Note:If the shipment is dutiable, exportDeclaration element must be provided.
     */
    public function setIsCustomsDeclarable(?bool $isCustomsDeclarable): self
    {
        $this->initialized['isCustomsDeclarable'] = true;
        $this->isCustomsDeclarable = $isCustomsDeclarable;

        return $this;
    }

    /**
     * For customs purposes please advise on declared value of the shipment.
     */
    public function getDeclaredValue(): ?float
    {
        return $this->declaredValue;
    }

    /**
     * For customs purposes please advise on declared value of the shipment.
     */
    public function setDeclaredValue(?float $declaredValue): self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;

        return $this;
    }

    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     */
    public function getDeclaredValueCurrency(): ?string
    {
        return $this->declaredValueCurrency;
    }

    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     */
    public function setDeclaredValueCurrency(?string $declaredValueCurrency): self
    {
        $this->initialized['declaredValueCurrency'] = true;
        $this->declaredValueCurrency = $declaredValueCurrency;

        return $this;
    }

    /**
     * Here you can find all details related to export declaration.
     */
    public function getExportDeclaration(): ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration
    {
        return $this->exportDeclaration;
    }

    /**
     * Here you can find all details related to export declaration.
     */
    public function setExportDeclaration(?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration $exportDeclaration): self
    {
        $this->initialized['exportDeclaration'] = true;
        $this->exportDeclaration = $exportDeclaration;

        return $this;
    }

    /**
     * Please enter description of your shipment.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Please enter description of your shipment.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * This is used for the US AES4, FTR and ITN numbers to be printed on the Transport Label.
     */
    public function getUSFilingTypeValue(): ?string
    {
        return $this->uSFilingTypeValue;
    }

    /**
     * This is used for the US AES4, FTR and ITN numbers to be printed on the Transport Label.
     */
    public function setUSFilingTypeValue(?string $uSFilingTypeValue): self
    {
        $this->initialized['uSFilingTypeValue'] = true;
        $this->uSFilingTypeValue = $uSFilingTypeValue;

        return $this;
    }

    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>          EXW ExWorks<BR>          FCA Free Carrier<BR>          CPT Carriage Paid To<BR>          CIP Carriage and Insurance Paid To<BR>          DPU Delivered at Place Unloaded<BR>          DAP Delivered at Place<BR>          DDP Delivered Duty Paid<BR>          FAS Free Alongside Ship<BR>          FOB Free on Board<BR>          CFR Cost and Freight<BR>          CIF Cost, Insurance and Freight<BR>          DAF Delivered at Frontier<BR>          DAT Delivered at Terminal<BR>          DDU Delivered Duty Unpaid<BR>          DEQ Delivery ex Quay<BR>          DES Delivered ex Ship.
     */
    public function getIncoterm(): ?string
    {
        return $this->incoterm;
    }

    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>          EXW ExWorks<BR>          FCA Free Carrier<BR>          CPT Carriage Paid To<BR>          CIP Carriage and Insurance Paid To<BR>          DPU Delivered at Place Unloaded<BR>          DAP Delivered at Place<BR>          DDP Delivered Duty Paid<BR>          FAS Free Alongside Ship<BR>          FOB Free on Board<BR>          CFR Cost and Freight<BR>          CIF Cost, Insurance and Freight<BR>          DAF Delivered at Frontier<BR>          DAT Delivered at Terminal<BR>          DDU Delivered Duty Unpaid<BR>          DEQ Delivery ex Quay<BR>          DES Delivered ex Ship.
     */
    public function setIncoterm(?string $incoterm): self
    {
        $this->initialized['incoterm'] = true;
        $this->incoterm = $incoterm;

        return $this;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement): self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }
}
