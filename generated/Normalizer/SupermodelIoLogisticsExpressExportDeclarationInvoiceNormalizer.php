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

class SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->number = $data['number'];
        } elseif (\array_key_exists('number', $data)) {
            $object->number = null;
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->date = $data['date'];
        } elseif (\array_key_exists('date', $data)) {
            $object->date = null;
        }
        if (\array_key_exists('function', $data) && null !== $data['function']) {
            $object->function = $data['function'];
        } elseif (\array_key_exists('function', $data)) {
            $object->function = null;
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values = [];
            foreach ($data['customerReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class, 'json', $context);
            }
            $object->customerReferences = $values;
        } elseif (\array_key_exists('customerReferences', $data)) {
            $object->customerReferences = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['number'] = $data->number;
        $dataArray['date'] = $data->date;
        $dataArray['function'] = $data->function;
        if (\array_key_exists('customerReferences', get_object_vars($data)) && null !== ($data->customerReferences ?? null)) {
            $values = [];
            foreach ($data->customerReferences as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['customerReferences'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => false];
    }
}
