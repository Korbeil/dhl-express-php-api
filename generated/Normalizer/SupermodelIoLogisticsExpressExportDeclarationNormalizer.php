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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclaration' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclaration' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclaration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lineItems', $data) && null !== $data['lineItems']) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem', 'json', $context);
            }
            $object->setLineItems($values);
        } elseif (\array_key_exists('lineItems', $data) && null === $data['lineItems']) {
            $object->setLineItems(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationInvoice', 'json', $context));
        } elseif (\array_key_exists('invoice', $data) && null === $data['invoice']) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('remarks', $data) && null !== $data['remarks']) {
            $values_1 = [];
            foreach ($data['remarks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationRemarksItem', 'json', $context);
            }
            $object->setRemarks($values_1);
        } elseif (\array_key_exists('remarks', $data) && null === $data['remarks']) {
            $object->setRemarks(null);
        }
        if (\array_key_exists('additionalCharges', $data) && null !== $data['additionalCharges']) {
            $values_2 = [];
            foreach ($data['additionalCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem', 'json', $context);
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
            $object->setExporter($this->denormalizer->denormalize($data['exporter'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationExporter', 'json', $context));
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
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem', 'json', $context);
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getLineItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['lineItems'] = $values;
        $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
            $values_1 = [];
            foreach ($object->getRemarks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['remarks'] = $values_1;
        }
        if ($object->isInitialized('additionalCharges') && null !== $object->getAdditionalCharges()) {
            $values_2 = [];
            foreach ($object->getAdditionalCharges() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['additionalCharges'] = $values_2;
        }
        if ($object->isInitialized('placeOfIncoterm') && null !== $object->getPlaceOfIncoterm()) {
            $data['placeOfIncoterm'] = $object->getPlaceOfIncoterm();
        }
        if ($object->isInitialized('recipientReference') && null !== $object->getRecipientReference()) {
            $data['recipientReference'] = $object->getRecipientReference();
        }
        if ($object->isInitialized('exporter') && null !== $object->getExporter()) {
            $data['exporter'] = $this->normalizer->normalize($object->getExporter(), 'json', $context);
        }
        if ($object->isInitialized('exportReasonType') && null !== $object->getExportReasonType()) {
            $data['exportReasonType'] = $object->getExportReasonType();
        }
        if ($object->isInitialized('shipmentType') && null !== $object->getShipmentType()) {
            $data['shipmentType'] = $object->getShipmentType();
        }
        if ($object->isInitialized('customsDocuments') && null !== $object->getCustomsDocuments()) {
            $values_3 = [];
            foreach ($object->getCustomsDocuments() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['customsDocuments'] = $values_3;
        }
        $data['incoterm'] = $object->getIncoterm();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclaration' => false];
    }
}
