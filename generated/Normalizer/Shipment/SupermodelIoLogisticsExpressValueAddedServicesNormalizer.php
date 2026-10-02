<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Shipment;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressValueAddedServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressValueAddedServices::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressValueAddedServices::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressValueAddedServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (\array_key_exists('serviceCode', $data) && null !== $data['serviceCode']) {
            $object->serviceCode = $data['serviceCode'];
        } elseif (\array_key_exists('serviceCode', $data)) {
            $object->serviceCode = null;
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->value = $data['value'];
        } elseif (\array_key_exists('value', $data)) {
            $object->value = null;
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->currency = $data['currency'];
        } elseif (\array_key_exists('currency', $data)) {
            $object->currency = null;
        }
        if (\array_key_exists('method', $data) && null !== $data['method']) {
            $object->method = $data['method'];
        } elseif (\array_key_exists('method', $data)) {
            $object->method = null;
        }
        if (\array_key_exists('dangerousGoods', $data) && null !== $data['dangerousGoods']) {
            $values = [];
            foreach ($data['dangerousGoods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class, 'json', $context);
            }
            $object->dangerousGoods = $values;
        } elseif (\array_key_exists('dangerousGoods', $data)) {
            $object->dangerousGoods = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['serviceCode'] = $data->serviceCode;
        if (\array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $dataArray['value'] = $data->value;
        }
        if (\array_key_exists('currency', get_object_vars($data)) && null !== ($data->currency ?? null)) {
            $dataArray['currency'] = $data->currency;
        }
        if (\array_key_exists('method', get_object_vars($data)) && null !== ($data->method ?? null)) {
            $dataArray['method'] = $data->method;
        }
        if (\array_key_exists('dangerousGoods', get_object_vars($data)) && null !== ($data->dangerousGoods ?? null)) {
            $values = [];
            foreach ($data->dangerousGoods as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['dangerousGoods'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressValueAddedServices::class => false];
    }
}
