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

class SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dispatchConfirmationNumber', $data) && null !== $data['dispatchConfirmationNumber']) {
            $object->setDispatchConfirmationNumber($data['dispatchConfirmationNumber']);
        } elseif (\array_key_exists('dispatchConfirmationNumber', $data) && null === $data['dispatchConfirmationNumber']) {
            $object->setDispatchConfirmationNumber(null);
        }
        if (\array_key_exists('readyByTime', $data) && null !== $data['readyByTime']) {
            $object->setReadyByTime($data['readyByTime']);
        } elseif (\array_key_exists('readyByTime', $data) && null === $data['readyByTime']) {
            $object->setReadyByTime(null);
        }
        if (\array_key_exists('nextPickupDate', $data) && null !== $data['nextPickupDate']) {
            $object->setNextPickupDate($data['nextPickupDate']);
        } elseif (\array_key_exists('nextPickupDate', $data) && null === $data['nextPickupDate']) {
            $object->setNextPickupDate(null);
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values = [];
            foreach ($data['warnings'] as $value) {
                $values[] = $value;
            }
            $object->setWarnings($values);
        } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
            $object->setWarnings(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dispatchConfirmationNumber') && null !== $data->getDispatchConfirmationNumber()) {
            $dataArray['dispatchConfirmationNumber'] = $data->getDispatchConfirmationNumber();
        }
        if ($data->isInitialized('readyByTime') && null !== $data->getReadyByTime()) {
            $dataArray['readyByTime'] = $data->getReadyByTime();
        }
        if ($data->isInitialized('nextPickupDate') && null !== $data->getNextPickupDate()) {
            $dataArray['nextPickupDate'] = $data->getNextPickupDate();
        }
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values = [];
            foreach ($data->getWarnings() as $value) {
                $values[] = $value;
            }
            $dataArray['warnings'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupResponse::class => false];
    }
}
