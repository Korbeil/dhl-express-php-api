<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressEPODResponse
{
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
        $this->documents = $documents;

        return $this;
    }
}
