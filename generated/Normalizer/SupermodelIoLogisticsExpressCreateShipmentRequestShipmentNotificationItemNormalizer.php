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

class SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }
        if (\array_key_exists('receiverId', $data) && null !== $data['receiverId']) {
            $object->setReceiverId($data['receiverId']);
        } elseif (\array_key_exists('receiverId', $data) && null === $data['receiverId']) {
            $object->setReceiverId(null);
        }
        if (\array_key_exists('languageCode', $data) && null !== $data['languageCode']) {
            $object->setLanguageCode($data['languageCode']);
        } elseif (\array_key_exists('languageCode', $data) && null === $data['languageCode']) {
            $object->setLanguageCode(null);
        }
        if (\array_key_exists('languageCountryCode', $data) && null !== $data['languageCountryCode']) {
            $object->setLanguageCountryCode($data['languageCountryCode']);
        } elseif (\array_key_exists('languageCountryCode', $data) && null === $data['languageCountryCode']) {
            $object->setLanguageCountryCode(null);
        }
        if (\array_key_exists('bespokeMessage', $data) && null !== $data['bespokeMessage']) {
            $object->setBespokeMessage($data['bespokeMessage']);
        } elseif (\array_key_exists('bespokeMessage', $data) && null === $data['bespokeMessage']) {
            $object->setBespokeMessage(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['typeCode'] = $object->getTypeCode();
        $data['receiverId'] = $object->getReceiverId();
        if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        if ($object->isInitialized('languageCountryCode') && null !== $object->getLanguageCountryCode()) {
            $data['languageCountryCode'] = $object->getLanguageCountryCode();
        }
        if ($object->isInitialized('bespokeMessage') && null !== $object->getBespokeMessage()) {
            $data['bespokeMessage'] = $object->getBespokeMessage();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem' => false];
    }
}
