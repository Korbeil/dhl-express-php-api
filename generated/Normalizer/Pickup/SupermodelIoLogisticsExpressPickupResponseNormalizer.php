<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Pickup;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressPickupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dispatchConfirmationNumbers', $data) && null !== $data['dispatchConfirmationNumbers']) {
            $values = [];
            foreach ($data['dispatchConfirmationNumbers'] as $value) {
                $values[] = $value;
            }
            $object->dispatchConfirmationNumbers = $values;
        } elseif (\array_key_exists('dispatchConfirmationNumbers', $data)) {
            $object->dispatchConfirmationNumbers = null;
        }
        if (\array_key_exists('readyByTime', $data) && null !== $data['readyByTime']) {
            $object->readyByTime = $data['readyByTime'];
        } elseif (\array_key_exists('readyByTime', $data)) {
            $object->readyByTime = null;
        }
        if (\array_key_exists('nextPickupDate', $data) && null !== $data['nextPickupDate']) {
            $object->nextPickupDate = $data['nextPickupDate'];
        } elseif (\array_key_exists('nextPickupDate', $data)) {
            $object->nextPickupDate = null;
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values_1 = [];
            foreach ($data['warnings'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->warnings = $values_1;
        } elseif (\array_key_exists('warnings', $data)) {
            $object->warnings = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('dispatchConfirmationNumbers', get_object_vars($data)) && null !== ($data->dispatchConfirmationNumbers ?? null)) {
            $values = [];
            foreach ($data->dispatchConfirmationNumbers as $value) {
                $values[] = $value;
            }
            $dataArray['dispatchConfirmationNumbers'] = $values;
        }
        if (\array_key_exists('readyByTime', get_object_vars($data)) && null !== ($data->readyByTime ?? null)) {
            $dataArray['readyByTime'] = $data->readyByTime;
        }
        if (\array_key_exists('nextPickupDate', get_object_vars($data)) && null !== ($data->nextPickupDate ?? null)) {
            $dataArray['nextPickupDate'] = $data->nextPickupDate;
        }
        if (\array_key_exists('warnings', get_object_vars($data)) && null !== ($data->warnings ?? null)) {
            $values_1 = [];
            foreach ($data->warnings as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['warnings'] = $values_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupResponse::class => false];
    }
}
