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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('totalNetWeight', $data) && \is_int($data['totalNetWeight'])) {
            $data['totalNetWeight'] = (float) $data['totalNetWeight'];
        }
        if (\array_key_exists('totalGrossWeight', $data) && \is_int($data['totalGrossWeight'])) {
            $data['totalGrossWeight'] = (float) $data['totalGrossWeight'];
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->number = $data['number'];
        } elseif (\array_key_exists('number', $data)) {
            $object->number = null;
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date']);
            if (false === $date) {
                throw new \Korbeil\DHLExpress\Api\Runtime\Normalizer\InvalidDateException($data['date'], 'Y-m-d');
            }
            $object->date = $date->setTime(0, 0, 0);
        } elseif (\array_key_exists('date', $data)) {
            $object->date = null;
        }
        if (\array_key_exists('signatureName', $data) && null !== $data['signatureName']) {
            $object->signatureName = $data['signatureName'];
        } elseif (\array_key_exists('signatureName', $data)) {
            $object->signatureName = null;
        }
        if (\array_key_exists('signatureTitle', $data) && null !== $data['signatureTitle']) {
            $object->signatureTitle = $data['signatureTitle'];
        } elseif (\array_key_exists('signatureTitle', $data)) {
            $object->signatureTitle = null;
        }
        if (\array_key_exists('signatureImage', $data) && null !== $data['signatureImage']) {
            $object->signatureImage = $data['signatureImage'];
        } elseif (\array_key_exists('signatureImage', $data)) {
            $object->signatureImage = null;
        }
        if (\array_key_exists('instructions', $data) && null !== $data['instructions']) {
            $values = [];
            foreach ($data['instructions'] as $value) {
                $values[] = $value;
            }
            $object->instructions = $values;
        } elseif (\array_key_exists('instructions', $data)) {
            $object->instructions = null;
        }
        if (\array_key_exists('customerDataTextEntries', $data) && null !== $data['customerDataTextEntries']) {
            $values_1 = [];
            foreach ($data['customerDataTextEntries'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->customerDataTextEntries = $values_1;
        } elseif (\array_key_exists('customerDataTextEntries', $data)) {
            $object->customerDataTextEntries = null;
        }
        if (\array_key_exists('totalNetWeight', $data) && null !== $data['totalNetWeight']) {
            $object->totalNetWeight = $data['totalNetWeight'];
        } elseif (\array_key_exists('totalNetWeight', $data)) {
            $object->totalNetWeight = null;
        }
        if (\array_key_exists('totalGrossWeight', $data) && null !== $data['totalGrossWeight']) {
            $object->totalGrossWeight = $data['totalGrossWeight'];
        } elseif (\array_key_exists('totalGrossWeight', $data)) {
            $object->totalGrossWeight = null;
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_2 = [];
            foreach ($data['customerReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class, 'json', $context);
            }
            $object->customerReferences = $values_2;
        } elseif (\array_key_exists('customerReferences', $data)) {
            $object->customerReferences = null;
        }
        if (\array_key_exists('termsOfPayment', $data) && null !== $data['termsOfPayment']) {
            $object->termsOfPayment = $data['termsOfPayment'];
        } elseif (\array_key_exists('termsOfPayment', $data)) {
            $object->termsOfPayment = null;
        }
        if (\array_key_exists('indicativeCustomsValues', $data) && null !== $data['indicativeCustomsValues']) {
            $object->indicativeCustomsValues = $this->denormalizer->denormalize($data['indicativeCustomsValues'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class, 'json', $context);
        } elseif (\array_key_exists('indicativeCustomsValues', $data)) {
            $object->indicativeCustomsValues = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['number'] = $data->number;
        $dataArray['date'] = $data->date->format('Y-m-d');
        if (\array_key_exists('signatureName', get_object_vars($data)) && null !== ($data->signatureName ?? null)) {
            $dataArray['signatureName'] = $data->signatureName;
        }
        if (\array_key_exists('signatureTitle', get_object_vars($data)) && null !== ($data->signatureTitle ?? null)) {
            $dataArray['signatureTitle'] = $data->signatureTitle;
        }
        if (\array_key_exists('signatureImage', get_object_vars($data)) && null !== ($data->signatureImage ?? null)) {
            $dataArray['signatureImage'] = $data->signatureImage;
        }
        if (\array_key_exists('instructions', get_object_vars($data)) && null !== ($data->instructions ?? null)) {
            $values = [];
            foreach ($data->instructions as $value) {
                $values[] = $value;
            }
            $dataArray['instructions'] = $values;
        }
        if (\array_key_exists('customerDataTextEntries', get_object_vars($data)) && null !== ($data->customerDataTextEntries ?? null)) {
            $values_1 = [];
            foreach ($data->customerDataTextEntries as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['customerDataTextEntries'] = $values_1;
        }
        if (\array_key_exists('totalNetWeight', get_object_vars($data)) && null !== ($data->totalNetWeight ?? null)) {
            $dataArray['totalNetWeight'] = $data->totalNetWeight;
        }
        if (\array_key_exists('totalGrossWeight', get_object_vars($data)) && null !== ($data->totalGrossWeight ?? null)) {
            $dataArray['totalGrossWeight'] = $data->totalGrossWeight;
        }
        if (\array_key_exists('customerReferences', get_object_vars($data)) && null !== ($data->customerReferences ?? null)) {
            $values_2 = [];
            foreach ($data->customerReferences as $value_2) {
                $normalized = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['customerReferences'] = $values_2;
        }
        if (\array_key_exists('termsOfPayment', get_object_vars($data)) && null !== ($data->termsOfPayment ?? null)) {
            $dataArray['termsOfPayment'] = $data->termsOfPayment;
        }
        if (\array_key_exists('indicativeCustomsValues', get_object_vars($data)) && null !== ($data->indicativeCustomsValues ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->indicativeCustomsValues, 'json', $context);
            $dataArray['indicativeCustomsValues'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => false];
    }
}
