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

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('currencyType', $data) && null !== $data['currencyType']) {
            $object->currencyType = $data['currencyType'];
        } elseif (\array_key_exists('currencyType', $data)) {
            $object->currencyType = null;
        }
        if (\array_key_exists('priceCurrency', $data) && null !== $data['priceCurrency']) {
            $object->priceCurrency = $data['priceCurrency'];
        } elseif (\array_key_exists('priceCurrency', $data)) {
            $object->priceCurrency = null;
        }
        if (\array_key_exists('priceBreakdown', $data) && null !== $data['priceBreakdown']) {
            $values = [];
            foreach ($data['priceBreakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem::class, 'json', $context);
            }
            $object->priceBreakdown = $values;
        } elseif (\array_key_exists('priceBreakdown', $data)) {
            $object->priceBreakdown = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('currencyType', get_object_vars($data)) && null !== ($data->currencyType ?? null)) {
            $dataArray['currencyType'] = $data->currencyType;
        }
        if (\array_key_exists('priceCurrency', get_object_vars($data)) && null !== ($data->priceCurrency ?? null)) {
            $dataArray['priceCurrency'] = $data->priceCurrency;
        }
        if (\array_key_exists('priceBreakdown', get_object_vars($data)) && null !== ($data->priceBreakdown ?? null)) {
            $values = [];
            foreach ($data->priceBreakdown as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['priceBreakdown'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class => false];
    }
}
