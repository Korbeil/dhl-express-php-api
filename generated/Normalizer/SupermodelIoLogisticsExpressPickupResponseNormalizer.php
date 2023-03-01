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

class SupermodelIoLogisticsExpressPickupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPickupResponse' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPickupResponse' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dispatchConfirmationNumbers', $data) && null !== $data['dispatchConfirmationNumbers']) {
            $values = [];
            foreach ($data['dispatchConfirmationNumbers'] as $value) {
                $values[] = $value;
            }
            $object->setDispatchConfirmationNumbers($values);
        } elseif (\array_key_exists('dispatchConfirmationNumbers', $data) && null === $data['dispatchConfirmationNumbers']) {
            $object->setDispatchConfirmationNumbers(null);
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
            $values_1 = [];
            foreach ($data['warnings'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWarnings($values_1);
        } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
            $object->setWarnings(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('dispatchConfirmationNumbers') && null !== $object->getDispatchConfirmationNumbers()) {
            $values = [];
            foreach ($object->getDispatchConfirmationNumbers() as $value) {
                $values[] = $value;
            }
            $data['dispatchConfirmationNumbers'] = $values;
        }
        if ($object->isInitialized('readyByTime') && null !== $object->getReadyByTime()) {
            $data['readyByTime'] = $object->getReadyByTime();
        }
        if ($object->isInitialized('nextPickupDate') && null !== $object->getNextPickupDate()) {
            $data['nextPickupDate'] = $object->getNextPickupDate();
        }
        if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
            $values_1 = [];
            foreach ($object->getWarnings() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['warnings'] = $values_1;
        }

        return $data;
    }
}
