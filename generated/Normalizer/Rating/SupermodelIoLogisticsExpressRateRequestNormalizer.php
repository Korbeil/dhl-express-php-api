<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Rating;

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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRateRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRateRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRateRequest();
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
            $object->customerDetails = $this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class, 'json', $context);
        } elseif (\array_key_exists('customerDetails', $data)) {
            $object->customerDetails = null;
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
            }
            $object->accounts = $values;
        } elseif (\array_key_exists('accounts', $data)) {
            $object->accounts = null;
        }
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->productCode = $data['productCode'];
        } elseif (\array_key_exists('productCode', $data)) {
            $object->productCode = null;
        }
        if (\array_key_exists('localProductCode', $data) && null !== $data['localProductCode']) {
            $object->localProductCode = $data['localProductCode'];
        } elseif (\array_key_exists('localProductCode', $data)) {
            $object->localProductCode = null;
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates::class, 'json', $context);
            }
            $object->valueAddedServices = $values_1;
        } elseif (\array_key_exists('valueAddedServices', $data)) {
            $object->valueAddedServices = null;
        }
        if (\array_key_exists('productsAndServices', $data) && null !== $data['productsAndServices']) {
            $values_2 = [];
            foreach ($data['productsAndServices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class, 'json', $context);
            }
            $object->productsAndServices = $values_2;
        } elseif (\array_key_exists('productsAndServices', $data)) {
            $object->productsAndServices = null;
        }
        if (\array_key_exists('payerCountryCode', $data) && null !== $data['payerCountryCode']) {
            $object->payerCountryCode = $data['payerCountryCode'];
        } elseif (\array_key_exists('payerCountryCode', $data)) {
            $object->payerCountryCode = null;
        }
        if (\array_key_exists('plannedShippingDateAndTime', $data) && null !== $data['plannedShippingDateAndTime']) {
            $object->plannedShippingDateAndTime = $data['plannedShippingDateAndTime'];
        } elseif (\array_key_exists('plannedShippingDateAndTime', $data)) {
            $object->plannedShippingDateAndTime = null;
        }
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->unitOfMeasurement = $data['unitOfMeasurement'];
        } elseif (\array_key_exists('unitOfMeasurement', $data)) {
            $object->unitOfMeasurement = null;
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->isCustomsDeclarable = $data['isCustomsDeclarable'];
        } elseif (\array_key_exists('isCustomsDeclarable', $data)) {
            $object->isCustomsDeclarable = null;
        }
        if (\array_key_exists('monetaryAmount', $data) && null !== $data['monetaryAmount']) {
            $values_3 = [];
            foreach ($data['monetaryAmount'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class, 'json', $context);
            }
            $object->monetaryAmount = $values_3;
        } elseif (\array_key_exists('monetaryAmount', $data)) {
            $object->monetaryAmount = null;
        }
        if (\array_key_exists('requestAllValueAddedServices', $data) && null !== $data['requestAllValueAddedServices']) {
            $object->requestAllValueAddedServices = $data['requestAllValueAddedServices'];
        } elseif (\array_key_exists('requestAllValueAddedServices', $data)) {
            $object->requestAllValueAddedServices = null;
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->estimatedDeliveryDate = $this->denormalizer->denormalize($data['estimatedDeliveryDate'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class, 'json', $context);
        } elseif (\array_key_exists('estimatedDeliveryDate', $data)) {
            $object->estimatedDeliveryDate = null;
        }
        if (\array_key_exists('getAdditionalInformation', $data) && null !== $data['getAdditionalInformation']) {
            $values_4 = [];
            foreach ($data['getAdditionalInformation'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class, 'json', $context);
            }
            $object->getAdditionalInformation = $values_4;
        } elseif (\array_key_exists('getAdditionalInformation', $data)) {
            $object->getAdditionalInformation = null;
        }
        if (\array_key_exists('returnStandardProductsOnly', $data) && null !== $data['returnStandardProductsOnly']) {
            $object->returnStandardProductsOnly = $data['returnStandardProductsOnly'];
        } elseif (\array_key_exists('returnStandardProductsOnly', $data)) {
            $object->returnStandardProductsOnly = null;
        }
        if (\array_key_exists('nextBusinessDay', $data) && null !== $data['nextBusinessDay']) {
            $object->nextBusinessDay = $data['nextBusinessDay'];
        } elseif (\array_key_exists('nextBusinessDay', $data)) {
            $object->nextBusinessDay = null;
        }
        if (\array_key_exists('productTypeCode', $data) && null !== $data['productTypeCode']) {
            $object->productTypeCode = $data['productTypeCode'];
        } elseif (\array_key_exists('productTypeCode', $data)) {
            $object->productTypeCode = null;
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_5 = [];
            foreach ($data['packages'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
            }
            $object->packages = $values_5;
        } elseif (\array_key_exists('packages', $data)) {
            $object->packages = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $normalized = null === $data->customerDetails ? null : $this->normalizer->normalize($data->customerDetails, 'json', $context);
        $dataArray['customerDetails'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        if (\array_key_exists('accounts', get_object_vars($data)) && null !== ($data->accounts ?? null)) {
            $values = [];
            foreach ($data->accounts as $value) {
                $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['accounts'] = $values;
        }
        if (\array_key_exists('productCode', get_object_vars($data)) && null !== ($data->productCode ?? null)) {
            $dataArray['productCode'] = $data->productCode;
        }
        if (\array_key_exists('localProductCode', get_object_vars($data)) && null !== ($data->localProductCode ?? null)) {
            $dataArray['localProductCode'] = $data->localProductCode;
        }
        if (\array_key_exists('valueAddedServices', get_object_vars($data)) && null !== ($data->valueAddedServices ?? null)) {
            $values_1 = [];
            foreach ($data->valueAddedServices as $value_1) {
                $normalized_2 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['valueAddedServices'] = $values_1;
        }
        if (\array_key_exists('productsAndServices', get_object_vars($data)) && null !== ($data->productsAndServices ?? null)) {
            $values_2 = [];
            foreach ($data->productsAndServices as $value_2) {
                $normalized_3 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['productsAndServices'] = $values_2;
        }
        if (\array_key_exists('payerCountryCode', get_object_vars($data)) && null !== ($data->payerCountryCode ?? null)) {
            $dataArray['payerCountryCode'] = $data->payerCountryCode;
        }
        $dataArray['plannedShippingDateAndTime'] = $data->plannedShippingDateAndTime;
        $dataArray['unitOfMeasurement'] = $data->unitOfMeasurement;
        $dataArray['isCustomsDeclarable'] = $data->isCustomsDeclarable;
        if (\array_key_exists('monetaryAmount', get_object_vars($data)) && null !== ($data->monetaryAmount ?? null)) {
            $values_3 = [];
            foreach ($data->monetaryAmount as $value_3) {
                $normalized_4 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['monetaryAmount'] = $values_3;
        }
        if (\array_key_exists('requestAllValueAddedServices', get_object_vars($data)) && null !== ($data->requestAllValueAddedServices ?? null)) {
            $dataArray['requestAllValueAddedServices'] = $data->requestAllValueAddedServices;
        }
        if (\array_key_exists('estimatedDeliveryDate', get_object_vars($data)) && null !== ($data->estimatedDeliveryDate ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->estimatedDeliveryDate, 'json', $context);
            $dataArray['estimatedDeliveryDate'] = is_iterable($normalized_5) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (\array_key_exists('getAdditionalInformation', get_object_vars($data)) && null !== ($data->getAdditionalInformation ?? null)) {
            $values_4 = [];
            foreach ($data->getAdditionalInformation as $value_4) {
                $normalized_6 = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = is_iterable($normalized_6) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['getAdditionalInformation'] = $values_4;
        }
        if (\array_key_exists('returnStandardProductsOnly', get_object_vars($data)) && null !== ($data->returnStandardProductsOnly ?? null)) {
            $dataArray['returnStandardProductsOnly'] = $data->returnStandardProductsOnly;
        }
        if (\array_key_exists('nextBusinessDay', get_object_vars($data)) && null !== ($data->nextBusinessDay ?? null)) {
            $dataArray['nextBusinessDay'] = $data->nextBusinessDay;
        }
        if (\array_key_exists('productTypeCode', get_object_vars($data)) && null !== ($data->productTypeCode ?? null)) {
            $dataArray['productTypeCode'] = $data->productTypeCode;
        }
        $values_5 = [];
        foreach ($data->packages as $value_5) {
            $normalized_7 = null === $value_5 ? null : $this->normalizer->normalize($value_5, 'json', $context);
            $values_5[] = is_iterable($normalized_7) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        $dataArray['packages'] = $values_5;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRateRequest::class => false];
    }
}
