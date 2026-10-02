<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressBankDetailsItem
{
    /**
     * To be mapped in commercial Invoice - Russia Bank Name field.
     */
    public ?string $name;
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     */
    public ?string $settlementLocalCurrency;
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     */
    public ?string $settlementForeignCurrency;
}
