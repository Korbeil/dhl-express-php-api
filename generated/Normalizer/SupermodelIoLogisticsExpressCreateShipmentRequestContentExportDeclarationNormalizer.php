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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lineItems', $data) && null !== $data['lineItems']) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem', 'json', $context);
            }
            $object->setLineItems($values);
        } elseif (\array_key_exists('lineItems', $data) && null === $data['lineItems']) {
            $object->setLineItems(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice', 'json', $context));
        } elseif (\array_key_exists('invoice', $data) && null === $data['invoice']) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('remarks', $data) && null !== $data['remarks']) {
            $values_1 = [];
            foreach ($data['remarks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem', 'json', $context);
            }
            $object->setRemarks($values_1);
        } elseif (\array_key_exists('remarks', $data) && null === $data['remarks']) {
            $object->setRemarks(null);
        }
        if (\array_key_exists('additionalCharges', $data) && null !== $data['additionalCharges']) {
            $values_2 = [];
            foreach ($data['additionalCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem', 'json', $context);
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
            $object->setExporter($this->denormalizer->denormalize($data['exporter'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter', 'json', $context));
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
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem', 'json', $context);
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
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem', 'json', $context);
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
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem', 'json', $context);
            }
            $object->setCustomsDocuments($values_5);
        } elseif (\array_key_exists('customsDocuments', $data) && null === $data['customsDocuments']) {
            $object->setCustomsDocuments(null);
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
        if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
            $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
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
        if ($object->isInitialized('destinationPortName') && null !== $object->getDestinationPortName()) {
            $data['destinationPortName'] = $object->getDestinationPortName();
        }
        if ($object->isInitialized('placeOfIncoterm') && null !== $object->getPlaceOfIncoterm()) {
            $data['placeOfIncoterm'] = $object->getPlaceOfIncoterm();
        }
        if ($object->isInitialized('payerVATNumber') && null !== $object->getPayerVATNumber()) {
            $data['payerVATNumber'] = $object->getPayerVATNumber();
        }
        if ($object->isInitialized('recipientReference') && null !== $object->getRecipientReference()) {
            $data['recipientReference'] = $object->getRecipientReference();
        }
        if ($object->isInitialized('exporter') && null !== $object->getExporter()) {
            $data['exporter'] = $this->normalizer->normalize($object->getExporter(), 'json', $context);
        }
        if ($object->isInitialized('packageMarks') && null !== $object->getPackageMarks()) {
            $data['packageMarks'] = $object->getPackageMarks();
        }
        if ($object->isInitialized('declarationNotes') && null !== $object->getDeclarationNotes()) {
            $values_3 = [];
            foreach ($object->getDeclarationNotes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['declarationNotes'] = $values_3;
        }
        if ($object->isInitialized('exportReference') && null !== $object->getExportReference()) {
            $data['exportReference'] = $object->getExportReference();
        }
        if ($object->isInitialized('exportReason') && null !== $object->getExportReason()) {
            $data['exportReason'] = $object->getExportReason();
        }
        if ($object->isInitialized('exportReasonType') && null !== $object->getExportReasonType()) {
            $data['exportReasonType'] = $object->getExportReasonType();
        }
        if ($object->isInitialized('licenses') && null !== $object->getLicenses()) {
            $values_4 = [];
            foreach ($object->getLicenses() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['licenses'] = $values_4;
        }
        if ($object->isInitialized('shipmentType') && null !== $object->getShipmentType()) {
            $data['shipmentType'] = $object->getShipmentType();
        }
        if ($object->isInitialized('customsDocuments') && null !== $object->getCustomsDocuments()) {
            $values_5 = [];
            foreach ($object->getCustomsDocuments() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['customsDocuments'] = $values_5;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration' => false];
    }
}
