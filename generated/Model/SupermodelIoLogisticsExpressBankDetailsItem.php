<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressBankDetailsItem
{
    /**
     * To be mapped in commercial Invoice - Russia Bank Name field.
     *
     * @var string|null
     */
    protected $name;
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     *
     * @var string|null
     */
    protected $settlementLocalCurrency;
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     *
     * @var string|null
     */
    protected $settlementForeignCurrency;

    /**
     * To be mapped in commercial Invoice - Russia Bank Name field.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * To be mapped in commercial Invoice - Russia Bank Name field.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     */
    public function getSettlementLocalCurrency(): ?string
    {
        return $this->settlementLocalCurrency;
    }

    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     */
    public function setSettlementLocalCurrency(?string $settlementLocalCurrency): self
    {
        $this->settlementLocalCurrency = $settlementLocalCurrency;

        return $this;
    }

    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     */
    public function getSettlementForeignCurrency(): ?string
    {
        return $this->settlementForeignCurrency;
    }

    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field.
     */
    public function setSettlementForeignCurrency(?string $settlementForeignCurrency): self
    {
        $this->settlementForeignCurrency = $settlementForeignCurrency;

        return $this;
    }
}
