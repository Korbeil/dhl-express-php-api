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

class SupermodelIoLogisticsExpressLandedCostRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressLandedCostRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressLandedCostRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressLandedCostRequest();
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
        if (\array_key_exists('isDTPRequested', $data) && \is_int($data['isDTPRequested'])) {
            $data['isDTPRequested'] = (bool) $data['isDTPRequested'];
        }
        if (\array_key_exists('isInsuranceRequested', $data) && \is_int($data['isInsuranceRequested'])) {
            $data['isInsuranceRequested'] = (bool) $data['isInsuranceRequested'];
        }
        if (\array_key_exists('getCostBreakdown', $data) && \is_int($data['getCostBreakdown'])) {
            $data['getCostBreakdown'] = (bool) $data['getCostBreakdown'];
        }
        if (\array_key_exists('getTariffFormula', $data) && \is_int($data['getTariffFormula'])) {
            $data['getTariffFormula'] = (bool) $data['getTariffFormula'];
        }
        if (\array_key_exists('getQuotationID', $data) && \is_int($data['getQuotationID'])) {
            $data['getQuotationID'] = (bool) $data['getQuotationID'];
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->customerDetails = $this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class, 'json', $context);
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
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->unitOfMeasurement = $data['unitOfMeasurement'];
        } elseif (\array_key_exists('unitOfMeasurement', $data)) {
            $object->unitOfMeasurement = null;
        }
        if (\array_key_exists('currencyCode', $data) && null !== $data['currencyCode']) {
            $object->currencyCode = $data['currencyCode'];
        } elseif (\array_key_exists('currencyCode', $data)) {
            $object->currencyCode = null;
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->isCustomsDeclarable = $data['isCustomsDeclarable'];
        } elseif (\array_key_exists('isCustomsDeclarable', $data)) {
            $object->isCustomsDeclarable = null;
        }
        if (\array_key_exists('isDTPRequested', $data) && null !== $data['isDTPRequested']) {
            $object->isDTPRequested = $data['isDTPRequested'];
        } elseif (\array_key_exists('isDTPRequested', $data)) {
            $object->isDTPRequested = null;
        }
        if (\array_key_exists('isInsuranceRequested', $data) && null !== $data['isInsuranceRequested']) {
            $object->isInsuranceRequested = $data['isInsuranceRequested'];
        } elseif (\array_key_exists('isInsuranceRequested', $data)) {
            $object->isInsuranceRequested = null;
        }
        if (\array_key_exists('getCostBreakdown', $data) && null !== $data['getCostBreakdown']) {
            $object->getCostBreakdown = $data['getCostBreakdown'];
        } elseif (\array_key_exists('getCostBreakdown', $data)) {
            $object->getCostBreakdown = null;
        }
        if (\array_key_exists('charges', $data) && null !== $data['charges']) {
            $values_1 = [];
            foreach ($data['charges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class, 'json', $context);
            }
            $object->charges = $values_1;
        } elseif (\array_key_exists('charges', $data)) {
            $object->charges = null;
        }
        if (\array_key_exists('shipmentPurpose', $data) && null !== $data['shipmentPurpose']) {
            $object->shipmentPurpose = $data['shipmentPurpose'];
        } elseif (\array_key_exists('shipmentPurpose', $data)) {
            $object->shipmentPurpose = null;
        }
        if (\array_key_exists('transportationMode', $data) && null !== $data['transportationMode']) {
            $object->transportationMode = $data['transportationMode'];
        } elseif (\array_key_exists('transportationMode', $data)) {
            $object->transportationMode = null;
        }
        if (\array_key_exists('merchantSelectedCarrierName', $data) && null !== $data['merchantSelectedCarrierName']) {
            $object->merchantSelectedCarrierName = $data['merchantSelectedCarrierName'];
        } elseif (\array_key_exists('merchantSelectedCarrierName', $data)) {
            $object->merchantSelectedCarrierName = null;
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_2 = [];
            foreach ($data['packages'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
            }
            $object->packages = $values_2;
        } elseif (\array_key_exists('packages', $data)) {
            $object->packages = null;
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_3 = [];
            foreach ($data['items'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class, 'json', $context);
            }
            $object->items = $values_3;
        } elseif (\array_key_exists('items', $data)) {
            $object->items = null;
        }
        if (\array_key_exists('getTariffFormula', $data) && null !== $data['getTariffFormula']) {
            $object->getTariffFormula = $data['getTariffFormula'];
        } elseif (\array_key_exists('getTariffFormula', $data)) {
            $object->getTariffFormula = null;
        }
        if (\array_key_exists('getQuotationID', $data) && null !== $data['getQuotationID']) {
            $object->getQuotationID = $data['getQuotationID'];
        } elseif (\array_key_exists('getQuotationID', $data)) {
            $object->getQuotationID = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $normalized = null === $data->customerDetails ? null : $this->normalizer->normalize($data->customerDetails, 'json', $context);
        $dataArray['customerDetails'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        $values = [];
        foreach ($data->accounts as $value) {
            $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['accounts'] = $values;
        if (\array_key_exists('productCode', get_object_vars($data)) && null !== ($data->productCode ?? null)) {
            $dataArray['productCode'] = $data->productCode;
        }
        if (\array_key_exists('localProductCode', get_object_vars($data)) && null !== ($data->localProductCode ?? null)) {
            $dataArray['localProductCode'] = $data->localProductCode;
        }
        $dataArray['unitOfMeasurement'] = $data->unitOfMeasurement;
        $dataArray['currencyCode'] = $data->currencyCode;
        $dataArray['isCustomsDeclarable'] = $data->isCustomsDeclarable;
        if (\array_key_exists('isDTPRequested', get_object_vars($data)) && null !== ($data->isDTPRequested ?? null)) {
            $dataArray['isDTPRequested'] = $data->isDTPRequested;
        }
        if (\array_key_exists('isInsuranceRequested', get_object_vars($data)) && null !== ($data->isInsuranceRequested ?? null)) {
            $dataArray['isInsuranceRequested'] = $data->isInsuranceRequested;
        }
        $dataArray['getCostBreakdown'] = $data->getCostBreakdown;
        if (\array_key_exists('charges', get_object_vars($data)) && null !== ($data->charges ?? null)) {
            $values_1 = [];
            foreach ($data->charges as $value_1) {
                $normalized_2 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['charges'] = $values_1;
        }
        if (\array_key_exists('shipmentPurpose', get_object_vars($data)) && null !== ($data->shipmentPurpose ?? null)) {
            $dataArray['shipmentPurpose'] = $data->shipmentPurpose;
        }
        if (\array_key_exists('transportationMode', get_object_vars($data)) && null !== ($data->transportationMode ?? null)) {
            $dataArray['transportationMode'] = $data->transportationMode;
        }
        if (\array_key_exists('merchantSelectedCarrierName', get_object_vars($data)) && null !== ($data->merchantSelectedCarrierName ?? null)) {
            $dataArray['merchantSelectedCarrierName'] = $data->merchantSelectedCarrierName;
        }
        $values_2 = [];
        foreach ($data->packages as $value_2) {
            $normalized_3 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
            $values_2[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        $dataArray['packages'] = $values_2;
        $values_3 = [];
        foreach ($data->items as $value_3) {
            $normalized_4 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
            $values_3[] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        $dataArray['items'] = $values_3;
        if (\array_key_exists('getTariffFormula', get_object_vars($data)) && null !== ($data->getTariffFormula ?? null)) {
            $dataArray['getTariffFormula'] = $data->getTariffFormula;
        }
        if (\array_key_exists('getQuotationID', get_object_vars($data)) && null !== ($data->getQuotationID ?? null)) {
            $dataArray['getQuotationID'] = $data->getQuotationID;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressLandedCostRequest::class => false];
    }
}
