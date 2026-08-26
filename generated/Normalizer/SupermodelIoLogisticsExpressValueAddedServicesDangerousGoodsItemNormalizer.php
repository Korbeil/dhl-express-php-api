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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dryIceTotalNetWeight', $data) && \is_int($data['dryIceTotalNetWeight'])) {
            $data['dryIceTotalNetWeight'] = (float) $data['dryIceTotalNetWeight'];
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

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['contentId'] = $data->getContentId();
        if ($data->isInitialized('dryIceTotalNetWeight') && null !== $data->getDryIceTotalNetWeight()) {
            $dataArray['dryIceTotalNetWeight'] = $data->getDryIceTotalNetWeight();
        }
        if ($data->isInitialized('unCode') && null !== $data->getUnCode()) {
            $dataArray['unCode'] = $data->getUnCode();
        }
        if ($data->isInitialized('customDescription') && null !== $data->getCustomDescription()) {
            $dataArray['customDescription'] = $data->getCustomDescription();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => false];
    }
}
