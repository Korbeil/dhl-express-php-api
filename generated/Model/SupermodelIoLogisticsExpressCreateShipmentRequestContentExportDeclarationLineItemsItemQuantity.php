<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity
{
    /**
     * Please enter number of pieces in the line item.
     *
     * @var int|null
     */
    protected $value;
    /**
     * Please provide correct unit of measurement<BR> <BR>                        Possible values;<BR>                        BOX Boxes<BR>                        2GM Centigram<BR>                        2M Centimeters<BR>                        2M3 Cubic Centimeters<BR>                        3M3 Cubic Feet<BR>                        M3 Cubic Meters<BR>                        DPR Dozen Pairs<BR>                        DOZ Dozen<BR>                        2NO Each<BR>                        PCS Pieces<BR>                        GM Grams<BR>                        GRS Gross<BR>                        KG Kilograms<BR>                        L Liters<BR>                        M Meters<BR>                        3GM Milligrams<BR>                        3L Milliliters<BR>                        X No Unit Required<BR>                        NO Number<BR>                        2KG Ounces<BR>                        PRS Pairs<BR>                        2L Gallons<BR>                        3KG Pounds<BR>                        CM2 Square Centimeters<BR>                        2M2 Square Feet<BR>                        3M2 Square Inches<BR>                        M2 Square Meters<BR>                        4M2 Square Yards<BR>                        3M Yards<BR>                        CM Centimeters<BR>                        CONE Cone<BR>                        CT Carat<BR>                        EA Each<BR>                        LBS Pounds<BR>                        RILL Rill<BR>                        ROLL Roll<BR>                        SET Set<BR>                        TU Time Unit<BR>                        YDS Yard.
     *
     * @var string|null
     */
    protected $unitOfMeasurement;

    /**
     * Please enter number of pieces in the line item.
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * Please enter number of pieces in the line item.
     */
    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Please provide correct unit of measurement<BR> <BR>                        Possible values;<BR>                        BOX Boxes<BR>                        2GM Centigram<BR>                        2M Centimeters<BR>                        2M3 Cubic Centimeters<BR>                        3M3 Cubic Feet<BR>                        M3 Cubic Meters<BR>                        DPR Dozen Pairs<BR>                        DOZ Dozen<BR>                        2NO Each<BR>                        PCS Pieces<BR>                        GM Grams<BR>                        GRS Gross<BR>                        KG Kilograms<BR>                        L Liters<BR>                        M Meters<BR>                        3GM Milligrams<BR>                        3L Milliliters<BR>                        X No Unit Required<BR>                        NO Number<BR>                        2KG Ounces<BR>                        PRS Pairs<BR>                        2L Gallons<BR>                        3KG Pounds<BR>                        CM2 Square Centimeters<BR>                        2M2 Square Feet<BR>                        3M2 Square Inches<BR>                        M2 Square Meters<BR>                        4M2 Square Yards<BR>                        3M Yards<BR>                        CM Centimeters<BR>                        CONE Cone<BR>                        CT Carat<BR>                        EA Each<BR>                        LBS Pounds<BR>                        RILL Rill<BR>                        ROLL Roll<BR>                        SET Set<BR>                        TU Time Unit<BR>                        YDS Yard.
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Please provide correct unit of measurement<BR> <BR>                        Possible values;<BR>                        BOX Boxes<BR>                        2GM Centigram<BR>                        2M Centimeters<BR>                        2M3 Cubic Centimeters<BR>                        3M3 Cubic Feet<BR>                        M3 Cubic Meters<BR>                        DPR Dozen Pairs<BR>                        DOZ Dozen<BR>                        2NO Each<BR>                        PCS Pieces<BR>                        GM Grams<BR>                        GRS Gross<BR>                        KG Kilograms<BR>                        L Liters<BR>                        M Meters<BR>                        3GM Milligrams<BR>                        3L Milliliters<BR>                        X No Unit Required<BR>                        NO Number<BR>                        2KG Ounces<BR>                        PRS Pairs<BR>                        2L Gallons<BR>                        3KG Pounds<BR>                        CM2 Square Centimeters<BR>                        2M2 Square Feet<BR>                        3M2 Square Inches<BR>                        M2 Square Meters<BR>                        4M2 Square Yards<BR>                        3M Yards<BR>                        CM Centimeters<BR>                        CONE Cone<BR>                        CT Carat<BR>                        EA Each<BR>                        LBS Pounds<BR>                        RILL Rill<BR>                        ROLL Roll<BR>                        SET Set<BR>                        TU Time Unit<BR>                        YDS Yard.
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement): self
    {
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }
}
