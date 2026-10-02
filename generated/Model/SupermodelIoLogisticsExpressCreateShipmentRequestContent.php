<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContent
{
    /**
     * Here you can define properties per package.
     *
     * @var list<Shipment\SupermodelIoLogisticsExpressPackage>|null
     */
    public ?array $packages;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).Note:If the shipment is dutiable, exportDeclaration element must be provided.
     */
    public ?bool $isCustomsDeclarable;
    /**
     * For customs purposes please advise on declared value of the shipment.
     */
    public ?float $declaredValue;
    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     */
    public ?string $declaredValueCurrency;
    /**
     * Here you can find all details related to export declaration.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration $exportDeclaration;
    /**
     * Please enter description of your shipment.
     */
    public ?string $description;
    /**
     * This is used for the US AES4, FTR and ITN numbers to be printed on the Transport Label.
     */
    public ?string $uSFilingTypeValue;
    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>          EXW ExWorks<BR>          FCA Free Carrier<BR>          CPT Carriage Paid To<BR>          CIP Carriage and Insurance Paid To<BR>          DPU Delivered at Place Unloaded<BR>          DAP Delivered at Place<BR>          DDP Delivered Duty Paid<BR>          FAS Free Alongside Ship<BR>          FOB Free on Board<BR>          CFR Cost and Freight<BR>          CIF Cost, Insurance and Freight<BR>          DAF Delivered at Frontier<BR>          DAT Delivered at Terminal<BR>          DDU Delivered Duty Unpaid<BR>          DEQ Delivery ex Quay<BR>          DES Delivered ex Ship.
     */
    public ?string $incoterm;
    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public ?string $unitOfMeasurement;
}
