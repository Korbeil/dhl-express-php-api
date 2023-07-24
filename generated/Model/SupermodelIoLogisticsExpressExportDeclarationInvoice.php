<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationInvoice
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
     * Note: customerReference/0/value with typeCode 'CU' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
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
        $this->initialized['number'] = true;
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
        $this->initialized['date'] = true;
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
        $this->initialized['function'] = true;
        $this->function = $function;

        return $this;
    }

    /**
     * Please provide the customer references at invoice level.
     * Note: customerReference/0/value with typeCode 'CU' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem[]|null
     */
    public function getCustomerReferences(): ?array
    {
        return $this->customerReferences;
    }

    /**
     * Please provide the customer references at invoice level.
     * Note: customerReference/0/value with typeCode 'CU' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem[]|null $customerReferences
     */
    public function setCustomerReferences(?array $customerReferences): self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;

        return $this;
    }
}
