<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressDocumentImageResponse
{
    /**
     * Here you can find all document images from search query.
     *
     * @var SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem[]|null
     */
    protected $documents;

    /**
     * Here you can find all document images from search query.
     *
     * @return SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Here you can find all document images from search query.
     *
     * @param SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem[]|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }
}
