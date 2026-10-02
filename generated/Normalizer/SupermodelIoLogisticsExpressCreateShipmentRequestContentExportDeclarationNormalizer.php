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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration();
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
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class, 'json', $context);
            }
            $object->lineItems = $values;
        } elseif (\array_key_exists('lineItems', $data)) {
            $object->lineItems = null;
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->invoice = $this->denormalizer->denormalize($data['invoice'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class, 'json', $context);
        } elseif (\array_key_exists('invoice', $data)) {
            $object->invoice = null;
        }
        if (\array_key_exists('remarks', $data) && null !== $data['remarks']) {
            $values_1 = [];
            foreach ($data['remarks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class, 'json', $context);
            }
            $object->remarks = $values_1;
        } elseif (\array_key_exists('remarks', $data)) {
            $object->remarks = null;
        }
        if (\array_key_exists('additionalCharges', $data) && null !== $data['additionalCharges']) {
            $values_2 = [];
            foreach ($data['additionalCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class, 'json', $context);
            }
            $object->additionalCharges = $values_2;
        } elseif (\array_key_exists('additionalCharges', $data)) {
            $object->additionalCharges = null;
        }
        if (\array_key_exists('destinationPortName', $data) && null !== $data['destinationPortName']) {
            $object->destinationPortName = $data['destinationPortName'];
        } elseif (\array_key_exists('destinationPortName', $data)) {
            $object->destinationPortName = null;
        }
        if (\array_key_exists('placeOfIncoterm', $data) && null !== $data['placeOfIncoterm']) {
            $object->placeOfIncoterm = $data['placeOfIncoterm'];
        } elseif (\array_key_exists('placeOfIncoterm', $data)) {
            $object->placeOfIncoterm = null;
        }
        if (\array_key_exists('payerVATNumber', $data) && null !== $data['payerVATNumber']) {
            $object->payerVATNumber = $data['payerVATNumber'];
        } elseif (\array_key_exists('payerVATNumber', $data)) {
            $object->payerVATNumber = null;
        }
        if (\array_key_exists('recipientReference', $data) && null !== $data['recipientReference']) {
            $object->recipientReference = $data['recipientReference'];
        } elseif (\array_key_exists('recipientReference', $data)) {
            $object->recipientReference = null;
        }
        if (\array_key_exists('exporter', $data) && null !== $data['exporter']) {
            $object->exporter = $this->denormalizer->denormalize($data['exporter'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class, 'json', $context);
        } elseif (\array_key_exists('exporter', $data)) {
            $object->exporter = null;
        }
        if (\array_key_exists('packageMarks', $data) && null !== $data['packageMarks']) {
            $object->packageMarks = $data['packageMarks'];
        } elseif (\array_key_exists('packageMarks', $data)) {
            $object->packageMarks = null;
        }
        if (\array_key_exists('declarationNotes', $data) && null !== $data['declarationNotes']) {
            $values_3 = [];
            foreach ($data['declarationNotes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class, 'json', $context);
            }
            $object->declarationNotes = $values_3;
        } elseif (\array_key_exists('declarationNotes', $data)) {
            $object->declarationNotes = null;
        }
        if (\array_key_exists('exportReference', $data) && null !== $data['exportReference']) {
            $object->exportReference = $data['exportReference'];
        } elseif (\array_key_exists('exportReference', $data)) {
            $object->exportReference = null;
        }
        if (\array_key_exists('exportReason', $data) && null !== $data['exportReason']) {
            $object->exportReason = $data['exportReason'];
        } elseif (\array_key_exists('exportReason', $data)) {
            $object->exportReason = null;
        }
        if (\array_key_exists('exportReasonType', $data) && null !== $data['exportReasonType']) {
            $object->exportReasonType = $data['exportReasonType'];
        } elseif (\array_key_exists('exportReasonType', $data)) {
            $object->exportReasonType = null;
        }
        if (\array_key_exists('licenses', $data) && null !== $data['licenses']) {
            $values_4 = [];
            foreach ($data['licenses'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class, 'json', $context);
            }
            $object->licenses = $values_4;
        } elseif (\array_key_exists('licenses', $data)) {
            $object->licenses = null;
        }
        if (\array_key_exists('shipmentType', $data) && null !== $data['shipmentType']) {
            $object->shipmentType = $data['shipmentType'];
        } elseif (\array_key_exists('shipmentType', $data)) {
            $object->shipmentType = null;
        }
        if (\array_key_exists('customsDocuments', $data) && null !== $data['customsDocuments']) {
            $values_5 = [];
            foreach ($data['customsDocuments'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class, 'json', $context);
            }
            $object->customsDocuments = $values_5;
        } elseif (\array_key_exists('customsDocuments', $data)) {
            $object->customsDocuments = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->lineItems as $value) {
            $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        $dataArray['lineItems'] = $values;
        if (\array_key_exists('invoice', get_object_vars($data)) && null !== ($data->invoice ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->invoice, 'json', $context);
            $dataArray['invoice'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('remarks', get_object_vars($data)) && null !== ($data->remarks ?? null)) {
            $values_1 = [];
            foreach ($data->remarks as $value_1) {
                $normalized_2 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['remarks'] = $values_1;
        }
        if (\array_key_exists('additionalCharges', get_object_vars($data)) && null !== ($data->additionalCharges ?? null)) {
            $values_2 = [];
            foreach ($data->additionalCharges as $value_2) {
                $normalized_3 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['additionalCharges'] = $values_2;
        }
        if (\array_key_exists('destinationPortName', get_object_vars($data)) && null !== ($data->destinationPortName ?? null)) {
            $dataArray['destinationPortName'] = $data->destinationPortName;
        }
        if (\array_key_exists('placeOfIncoterm', get_object_vars($data)) && null !== ($data->placeOfIncoterm ?? null)) {
            $dataArray['placeOfIncoterm'] = $data->placeOfIncoterm;
        }
        if (\array_key_exists('payerVATNumber', get_object_vars($data)) && null !== ($data->payerVATNumber ?? null)) {
            $dataArray['payerVATNumber'] = $data->payerVATNumber;
        }
        if (\array_key_exists('recipientReference', get_object_vars($data)) && null !== ($data->recipientReference ?? null)) {
            $dataArray['recipientReference'] = $data->recipientReference;
        }
        if (\array_key_exists('exporter', get_object_vars($data)) && null !== ($data->exporter ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->exporter, 'json', $context);
            $dataArray['exporter'] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (\array_key_exists('packageMarks', get_object_vars($data)) && null !== ($data->packageMarks ?? null)) {
            $dataArray['packageMarks'] = $data->packageMarks;
        }
        if (\array_key_exists('declarationNotes', get_object_vars($data)) && null !== ($data->declarationNotes ?? null)) {
            $values_3 = [];
            foreach ($data->declarationNotes as $value_3) {
                $normalized_5 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = is_iterable($normalized_5) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['declarationNotes'] = $values_3;
        }
        if (\array_key_exists('exportReference', get_object_vars($data)) && null !== ($data->exportReference ?? null)) {
            $dataArray['exportReference'] = $data->exportReference;
        }
        if (\array_key_exists('exportReason', get_object_vars($data)) && null !== ($data->exportReason ?? null)) {
            $dataArray['exportReason'] = $data->exportReason;
        }
        if (\array_key_exists('exportReasonType', get_object_vars($data)) && null !== ($data->exportReasonType ?? null)) {
            $dataArray['exportReasonType'] = $data->exportReasonType;
        }
        if (\array_key_exists('licenses', get_object_vars($data)) && null !== ($data->licenses ?? null)) {
            $values_4 = [];
            foreach ($data->licenses as $value_4) {
                $normalized_6 = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = is_iterable($normalized_6) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['licenses'] = $values_4;
        }
        if (\array_key_exists('shipmentType', get_object_vars($data)) && null !== ($data->shipmentType ?? null)) {
            $dataArray['shipmentType'] = $data->shipmentType;
        }
        if (\array_key_exists('customsDocuments', get_object_vars($data)) && null !== ($data->customsDocuments ?? null)) {
            $values_5 = [];
            foreach ($data->customsDocuments as $value_5) {
                $normalized_7 = null === $value_5 ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_5[] = is_iterable($normalized_7) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_7) : $normalized_7;
            }
            $dataArray['customsDocuments'] = $values_5;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => false];
    }
}
