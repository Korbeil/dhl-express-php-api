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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('currencyType', $data) && null !== $data['currencyType']) {
            $object->setCurrencyType($data['currencyType']);
        } elseif (\array_key_exists('currencyType', $data) && null === $data['currencyType']) {
            $object->setCurrencyType(null);
        }
        if (\array_key_exists('priceCurrency', $data) && null !== $data['priceCurrency']) {
            $object->setPriceCurrency($data['priceCurrency']);
        } elseif (\array_key_exists('priceCurrency', $data) && null === $data['priceCurrency']) {
            $object->setPriceCurrency(null);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
        }
        if (\array_key_exists('serviceBreakdown', $data) && null !== $data['serviceBreakdown']) {
            $values = [];
            foreach ($data['serviceBreakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class, 'json', $context);
            }
            $object->setServiceBreakdown($values);
        } elseif (\array_key_exists('serviceBreakdown', $data) && null === $data['serviceBreakdown']) {
            $object->setServiceBreakdown(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['currencyType'] = $data->getCurrencyType();
        $dataArray['priceCurrency'] = $data->getPriceCurrency();
        $dataArray['price'] = $data->getPrice();
        if ($data->isInitialized('serviceBreakdown') && null !== $data->getServiceBreakdown()) {
            $values = [];
            foreach ($data->getServiceBreakdown() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['serviceBreakdown'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => false];
    }
}
