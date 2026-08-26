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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('serviceCode', $data) && null !== $data['serviceCode']) {
            $object->setServiceCode($data['serviceCode']);
        } elseif (\array_key_exists('serviceCode', $data) && null === $data['serviceCode']) {
            $object->setServiceCode(null);
        }
        if (\array_key_exists('localServiceCode', $data) && null !== $data['localServiceCode']) {
            $object->setLocalServiceCode($data['localServiceCode']);
        } elseif (\array_key_exists('localServiceCode', $data) && null === $data['localServiceCode']) {
            $object->setLocalServiceCode(null);
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }
        if (\array_key_exists('serviceTypeCode', $data) && null !== $data['serviceTypeCode']) {
            $object->setServiceTypeCode($data['serviceTypeCode']);
        } elseif (\array_key_exists('serviceTypeCode', $data) && null === $data['serviceTypeCode']) {
            $object->setServiceTypeCode(null);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
        }
        if (\array_key_exists('priceCurrency', $data) && null !== $data['priceCurrency']) {
            $object->setPriceCurrency($data['priceCurrency']);
        } elseif (\array_key_exists('priceCurrency', $data) && null === $data['priceCurrency']) {
            $object->setPriceCurrency(null);
        }
        if (\array_key_exists('isCustomerAgreement', $data) && null !== $data['isCustomerAgreement']) {
            $object->setIsCustomerAgreement($data['isCustomerAgreement']);
        } elseif (\array_key_exists('isCustomerAgreement', $data) && null === $data['isCustomerAgreement']) {
            $object->setIsCustomerAgreement(null);
        }
        if (\array_key_exists('isMarketedService', $data) && null !== $data['isMarketedService']) {
            $object->setIsMarketedService($data['isMarketedService']);
        } elseif (\array_key_exists('isMarketedService', $data) && null === $data['isMarketedService']) {
            $object->setIsMarketedService(null);
        }
        if (\array_key_exists('isBillingServiceIndicator', $data) && null !== $data['isBillingServiceIndicator']) {
            $object->setIsBillingServiceIndicator($data['isBillingServiceIndicator']);
        } elseif (\array_key_exists('isBillingServiceIndicator', $data) && null === $data['isBillingServiceIndicator']) {
            $object->setIsBillingServiceIndicator(null);
        }
        if (\array_key_exists('priceBreakdown', $data) && null !== $data['priceBreakdown']) {
            $values = [];
            foreach ($data['priceBreakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class, 'json', $context);
            }
            $object->setPriceBreakdown($values);
        } elseif (\array_key_exists('priceBreakdown', $data) && null === $data['priceBreakdown']) {
            $object->setPriceBreakdown(null);
        }
        if (\array_key_exists('tariffRateFormula', $data) && null !== $data['tariffRateFormula']) {
            $object->setTariffRateFormula($data['tariffRateFormula']);
        } elseif (\array_key_exists('tariffRateFormula', $data) && null === $data['tariffRateFormula']) {
            $object->setTariffRateFormula(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('serviceCode') && null !== $data->getServiceCode()) {
            $dataArray['serviceCode'] = $data->getServiceCode();
        }
        if ($data->isInitialized('localServiceCode') && null !== $data->getLocalServiceCode()) {
            $dataArray['localServiceCode'] = $data->getLocalServiceCode();
        }
        if ($data->isInitialized('typeCode') && null !== $data->getTypeCode()) {
            $dataArray['typeCode'] = $data->getTypeCode();
        }
        if ($data->isInitialized('serviceTypeCode') && null !== $data->getServiceTypeCode()) {
            $dataArray['serviceTypeCode'] = $data->getServiceTypeCode();
        }
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = $data->getPrice();
        }
        if ($data->isInitialized('priceCurrency') && null !== $data->getPriceCurrency()) {
            $dataArray['priceCurrency'] = $data->getPriceCurrency();
        }
        if ($data->isInitialized('isCustomerAgreement') && null !== $data->getIsCustomerAgreement()) {
            $dataArray['isCustomerAgreement'] = $data->getIsCustomerAgreement();
        }
        if ($data->isInitialized('isMarketedService') && null !== $data->getIsMarketedService()) {
            $dataArray['isMarketedService'] = $data->getIsMarketedService();
        }
        if ($data->isInitialized('isBillingServiceIndicator') && null !== $data->getIsBillingServiceIndicator()) {
            $dataArray['isBillingServiceIndicator'] = $data->getIsBillingServiceIndicator();
        }
        if ($data->isInitialized('priceBreakdown') && null !== $data->getPriceBreakdown()) {
            $values = [];
            foreach ($data->getPriceBreakdown() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['priceBreakdown'] = $values;
        }
        if ($data->isInitialized('tariffRateFormula') && null !== $data->getTariffRateFormula()) {
            $dataArray['tariffRateFormula'] = $data->getTariffRateFormula();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class => false];
    }
}
