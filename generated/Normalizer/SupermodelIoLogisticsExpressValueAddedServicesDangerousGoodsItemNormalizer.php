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

class SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem();
        if (\array_key_exists('dryIceTotalNetWeight', $data) && \is_int($data['dryIceTotalNetWeight'])) {
            $data['dryIceTotalNetWeight'] = (float) $data['dryIceTotalNetWeight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentId', $data) && null !== $data['contentId']) {
            $object->setContentId($data['contentId']);
        } elseif (\array_key_exists('contentId', $data) && null === $data['contentId']) {
            $object->setContentId(null);
        }
        if (\array_key_exists('dryIceTotalNetWeight', $data) && null !== $data['dryIceTotalNetWeight']) {
            $object->setDryIceTotalNetWeight($data['dryIceTotalNetWeight']);
        } elseif (\array_key_exists('dryIceTotalNetWeight', $data) && null === $data['dryIceTotalNetWeight']) {
            $object->setDryIceTotalNetWeight(null);
        }
        if (\array_key_exists('unCode', $data) && null !== $data['unCode']) {
            $object->setUnCode($data['unCode']);
        } elseif (\array_key_exists('unCode', $data) && null === $data['unCode']) {
            $object->setUnCode(null);
        }
        if (\array_key_exists('customDescription', $data) && null !== $data['customDescription']) {
            $object->setCustomDescription($data['customDescription']);
        } elseif (\array_key_exists('customDescription', $data) && null === $data['customDescription']) {
            $object->setCustomDescription(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['contentId'] = $object->getContentId();
        if ($object->isInitialized('dryIceTotalNetWeight') && null !== $object->getDryIceTotalNetWeight()) {
            $data['dryIceTotalNetWeight'] = $object->getDryIceTotalNetWeight();
        }
        if ($object->isInitialized('unCode') && null !== $object->getUnCode()) {
            $data['unCode'] = $object->getUnCode();
        }
        if ($object->isInitialized('customDescription') && null !== $object->getCustomDescription()) {
            $data['customDescription'] = $object->getCustomDescription();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem' => false];
    }
}
