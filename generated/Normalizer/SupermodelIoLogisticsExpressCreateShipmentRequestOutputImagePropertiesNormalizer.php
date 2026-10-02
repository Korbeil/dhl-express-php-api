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

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('printerDPI', $data) && \is_int($data['printerDPI'])) {
            $data['printerDPI'] = (float) $data['printerDPI'];
        }
        if (\array_key_exists('splitTransportAndWaybillDocLabels', $data) && \is_int($data['splitTransportAndWaybillDocLabels'])) {
            $data['splitTransportAndWaybillDocLabels'] = (bool) $data['splitTransportAndWaybillDocLabels'];
        }
        if (\array_key_exists('allDocumentsInOneImage', $data) && \is_int($data['allDocumentsInOneImage'])) {
            $data['allDocumentsInOneImage'] = (bool) $data['allDocumentsInOneImage'];
        }
        if (\array_key_exists('splitDocumentsByPages', $data) && \is_int($data['splitDocumentsByPages'])) {
            $data['splitDocumentsByPages'] = (bool) $data['splitDocumentsByPages'];
        }
        if (\array_key_exists('splitInvoiceAndReceipt', $data) && \is_int($data['splitInvoiceAndReceipt'])) {
            $data['splitInvoiceAndReceipt'] = (bool) $data['splitInvoiceAndReceipt'];
        }
        if (\array_key_exists('receiptAndLabelsInOneImage', $data) && \is_int($data['receiptAndLabelsInOneImage'])) {
            $data['receiptAndLabelsInOneImage'] = (bool) $data['receiptAndLabelsInOneImage'];
        }
        if (\array_key_exists('printerDPI', $data) && null !== $data['printerDPI']) {
            $object->printerDPI = $data['printerDPI'];
        } elseif (\array_key_exists('printerDPI', $data)) {
            $object->printerDPI = null;
        }
        if (\array_key_exists('customerBarcodes', $data) && null !== $data['customerBarcodes']) {
            $values = [];
            foreach ($data['customerBarcodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class, 'json', $context);
            }
            $object->customerBarcodes = $values;
        } elseif (\array_key_exists('customerBarcodes', $data)) {
            $object->customerBarcodes = null;
        }
        if (\array_key_exists('customerLogos', $data) && null !== $data['customerLogos']) {
            $values_1 = [];
            foreach ($data['customerLogos'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class, 'json', $context);
            }
            $object->customerLogos = $values_1;
        } elseif (\array_key_exists('customerLogos', $data)) {
            $object->customerLogos = null;
        }
        if (\array_key_exists('encodingFormat', $data) && null !== $data['encodingFormat']) {
            $object->encodingFormat = $data['encodingFormat'];
        } elseif (\array_key_exists('encodingFormat', $data)) {
            $object->encodingFormat = null;
        }
        if (\array_key_exists('imageOptions', $data) && null !== $data['imageOptions']) {
            $values_2 = [];
            foreach ($data['imageOptions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class, 'json', $context);
            }
            $object->imageOptions = $values_2;
        } elseif (\array_key_exists('imageOptions', $data)) {
            $object->imageOptions = null;
        }
        if (\array_key_exists('splitTransportAndWaybillDocLabels', $data) && null !== $data['splitTransportAndWaybillDocLabels']) {
            $object->splitTransportAndWaybillDocLabels = $data['splitTransportAndWaybillDocLabels'];
        } elseif (\array_key_exists('splitTransportAndWaybillDocLabels', $data)) {
            $object->splitTransportAndWaybillDocLabels = null;
        }
        if (\array_key_exists('allDocumentsInOneImage', $data) && null !== $data['allDocumentsInOneImage']) {
            $object->allDocumentsInOneImage = $data['allDocumentsInOneImage'];
        } elseif (\array_key_exists('allDocumentsInOneImage', $data)) {
            $object->allDocumentsInOneImage = null;
        }
        if (\array_key_exists('splitDocumentsByPages', $data) && null !== $data['splitDocumentsByPages']) {
            $object->splitDocumentsByPages = $data['splitDocumentsByPages'];
        } elseif (\array_key_exists('splitDocumentsByPages', $data)) {
            $object->splitDocumentsByPages = null;
        }
        if (\array_key_exists('splitInvoiceAndReceipt', $data) && null !== $data['splitInvoiceAndReceipt']) {
            $object->splitInvoiceAndReceipt = $data['splitInvoiceAndReceipt'];
        } elseif (\array_key_exists('splitInvoiceAndReceipt', $data)) {
            $object->splitInvoiceAndReceipt = null;
        }
        if (\array_key_exists('receiptAndLabelsInOneImage', $data) && null !== $data['receiptAndLabelsInOneImage']) {
            $object->receiptAndLabelsInOneImage = $data['receiptAndLabelsInOneImage'];
        } elseif (\array_key_exists('receiptAndLabelsInOneImage', $data)) {
            $object->receiptAndLabelsInOneImage = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('printerDPI', get_object_vars($data)) && null !== ($data->printerDPI ?? null)) {
            $dataArray['printerDPI'] = $data->printerDPI;
        }
        if (\array_key_exists('customerBarcodes', get_object_vars($data)) && null !== ($data->customerBarcodes ?? null)) {
            $values = [];
            foreach ($data->customerBarcodes as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['customerBarcodes'] = $values;
        }
        if (\array_key_exists('customerLogos', get_object_vars($data)) && null !== ($data->customerLogos ?? null)) {
            $values_1 = [];
            foreach ($data->customerLogos as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['customerLogos'] = $values_1;
        }
        if (\array_key_exists('encodingFormat', get_object_vars($data)) && null !== ($data->encodingFormat ?? null)) {
            $dataArray['encodingFormat'] = $data->encodingFormat;
        }
        if (\array_key_exists('imageOptions', get_object_vars($data)) && null !== ($data->imageOptions ?? null)) {
            $values_2 = [];
            foreach ($data->imageOptions as $value_2) {
                $normalized_2 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['imageOptions'] = $values_2;
        }
        if (\array_key_exists('splitTransportAndWaybillDocLabels', get_object_vars($data)) && null !== ($data->splitTransportAndWaybillDocLabels ?? null)) {
            $dataArray['splitTransportAndWaybillDocLabels'] = $data->splitTransportAndWaybillDocLabels;
        }
        if (\array_key_exists('allDocumentsInOneImage', get_object_vars($data)) && null !== ($data->allDocumentsInOneImage ?? null)) {
            $dataArray['allDocumentsInOneImage'] = $data->allDocumentsInOneImage;
        }
        if (\array_key_exists('splitDocumentsByPages', get_object_vars($data)) && null !== ($data->splitDocumentsByPages ?? null)) {
            $dataArray['splitDocumentsByPages'] = $data->splitDocumentsByPages;
        }
        if (\array_key_exists('splitInvoiceAndReceipt', get_object_vars($data)) && null !== ($data->splitInvoiceAndReceipt ?? null)) {
            $dataArray['splitInvoiceAndReceipt'] = $data->splitInvoiceAndReceipt;
        }
        if (\array_key_exists('receiptAndLabelsInOneImage', get_object_vars($data)) && null !== ($data->receiptAndLabelsInOneImage ?? null)) {
            $dataArray['receiptAndLabelsInOneImage'] = $data->receiptAndLabelsInOneImage;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => false];
    }
}
