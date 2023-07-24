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

class SupermodelIoLogisticsExpressRatesExchangeRatesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesExchangeRatesItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesExchangeRatesItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem();
        if (\array_key_exists('currentExchangeRate', $data) && \is_int($data['currentExchangeRate'])) {
            $data['currentExchangeRate'] = (float) $data['currentExchangeRate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currentExchangeRate', $data) && null !== $data['currentExchangeRate']) {
            $object->setCurrentExchangeRate($data['currentExchangeRate']);
        } elseif (\array_key_exists('currentExchangeRate', $data) && null === $data['currentExchangeRate']) {
            $object->setCurrentExchangeRate(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('baseCurrency', $data) && null !== $data['baseCurrency']) {
            $object->setBaseCurrency($data['baseCurrency']);
        } elseif (\array_key_exists('baseCurrency', $data) && null === $data['baseCurrency']) {
            $object->setBaseCurrency(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['currentExchangeRate'] = $object->getCurrentExchangeRate();
        $data['currency'] = $object->getCurrency();
        $data['baseCurrency'] = $object->getBaseCurrency();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesExchangeRatesItem' => false];
    }
}
