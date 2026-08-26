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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setPrinterDPI($data['printerDPI']);
        } elseif (\array_key_exists('printerDPI', $data) && null === $data['printerDPI']) {
            $object->setPrinterDPI(null);
        }
        if (\array_key_exists('customerBarcodes', $data) && null !== $data['customerBarcodes']) {
            $values = [];
            foreach ($data['customerBarcodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class, 'json', $context);
            }
            $object->setCustomerBarcodes($values);
        } elseif (\array_key_exists('customerBarcodes', $data) && null === $data['customerBarcodes']) {
            $object->setCustomerBarcodes(null);
        }
        if (\array_key_exists('customerLogos', $data) && null !== $data['customerLogos']) {
            $values_1 = [];
            foreach ($data['customerLogos'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class, 'json', $context);
            }
            $object->setCustomerLogos($values_1);
        } elseif (\array_key_exists('customerLogos', $data) && null === $data['customerLogos']) {
            $object->setCustomerLogos(null);
        }
        if (\array_key_exists('encodingFormat', $data) && null !== $data['encodingFormat']) {
            $object->setEncodingFormat($data['encodingFormat']);
        } elseif (\array_key_exists('encodingFormat', $data) && null === $data['encodingFormat']) {
            $object->setEncodingFormat(null);
        }
        if (\array_key_exists('imageOptions', $data) && null !== $data['imageOptions']) {
            $values_2 = [];
            foreach ($data['imageOptions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class, 'json', $context);
            }
            $object->setImageOptions($values_2);
        } elseif (\array_key_exists('imageOptions', $data) && null === $data['imageOptions']) {
            $object->setImageOptions(null);
        }
        if (\array_key_exists('splitTransportAndWaybillDocLabels', $data) && null !== $data['splitTransportAndWaybillDocLabels']) {
            $object->setSplitTransportAndWaybillDocLabels($data['splitTransportAndWaybillDocLabels']);
        } elseif (\array_key_exists('splitTransportAndWaybillDocLabels', $data) && null === $data['splitTransportAndWaybillDocLabels']) {
            $object->setSplitTransportAndWaybillDocLabels(null);
        }
        if (\array_key_exists('allDocumentsInOneImage', $data) && null !== $data['allDocumentsInOneImage']) {
            $object->setAllDocumentsInOneImage($data['allDocumentsInOneImage']);
        } elseif (\array_key_exists('allDocumentsInOneImage', $data) && null === $data['allDocumentsInOneImage']) {
            $object->setAllDocumentsInOneImage(null);
        }
        if (\array_key_exists('splitDocumentsByPages', $data) && null !== $data['splitDocumentsByPages']) {
            $object->setSplitDocumentsByPages($data['splitDocumentsByPages']);
        } elseif (\array_key_exists('splitDocumentsByPages', $data) && null === $data['splitDocumentsByPages']) {
            $object->setSplitDocumentsByPages(null);
        }
        if (\array_key_exists('splitInvoiceAndReceipt', $data) && null !== $data['splitInvoiceAndReceipt']) {
            $object->setSplitInvoiceAndReceipt($data['splitInvoiceAndReceipt']);
        } elseif (\array_key_exists('splitInvoiceAndReceipt', $data) && null === $data['splitInvoiceAndReceipt']) {
            $object->setSplitInvoiceAndReceipt(null);
        }
        if (\array_key_exists('receiptAndLabelsInOneImage', $data) && null !== $data['receiptAndLabelsInOneImage']) {
            $object->setReceiptAndLabelsInOneImage($data['receiptAndLabelsInOneImage']);
        } elseif (\array_key_exists('receiptAndLabelsInOneImage', $data) && null === $data['receiptAndLabelsInOneImage']) {
            $object->setReceiptAndLabelsInOneImage(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('printerDPI') && null !== $data->getPrinterDPI()) {
            $dataArray['printerDPI'] = $data->getPrinterDPI();
        }
        if ($data->isInitialized('customerBarcodes') && null !== $data->getCustomerBarcodes()) {
            $values = [];
            foreach ($data->getCustomerBarcodes() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['customerBarcodes'] = $values;
        }
        if ($data->isInitialized('customerLogos') && null !== $data->getCustomerLogos()) {
            $values_1 = [];
            foreach ($data->getCustomerLogos() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['customerLogos'] = $values_1;
        }
        if ($data->isInitialized('encodingFormat') && null !== $data->getEncodingFormat()) {
            $dataArray['encodingFormat'] = $data->getEncodingFormat();
        }
        if ($data->isInitialized('imageOptions') && null !== $data->getImageOptions()) {
            $values_2 = [];
            foreach ($data->getImageOptions() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['imageOptions'] = $values_2;
        }
        if ($data->isInitialized('splitTransportAndWaybillDocLabels') && null !== $data->getSplitTransportAndWaybillDocLabels()) {
            $dataArray['splitTransportAndWaybillDocLabels'] = $data->getSplitTransportAndWaybillDocLabels();
        }
        if ($data->isInitialized('allDocumentsInOneImage') && null !== $data->getAllDocumentsInOneImage()) {
            $dataArray['allDocumentsInOneImage'] = $data->getAllDocumentsInOneImage();
        }
        if ($data->isInitialized('splitDocumentsByPages') && null !== $data->getSplitDocumentsByPages()) {
            $dataArray['splitDocumentsByPages'] = $data->getSplitDocumentsByPages();
        }
        if ($data->isInitialized('splitInvoiceAndReceipt') && null !== $data->getSplitInvoiceAndReceipt()) {
            $dataArray['splitInvoiceAndReceipt'] = $data->getSplitInvoiceAndReceipt();
        }
        if ($data->isInitialized('receiptAndLabelsInOneImage') && null !== $data->getReceiptAndLabelsInOneImage()) {
            $dataArray['receiptAndLabelsInOneImage'] = $data->getReceiptAndLabelsInOneImage();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => false];
    }
}
