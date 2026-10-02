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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->contentId = $data['contentId'];
        } elseif (\array_key_exists('contentId', $data)) {
            $object->contentId = null;
        }
        if (\array_key_exists('dryIceTotalNetWeight', $data) && null !== $data['dryIceTotalNetWeight']) {
            $object->dryIceTotalNetWeight = $data['dryIceTotalNetWeight'];
        } elseif (\array_key_exists('dryIceTotalNetWeight', $data)) {
            $object->dryIceTotalNetWeight = null;
        }
        if (\array_key_exists('unCode', $data) && null !== $data['unCode']) {
            $object->unCode = $data['unCode'];
        } elseif (\array_key_exists('unCode', $data)) {
            $object->unCode = null;
        }
        if (\array_key_exists('customDescription', $data) && null !== $data['customDescription']) {
            $object->customDescription = $data['customDescription'];
        } elseif (\array_key_exists('customDescription', $data)) {
            $object->customDescription = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['contentId'] = $data->contentId;
        if (\array_key_exists('dryIceTotalNetWeight', get_object_vars($data)) && null !== ($data->dryIceTotalNetWeight ?? null)) {
            $dataArray['dryIceTotalNetWeight'] = $data->dryIceTotalNetWeight;
        }
        if (\array_key_exists('unCode', get_object_vars($data)) && null !== ($data->unCode ?? null)) {
            $dataArray['unCode'] = $data->unCode;
        }
        if (\array_key_exists('customDescription', get_object_vars($data)) && null !== ($data->customDescription ?? null)) {
            $dataArray['customDescription'] = $data->customDescription;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => false];
    }
}
