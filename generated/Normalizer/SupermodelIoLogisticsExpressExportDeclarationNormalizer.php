<?php

namespace Korbeil\DHLExpress\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressExportDeclarationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclaration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('lineItems', $data) && null !== $data['lineItems']) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class, 'json', $context);
            }
            $object->setLineItems($values);
        } elseif (\array_key_exists('lineItems', $data) && null === $data['lineItems']) {
            $object->setLineItems(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class, 'json', $context));
        } elseif (\array_key_exists('invoice', $data) && null === $data['invoice']) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('remarks', $data) && null !== $data['remarks']) {
            $values_1 = [];
            foreach ($data['remarks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem::class, 'json', $context);
            }
            $object->setRemarks($values_1);
        } elseif (\array_key_exists('remarks', $data) && null === $data['remarks']) {
            $object->setRemarks(null);
        }
        if (\array_key_exists('additionalCharges', $data) && null !== $data['additionalCharges']) {
            $values_2 = [];
            foreach ($data['additionalCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem::class, 'json', $context);
            }
            $object->setAdditionalCharges($values_2);
        } elseif (\array_key_exists('additionalCharges', $data) && null === $data['additionalCharges']) {
            $object->setAdditionalCharges(null);
        }
        if (\array_key_exists('placeOfIncoterm', $data) && null !== $data['placeOfIncoterm']) {
            $object->setPlaceOfIncoterm($data['placeOfIncoterm']);
        } elseif (\array_key_exists('placeOfIncoterm', $data) && null === $data['placeOfIncoterm']) {
            $object->setPlaceOfIncoterm(null);
        }
        if (\array_key_exists('recipientReference', $data) && null !== $data['recipientReference']) {
            $object->setRecipientReference($data['recipientReference']);
        } elseif (\array_key_exists('recipientReference', $data) && null === $data['recipientReference']) {
            $object->setRecipientReference(null);
        }
        if (\array_key_exists('exporter', $data) && null !== $data['exporter']) {
            $object->setExporter($this->denormalizer->denormalize($data['exporter'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class, 'json', $context));
        } elseif (\array_key_exists('exporter', $data) && null === $data['exporter']) {
            $object->setExporter(null);
        }
        if (\array_key_exists('exportReasonType', $data) && null !== $data['exportReasonType']) {
            $object->setExportReasonType($data['exportReasonType']);
        } elseif (\array_key_exists('exportReasonType', $data) && null === $data['exportReasonType']) {
            $object->setExportReasonType(null);
        }
        if (\array_key_exists('shipmentType', $data) && null !== $data['shipmentType']) {
            $object->setShipmentType($data['shipmentType']);
        } elseif (\array_key_exists('shipmentType', $data) && null === $data['shipmentType']) {
            $object->setShipmentType(null);
        }
        if (\array_key_exists('customsDocuments', $data) && null !== $data['customsDocuments']) {
            $values_3 = [];
            foreach ($data['customsDocuments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem::class, 'json', $context);
            }
            $object->setCustomsDocuments($values_3);
        } elseif (\array_key_exists('customsDocuments', $data) && null === $data['customsDocuments']) {
            $object->setCustomsDocuments(null);
        }
        if (\array_key_exists('incoterm', $data) && null !== $data['incoterm']) {
            $object->setIncoterm($data['incoterm']);
        } elseif (\array_key_exists('incoterm', $data) && null === $data['incoterm']) {
            $object->setIncoterm(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getLineItems() as $value) {
            $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['lineItems'] = $values;
        $dataArray['invoice'] = null === $data->getInvoice() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getInvoice(), 'json', $context));
        if ($data->isInitialized('remarks') && null !== $data->getRemarks()) {
            $values_1 = [];
            foreach ($data->getRemarks() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['remarks'] = $values_1;
        }
        if ($data->isInitialized('additionalCharges') && null !== $data->getAdditionalCharges()) {
            $values_2 = [];
            foreach ($data->getAdditionalCharges() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['additionalCharges'] = $values_2;
        }
        if ($data->isInitialized('placeOfIncoterm') && null !== $data->getPlaceOfIncoterm()) {
            $dataArray['placeOfIncoterm'] = $data->getPlaceOfIncoterm();
        }
        if ($data->isInitialized('recipientReference') && null !== $data->getRecipientReference()) {
            $dataArray['recipientReference'] = $data->getRecipientReference();
        }
        if ($data->isInitialized('exporter') && null !== $data->getExporter()) {
            $dataArray['exporter'] = null === $data->getExporter() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getExporter(), 'json', $context));
        }
        if ($data->isInitialized('exportReasonType') && null !== $data->getExportReasonType()) {
            $dataArray['exportReasonType'] = $data->getExportReasonType();
        }
        if ($data->isInitialized('shipmentType') && null !== $data->getShipmentType()) {
            $dataArray['shipmentType'] = $data->getShipmentType();
        }
        if ($data->isInitialized('customsDocuments') && null !== $data->getCustomsDocuments()) {
            $values_3 = [];
            foreach ($data->getCustomsDocuments() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['customsDocuments'] = $values_3;
        }
        $dataArray['incoterm'] = $data->getIncoterm();

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class => false];
    }
}
