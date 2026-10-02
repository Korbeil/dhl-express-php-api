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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceAreaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('facilityCode', $data) && null !== $data['facilityCode']) {
            $object->facilityCode = $data['facilityCode'];
        } elseif (\array_key_exists('facilityCode', $data)) {
            $object->facilityCode = null;
        }
        if (\array_key_exists('serviceAreaCode', $data) && null !== $data['serviceAreaCode']) {
            $object->serviceAreaCode = $data['serviceAreaCode'];
        } elseif (\array_key_exists('serviceAreaCode', $data)) {
            $object->serviceAreaCode = null;
        }
        if (\array_key_exists('outboundSortCode', $data) && null !== $data['outboundSortCode']) {
            $object->outboundSortCode = $data['outboundSortCode'];
        } elseif (\array_key_exists('outboundSortCode', $data)) {
            $object->outboundSortCode = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('facilityCode', get_object_vars($data)) && null !== ($data->facilityCode ?? null)) {
            $dataArray['facilityCode'] = $data->facilityCode;
        }
        if (\array_key_exists('serviceAreaCode', get_object_vars($data)) && null !== ($data->serviceAreaCode ?? null)) {
            $dataArray['serviceAreaCode'] = $data->serviceAreaCode;
        }
        if (\array_key_exists('outboundSortCode', get_object_vars($data)) && null !== ($data->outboundSortCode ?? null)) {
            $dataArray['outboundSortCode'] = $data->outboundSortCode;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class => false];
    }
}
