<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressEPODResponse
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
     * @var SupermodelIoLogisticsExpressEPODResponseDocumentsItem[]|null
     */
    protected $documents;

    /**
     * @return SupermodelIoLogisticsExpressEPODResponseDocumentsItem[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * @param SupermodelIoLogisticsExpressEPODResponseDocumentsItem[]|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;

        return $this;
    }
}
