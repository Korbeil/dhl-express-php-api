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

class SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupResponse' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupResponse' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('dispatchConfirmationNumber') && null !== $object->getDispatchConfirmationNumber()) {
            $data['dispatchConfirmationNumber'] = $object->getDispatchConfirmationNumber();
        }
        if ($object->isInitialized('readyByTime') && null !== $object->getReadyByTime()) {
            $data['readyByTime'] = $object->getReadyByTime();
        }
        if ($object->isInitialized('nextPickupDate') && null !== $object->getNextPickupDate()) {
            $data['nextPickupDate'] = $object->getNextPickupDate();
        }
        if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
            $values = [];
            foreach ($object->getWarnings() as $value) {
                $values[] = $value;
            }
            $data['warnings'] = $values;
        }

        return $data;
    }
}
