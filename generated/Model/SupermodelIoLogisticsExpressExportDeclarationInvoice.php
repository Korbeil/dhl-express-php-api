<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationInvoice
{
    /**
     * Please enter commercial invoice number.
     *
     * @var string|null
     */
    protected $number;
    /**
     * Please enter commercial invoice date.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers.
     *
     * @var string|null
     */
    protected $function;
    /**
     * Please provide the customer references at invoice level.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem[]|null
     */
    protected $customerReferences;

    /**
     * Please enter commercial invoice number.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Please enter commercial invoice number.
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Please enter commercial invoice date.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Please enter commercial invoice date.
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers.
     */
    public function getFunction(): ?string
    {
        return $this->function;
    }

    /**
     * Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers.
     */
    public function setFunction(?string $function): self
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Please provide the customer references at invoice level.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem[]|null
     */
    public function getCustomerReferences(): ?array
    {
        return $this->customerReferences;
    }

    /**
     * Please provide the customer references at invoice level.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem[]|null $customerReferences
     */
    public function setCustomerReferences(?array $customerReferences): self
    {
        $this->customerReferences = $customerReferences;

        return $this;
    }
}
