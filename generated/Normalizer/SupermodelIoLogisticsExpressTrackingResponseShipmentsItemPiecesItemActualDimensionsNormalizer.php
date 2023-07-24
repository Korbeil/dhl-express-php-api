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

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions();
        if (\array_key_exists('length', $data) && \is_int($data['length'])) {
            $data['length'] = (float) $data['length'];
        }
        if (\array_key_exists('width', $data) && \is_int($data['width'])) {
            $data['width'] = (float) $data['width'];
        }
        if (\array_key_exists('height', $data) && \is_int($data['height'])) {
            $data['height'] = (float) $data['height'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('length', $data) && null !== $data['length']) {
            $object->setLength($data['length']);
        } elseif (\array_key_exists('length', $data) && null === $data['length']) {
            $object->setLength(null);
        }
        if (\array_key_exists('width', $data) && null !== $data['width']) {
            $object->setWidth($data['width']);
        } elseif (\array_key_exists('width', $data) && null === $data['width']) {
            $object->setWidth(null);
        }
        if (\array_key_exists('height', $data) && null !== $data['height']) {
            $object->setHeight($data['height']);
        } elseif (\array_key_exists('height', $data) && null === $data['height']) {
            $object->setHeight(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['length'] = $object->getLength();
        $data['width'] = $object->getWidth();
        $data['height'] = $object->getHeight();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions' => false];
    }
}
