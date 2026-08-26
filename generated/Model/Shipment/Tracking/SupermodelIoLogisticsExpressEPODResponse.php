<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment\Tracking;

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
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem>|null
     */
    protected $documents;

    /**
     * @return list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem>|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * @param list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem>|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;

        return $this;
    }
}
