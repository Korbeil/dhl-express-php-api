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

class SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem();
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
        if (\array_key_exists('isCustomerAgreement', $data) && \is_int($data['isCustomerAgreement'])) {
            $data['isCustomerAgreement'] = (bool) $data['isCustomerAgreement'];
        }
        if (\array_key_exists('isMarketedService', $data) && \is_int($data['isMarketedService'])) {
            $data['isMarketedService'] = (bool) $data['isMarketedService'];
        }
        if (\array_key_exists('isBillingServiceIndicator', $data) && \is_int($data['isBillingServiceIndicator'])) {
            $data['isBillingServiceIndicator'] = (bool) $data['isBillingServiceIndicator'];
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('serviceCode', $data) && null !== $data['serviceCode']) {
            $object->serviceCode = $data['serviceCode'];
        } elseif (\array_key_exists('serviceCode', $data)) {
            $object->serviceCode = null;
        }
        if (\array_key_exists('localServiceCode', $data) && null !== $data['localServiceCode']) {
            $object->localServiceCode = $data['localServiceCode'];
        } elseif (\array_key_exists('localServiceCode', $data)) {
            $object->localServiceCode = null;
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }
        if (\array_key_exists('serviceTypeCode', $data) && null !== $data['serviceTypeCode']) {
            $object->serviceTypeCode = $data['serviceTypeCode'];
        } elseif (\array_key_exists('serviceTypeCode', $data)) {
            $object->serviceTypeCode = null;
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->price = $data['price'];
        } elseif (\array_key_exists('price', $data)) {
            $object->price = null;
        }
        if (\array_key_exists('priceCurrency', $data) && null !== $data['priceCurrency']) {
            $object->priceCurrency = $data['priceCurrency'];
        } elseif (\array_key_exists('priceCurrency', $data)) {
            $object->priceCurrency = null;
        }
        if (\array_key_exists('isCustomerAgreement', $data) && null !== $data['isCustomerAgreement']) {
            $object->isCustomerAgreement = $data['isCustomerAgreement'];
        } elseif (\array_key_exists('isCustomerAgreement', $data)) {
            $object->isCustomerAgreement = null;
        }
        if (\array_key_exists('isMarketedService', $data) && null !== $data['isMarketedService']) {
            $object->isMarketedService = $data['isMarketedService'];
        } elseif (\array_key_exists('isMarketedService', $data)) {
            $object->isMarketedService = null;
        }
        if (\array_key_exists('isBillingServiceIndicator', $data) && null !== $data['isBillingServiceIndicator']) {
            $object->isBillingServiceIndicator = $data['isBillingServiceIndicator'];
        } elseif (\array_key_exists('isBillingServiceIndicator', $data)) {
            $object->isBillingServiceIndicator = null;
        }
        if (\array_key_exists('priceBreakdown', $data) && null !== $data['priceBreakdown']) {
            $values = [];
            foreach ($data['priceBreakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class, 'json', $context);
            }
            $object->priceBreakdown = $values;
        } elseif (\array_key_exists('priceBreakdown', $data)) {
            $object->priceBreakdown = null;
        }
        if (\array_key_exists('tariffRateFormula', $data) && null !== $data['tariffRateFormula']) {
            $object->tariffRateFormula = $data['tariffRateFormula'];
        } elseif (\array_key_exists('tariffRateFormula', $data)) {
            $object->tariffRateFormula = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (\array_key_exists('serviceCode', get_object_vars($data)) && null !== ($data->serviceCode ?? null)) {
            $dataArray['serviceCode'] = $data->serviceCode;
        }
        if (\array_key_exists('localServiceCode', get_object_vars($data)) && null !== ($data->localServiceCode ?? null)) {
            $dataArray['localServiceCode'] = $data->localServiceCode;
        }
        if (\array_key_exists('typeCode', get_object_vars($data)) && null !== ($data->typeCode ?? null)) {
            $dataArray['typeCode'] = $data->typeCode;
        }
        if (\array_key_exists('serviceTypeCode', get_object_vars($data)) && null !== ($data->serviceTypeCode ?? null)) {
            $dataArray['serviceTypeCode'] = $data->serviceTypeCode;
        }
        if (\array_key_exists('price', get_object_vars($data)) && null !== ($data->price ?? null)) {
            $dataArray['price'] = $data->price;
        }
        if (\array_key_exists('priceCurrency', get_object_vars($data)) && null !== ($data->priceCurrency ?? null)) {
            $dataArray['priceCurrency'] = $data->priceCurrency;
        }
        if (\array_key_exists('isCustomerAgreement', get_object_vars($data)) && null !== ($data->isCustomerAgreement ?? null)) {
            $dataArray['isCustomerAgreement'] = $data->isCustomerAgreement;
        }
        if (\array_key_exists('isMarketedService', get_object_vars($data)) && null !== ($data->isMarketedService ?? null)) {
            $dataArray['isMarketedService'] = $data->isMarketedService;
        }
        if (\array_key_exists('isBillingServiceIndicator', get_object_vars($data)) && null !== ($data->isBillingServiceIndicator ?? null)) {
            $dataArray['isBillingServiceIndicator'] = $data->isBillingServiceIndicator;
        }
        if (\array_key_exists('priceBreakdown', get_object_vars($data)) && null !== ($data->priceBreakdown ?? null)) {
            $values = [];
            foreach ($data->priceBreakdown as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['priceBreakdown'] = $values;
        }
        if (\array_key_exists('tariffRateFormula', get_object_vars($data)) && null !== ($data->tariffRateFormula ?? null)) {
            $dataArray['tariffRateFormula'] = $data->tariffRateFormula;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class => false];
    }
}
