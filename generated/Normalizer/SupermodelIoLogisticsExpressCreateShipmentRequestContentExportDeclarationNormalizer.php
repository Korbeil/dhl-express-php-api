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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setLineItems($values);
        } elseif (\array_key_exists('lineItems', $data) && null === $data['lineItems']) {
            $object->setLineItems(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class, 'json', $context));
        } elseif (\array_key_exists('invoice', $data) && null === $data['invoice']) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('remarks', $data) && null !== $data['remarks']) {
            $values_1 = [];
            foreach ($data['remarks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class, 'json', $context);
            }
            $object->setRemarks($values_1);
        } elseif (\array_key_exists('remarks', $data) && null === $data['remarks']) {
            $object->setRemarks(null);
        }
        if (\array_key_exists('additionalCharges', $data) && null !== $data['additionalCharges']) {
            $values_2 = [];
            foreach ($data['additionalCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class, 'json', $context);
            }
            $object->setAdditionalCharges($values_2);
        } elseif (\array_key_exists('additionalCharges', $data) && null === $data['additionalCharges']) {
            $object->setAdditionalCharges(null);
        }
        if (\array_key_exists('destinationPortName', $data) && null !== $data['destinationPortName']) {
            $object->setDestinationPortName($data['destinationPortName']);
        } elseif (\array_key_exists('destinationPortName', $data) && null === $data['destinationPortName']) {
            $object->setDestinationPortName(null);
        }
        if (\array_key_exists('placeOfIncoterm', $data) && null !== $data['placeOfIncoterm']) {
            $object->setPlaceOfIncoterm($data['placeOfIncoterm']);
        } elseif (\array_key_exists('placeOfIncoterm', $data) && null === $data['placeOfIncoterm']) {
            $object->setPlaceOfIncoterm(null);
        }
        if (\array_key_exists('payerVATNumber', $data) && null !== $data['payerVATNumber']) {
            $object->setPayerVATNumber($data['payerVATNumber']);
        } elseif (\array_key_exists('payerVATNumber', $data) && null === $data['payerVATNumber']) {
            $object->setPayerVATNumber(null);
        }
        if (\array_key_exists('recipientReference', $data) && null !== $data['recipientReference']) {
            $object->setRecipientReference($data['recipientReference']);
        } elseif (\array_key_exists('recipientReference', $data) && null === $data['recipientReference']) {
            $object->setRecipientReference(null);
        }
        if (\array_key_exists('exporter', $data) && null !== $data['exporter']) {
            $object->setExporter($this->denormalizer->denormalize($data['exporter'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class, 'json', $context));
        } elseif (\array_key_exists('exporter', $data) && null === $data['exporter']) {
            $object->setExporter(null);
        }
        if (\array_key_exists('packageMarks', $data) && null !== $data['packageMarks']) {
            $object->setPackageMarks($data['packageMarks']);
        } elseif (\array_key_exists('packageMarks', $data) && null === $data['packageMarks']) {
            $object->setPackageMarks(null);
        }
        if (\array_key_exists('declarationNotes', $data) && null !== $data['declarationNotes']) {
            $values_3 = [];
            foreach ($data['declarationNotes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class, 'json', $context);
            }
            $object->setDeclarationNotes($values_3);
        } elseif (\array_key_exists('declarationNotes', $data) && null === $data['declarationNotes']) {
            $object->setDeclarationNotes(null);
        }
        if (\array_key_exists('exportReference', $data) && null !== $data['exportReference']) {
            $object->setExportReference($data['exportReference']);
        } elseif (\array_key_exists('exportReference', $data) && null === $data['exportReference']) {
            $object->setExportReference(null);
        }
        if (\array_key_exists('exportReason', $data) && null !== $data['exportReason']) {
            $object->setExportReason($data['exportReason']);
        } elseif (\array_key_exists('exportReason', $data) && null === $data['exportReason']) {
            $object->setExportReason(null);
        }
        if (\array_key_exists('exportReasonType', $data) && null !== $data['exportReasonType']) {
            $object->setExportReasonType($data['exportReasonType']);
        } elseif (\array_key_exists('exportReasonType', $data) && null === $data['exportReasonType']) {
            $object->setExportReasonType(null);
        }
        if (\array_key_exists('licenses', $data) && null !== $data['licenses']) {
            $values_4 = [];
            foreach ($data['licenses'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class, 'json', $context);
            }
            $object->setLicenses($values_4);
        } elseif (\array_key_exists('licenses', $data) && null === $data['licenses']) {
            $object->setLicenses(null);
        }
        if (\array_key_exists('shipmentType', $data) && null !== $data['shipmentType']) {
            $object->setShipmentType($data['shipmentType']);
        } elseif (\array_key_exists('shipmentType', $data) && null === $data['shipmentType']) {
            $object->setShipmentType(null);
        }
        if (\array_key_exists('customsDocuments', $data) && null !== $data['customsDocuments']) {
            $values_5 = [];
            foreach ($data['customsDocuments'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class, 'json', $context);
            }
            $object->setCustomsDocuments($values_5);
        } elseif (\array_key_exists('customsDocuments', $data) && null === $data['customsDocuments']) {
            $object->setCustomsDocuments(null);
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
        if ($data->isInitialized('invoice') && null !== $data->getInvoice()) {
            $dataArray['invoice'] = null === $data->getInvoice() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getInvoice(), 'json', $context));
        }
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
        if ($data->isInitialized('destinationPortName') && null !== $data->getDestinationPortName()) {
            $dataArray['destinationPortName'] = $data->getDestinationPortName();
        }
        if ($data->isInitialized('placeOfIncoterm') && null !== $data->getPlaceOfIncoterm()) {
            $dataArray['placeOfIncoterm'] = $data->getPlaceOfIncoterm();
        }
        if ($data->isInitialized('payerVATNumber') && null !== $data->getPayerVATNumber()) {
            $dataArray['payerVATNumber'] = $data->getPayerVATNumber();
        }
        if ($data->isInitialized('recipientReference') && null !== $data->getRecipientReference()) {
            $dataArray['recipientReference'] = $data->getRecipientReference();
        }
        if ($data->isInitialized('exporter') && null !== $data->getExporter()) {
            $dataArray['exporter'] = null === $data->getExporter() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getExporter(), 'json', $context));
        }
        if ($data->isInitialized('packageMarks') && null !== $data->getPackageMarks()) {
            $dataArray['packageMarks'] = $data->getPackageMarks();
        }
        if ($data->isInitialized('declarationNotes') && null !== $data->getDeclarationNotes()) {
            $values_3 = [];
            foreach ($data->getDeclarationNotes() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['declarationNotes'] = $values_3;
        }
        if ($data->isInitialized('exportReference') && null !== $data->getExportReference()) {
            $dataArray['exportReference'] = $data->getExportReference();
        }
        if ($data->isInitialized('exportReason') && null !== $data->getExportReason()) {
            $dataArray['exportReason'] = $data->getExportReason();
        }
        if ($data->isInitialized('exportReasonType') && null !== $data->getExportReasonType()) {
            $dataArray['exportReasonType'] = $data->getExportReasonType();
        }
        if ($data->isInitialized('licenses') && null !== $data->getLicenses()) {
            $values_4 = [];
            foreach ($data->getLicenses() as $value_4) {
                $values_4[] = null === $value_4 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['licenses'] = $values_4;
        }
        if ($data->isInitialized('shipmentType') && null !== $data->getShipmentType()) {
            $dataArray['shipmentType'] = $data->getShipmentType();
        }
        if ($data->isInitialized('customsDocuments') && null !== $data->getCustomsDocuments()) {
            $values_5 = [];
            foreach ($data->getCustomsDocuments() as $value_5) {
                $values_5[] = null === $value_5 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['customsDocuments'] = $values_5;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => false];
    }
}
