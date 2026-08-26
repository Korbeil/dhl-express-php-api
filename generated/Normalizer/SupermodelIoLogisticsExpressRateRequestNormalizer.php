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

class SupermodelIoLogisticsExpressRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && \is_int($data['isCustomsDeclarable'])) {
            $data['isCustomsDeclarable'] = (bool) $data['isCustomsDeclarable'];
        }
        if (\array_key_exists('requestAllValueAddedServices', $data) && \is_int($data['requestAllValueAddedServices'])) {
            $data['requestAllValueAddedServices'] = (bool) $data['requestAllValueAddedServices'];
        }
        if (\array_key_exists('returnStandardProductsOnly', $data) && \is_int($data['returnStandardProductsOnly'])) {
            $data['returnStandardProductsOnly'] = (bool) $data['returnStandardProductsOnly'];
        }
        if (\array_key_exists('nextBusinessDay', $data) && \is_int($data['nextBusinessDay'])) {
            $data['nextBusinessDay'] = (bool) $data['nextBusinessDay'];
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class, 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
            }
            $object->setAccounts($values);
        } elseif (\array_key_exists('accounts', $data) && null === $data['accounts']) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->setProductCode($data['productCode']);
        } elseif (\array_key_exists('productCode', $data) && null === $data['productCode']) {
            $object->setProductCode(null);
        }
        if (\array_key_exists('localProductCode', $data) && null !== $data['localProductCode']) {
            $object->setLocalProductCode($data['localProductCode']);
        } elseif (\array_key_exists('localProductCode', $data) && null === $data['localProductCode']) {
            $object->setLocalProductCode(null);
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class, 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('productsAndServices', $data) && null !== $data['productsAndServices']) {
            $values_2 = [];
            foreach ($data['productsAndServices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class, 'json', $context);
            }
            $object->setProductsAndServices($values_2);
        } elseif (\array_key_exists('productsAndServices', $data) && null === $data['productsAndServices']) {
            $object->setProductsAndServices(null);
        }
        if (\array_key_exists('payerCountryCode', $data) && null !== $data['payerCountryCode']) {
            $object->setPayerCountryCode($data['payerCountryCode']);
        } elseif (\array_key_exists('payerCountryCode', $data) && null === $data['payerCountryCode']) {
            $object->setPayerCountryCode(null);
        }
        if (\array_key_exists('plannedShippingDateAndTime', $data) && null !== $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
        } elseif (\array_key_exists('plannedShippingDateAndTime', $data) && null === $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime(null);
        }
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement($data['unitOfMeasurement']);
        } elseif (\array_key_exists('unitOfMeasurement', $data) && null === $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement(null);
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
        } elseif (\array_key_exists('isCustomsDeclarable', $data) && null === $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable(null);
        }
        if (\array_key_exists('monetaryAmount', $data) && null !== $data['monetaryAmount']) {
            $values_3 = [];
            foreach ($data['monetaryAmount'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class, 'json', $context);
            }
            $object->setMonetaryAmount($values_3);
        } elseif (\array_key_exists('monetaryAmount', $data) && null === $data['monetaryAmount']) {
            $object->setMonetaryAmount(null);
        }
        if (\array_key_exists('requestAllValueAddedServices', $data) && null !== $data['requestAllValueAddedServices']) {
            $object->setRequestAllValueAddedServices($data['requestAllValueAddedServices']);
        } elseif (\array_key_exists('requestAllValueAddedServices', $data) && null === $data['requestAllValueAddedServices']) {
            $object->setRequestAllValueAddedServices(null);
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class, 'json', $context));
        } elseif (\array_key_exists('estimatedDeliveryDate', $data) && null === $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate(null);
        }
        if (\array_key_exists('getAdditionalInformation', $data) && null !== $data['getAdditionalInformation']) {
            $values_4 = [];
            foreach ($data['getAdditionalInformation'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class, 'json', $context);
            }
            $object->setGetAdditionalInformation($values_4);
        } elseif (\array_key_exists('getAdditionalInformation', $data) && null === $data['getAdditionalInformation']) {
            $object->setGetAdditionalInformation(null);
        }
        if (\array_key_exists('returnStandardProductsOnly', $data) && null !== $data['returnStandardProductsOnly']) {
            $object->setReturnStandardProductsOnly($data['returnStandardProductsOnly']);
        } elseif (\array_key_exists('returnStandardProductsOnly', $data) && null === $data['returnStandardProductsOnly']) {
            $object->setReturnStandardProductsOnly(null);
        }
        if (\array_key_exists('nextBusinessDay', $data) && null !== $data['nextBusinessDay']) {
            $object->setNextBusinessDay($data['nextBusinessDay']);
        } elseif (\array_key_exists('nextBusinessDay', $data) && null === $data['nextBusinessDay']) {
            $object->setNextBusinessDay(null);
        }
        if (\array_key_exists('productTypeCode', $data) && null !== $data['productTypeCode']) {
            $object->setProductTypeCode($data['productTypeCode']);
        } elseif (\array_key_exists('productTypeCode', $data) && null === $data['productTypeCode']) {
            $object->setProductTypeCode(null);
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_5 = [];
            foreach ($data['packages'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
            }
            $object->setPackages($values_5);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['customerDetails'] = null === $data->getCustomerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCustomerDetails(), 'json', $context));
        if ($data->isInitialized('accounts') && null !== $data->getAccounts()) {
            $values = [];
            foreach ($data->getAccounts() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['accounts'] = $values;
        }
        if ($data->isInitialized('productCode') && null !== $data->getProductCode()) {
            $dataArray['productCode'] = $data->getProductCode();
        }
        if ($data->isInitialized('localProductCode') && null !== $data->getLocalProductCode()) {
            $dataArray['localProductCode'] = $data->getLocalProductCode();
        }
        if ($data->isInitialized('valueAddedServices') && null !== $data->getValueAddedServices()) {
            $values_1 = [];
            foreach ($data->getValueAddedServices() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['valueAddedServices'] = $values_1;
        }
        if ($data->isInitialized('productsAndServices') && null !== $data->getProductsAndServices()) {
            $values_2 = [];
            foreach ($data->getProductsAndServices() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['productsAndServices'] = $values_2;
        }
        if ($data->isInitialized('payerCountryCode') && null !== $data->getPayerCountryCode()) {
            $dataArray['payerCountryCode'] = $data->getPayerCountryCode();
        }
        $dataArray['plannedShippingDateAndTime'] = $data->getPlannedShippingDateAndTime();
        $dataArray['unitOfMeasurement'] = $data->getUnitOfMeasurement();
        $dataArray['isCustomsDeclarable'] = $data->getIsCustomsDeclarable();
        if ($data->isInitialized('monetaryAmount') && null !== $data->getMonetaryAmount()) {
            $values_3 = [];
            foreach ($data->getMonetaryAmount() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['monetaryAmount'] = $values_3;
        }
        if ($data->isInitialized('requestAllValueAddedServices') && null !== $data->getRequestAllValueAddedServices()) {
            $dataArray['requestAllValueAddedServices'] = $data->getRequestAllValueAddedServices();
        }
        if ($data->isInitialized('estimatedDeliveryDate') && null !== $data->getEstimatedDeliveryDate()) {
            $dataArray['estimatedDeliveryDate'] = null === $data->getEstimatedDeliveryDate() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getEstimatedDeliveryDate(), 'json', $context));
        }
        if ($data->isInitialized('getAdditionalInformation') && null !== $data->getGetAdditionalInformation()) {
            $values_4 = [];
            foreach ($data->getGetAdditionalInformation() as $value_4) {
                $values_4[] = null === $value_4 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['getAdditionalInformation'] = $values_4;
        }
        if ($data->isInitialized('returnStandardProductsOnly') && null !== $data->getReturnStandardProductsOnly()) {
            $dataArray['returnStandardProductsOnly'] = $data->getReturnStandardProductsOnly();
        }
        if ($data->isInitialized('nextBusinessDay') && null !== $data->getNextBusinessDay()) {
            $dataArray['nextBusinessDay'] = $data->getNextBusinessDay();
        }
        if ($data->isInitialized('productTypeCode') && null !== $data->getProductTypeCode()) {
            $dataArray['productTypeCode'] = $data->getProductTypeCode();
        }
        $values_5 = [];
        foreach ($data->getPackages() as $value_5) {
            $values_5[] = null === $value_5 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
        }
        $dataArray['packages'] = $values_5;

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => false];
    }
}
