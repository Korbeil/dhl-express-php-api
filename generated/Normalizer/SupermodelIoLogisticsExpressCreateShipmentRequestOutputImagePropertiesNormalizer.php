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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties();
        if (\array_key_exists('printerDPI', $data) && \is_int($data['printerDPI'])) {
            $data['printerDPI'] = (float) $data['printerDPI'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('printerDPI', $data) && null !== $data['printerDPI']) {
            $object->setPrinterDPI($data['printerDPI']);
        } elseif (\array_key_exists('printerDPI', $data) && null === $data['printerDPI']) {
            $object->setPrinterDPI(null);
        }
        if (\array_key_exists('customerBarcodes', $data) && null !== $data['customerBarcodes']) {
            $values = [];
            foreach ($data['customerBarcodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem', 'json', $context);
            }
            $object->setCustomerBarcodes($values);
        } elseif (\array_key_exists('customerBarcodes', $data) && null === $data['customerBarcodes']) {
            $object->setCustomerBarcodes(null);
        }
        if (\array_key_exists('customerLogos', $data) && null !== $data['customerLogos']) {
            $values_1 = [];
            foreach ($data['customerLogos'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem', 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem', 'json', $context);
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('printerDPI') && null !== $object->getPrinterDPI()) {
            $data['printerDPI'] = $object->getPrinterDPI();
        }
        if ($object->isInitialized('customerBarcodes') && null !== $object->getCustomerBarcodes()) {
            $values = [];
            foreach ($object->getCustomerBarcodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['customerBarcodes'] = $values;
        }
        if ($object->isInitialized('customerLogos') && null !== $object->getCustomerLogos()) {
            $values_1 = [];
            foreach ($object->getCustomerLogos() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['customerLogos'] = $values_1;
        }
        if ($object->isInitialized('encodingFormat') && null !== $object->getEncodingFormat()) {
            $data['encodingFormat'] = $object->getEncodingFormat();
        }
        if ($object->isInitialized('imageOptions') && null !== $object->getImageOptions()) {
            $values_2 = [];
            foreach ($object->getImageOptions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['imageOptions'] = $values_2;
        }
        if ($object->isInitialized('splitTransportAndWaybillDocLabels') && null !== $object->getSplitTransportAndWaybillDocLabels()) {
            $data['splitTransportAndWaybillDocLabels'] = $object->getSplitTransportAndWaybillDocLabels();
        }
        if ($object->isInitialized('allDocumentsInOneImage') && null !== $object->getAllDocumentsInOneImage()) {
            $data['allDocumentsInOneImage'] = $object->getAllDocumentsInOneImage();
        }
        if ($object->isInitialized('splitDocumentsByPages') && null !== $object->getSplitDocumentsByPages()) {
            $data['splitDocumentsByPages'] = $object->getSplitDocumentsByPages();
        }
        if ($object->isInitialized('splitInvoiceAndReceipt') && null !== $object->getSplitInvoiceAndReceipt()) {
            $data['splitInvoiceAndReceipt'] = $object->getSplitInvoiceAndReceipt();
        }
        if ($object->isInitialized('receiptAndLabelsInOneImage') && null !== $object->getReceiptAndLabelsInOneImage()) {
            $data['receiptAndLabelsInOneImage'] = $object->getReceiptAndLabelsInOneImage();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties' => false];
    }
}
