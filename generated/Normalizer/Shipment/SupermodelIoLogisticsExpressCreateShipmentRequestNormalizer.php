<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Shipment;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('getRateEstimates', $data) && \is_int($data['getRateEstimates'])) {
            $data['getRateEstimates'] = (bool) $data['getRateEstimates'];
        }
        if (\array_key_exists('requestOndemandDeliveryURL', $data) && \is_int($data['requestOndemandDeliveryURL'])) {
            $data['requestOndemandDeliveryURL'] = (bool) $data['requestOndemandDeliveryURL'];
        }
        if (\array_key_exists('getTransliteratedResponse', $data) && \is_int($data['getTransliteratedResponse'])) {
            $data['getTransliteratedResponse'] = (bool) $data['getTransliteratedResponse'];
        }
        if (\array_key_exists('plannedShippingDateAndTime', $data) && null !== $data['plannedShippingDateAndTime']) {
            $object->plannedShippingDateAndTime = $data['plannedShippingDateAndTime'];
        } elseif (\array_key_exists('plannedShippingDateAndTime', $data)) {
            $object->plannedShippingDateAndTime = null;
        }
        if (\array_key_exists('pickup', $data) && null !== $data['pickup']) {
            $object->pickup = $this->denormalizer->denormalize($data['pickup'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class, 'json', $context);
        } elseif (\array_key_exists('pickup', $data)) {
            $object->pickup = null;
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
        if (\array_key_exists('getRateEstimates', $data) && null !== $data['getRateEstimates']) {
            $object->getRateEstimates = $data['getRateEstimates'];
        } elseif (\array_key_exists('getRateEstimates', $data)) {
            $object->getRateEstimates = null;
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
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressValueAddedServices::class, 'json', $context);
            }
            $object->valueAddedServices = $values_1;
        } elseif (\array_key_exists('valueAddedServices', $data)) {
            $object->valueAddedServices = null;
        }
        if (\array_key_exists('outputImageProperties', $data) && null !== $data['outputImageProperties']) {
            $object->outputImageProperties = $this->denormalizer->denormalize($data['outputImageProperties'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class, 'json', $context);
        } elseif (\array_key_exists('outputImageProperties', $data)) {
            $object->outputImageProperties = null;
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_2 = [];
            foreach ($data['customerReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressReference::class, 'json', $context);
            }
            $object->customerReferences = $values_2;
        } elseif (\array_key_exists('customerReferences', $data)) {
            $object->customerReferences = null;
        }
        if (\array_key_exists('identifiers', $data) && null !== $data['identifiers']) {
            $values_3 = [];
            foreach ($data['identifiers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
            }
            $object->identifiers = $values_3;
        } elseif (\array_key_exists('identifiers', $data)) {
            $object->identifiers = null;
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->customerDetails = $this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class, 'json', $context);
        } elseif (\array_key_exists('customerDetails', $data)) {
            $object->customerDetails = null;
        }
        if (\array_key_exists('content', $data) && null !== $data['content']) {
            $object->content = $this->denormalizer->denormalize($data['content'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class, 'json', $context);
        } elseif (\array_key_exists('content', $data)) {
            $object->content = null;
        }
        if (\array_key_exists('documentImages', $data) && null !== $data['documentImages']) {
            $values_4 = [];
            foreach ($data['documentImages'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class, 'json', $context);
            }
            $object->documentImages = $values_4;
        } elseif (\array_key_exists('documentImages', $data)) {
            $object->documentImages = null;
        }
        if (\array_key_exists('onDemandDelivery', $data) && null !== $data['onDemandDelivery']) {
            $object->onDemandDelivery = $this->denormalizer->denormalize($data['onDemandDelivery'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class, 'json', $context);
        } elseif (\array_key_exists('onDemandDelivery', $data)) {
            $object->onDemandDelivery = null;
        }
        if (\array_key_exists('requestOndemandDeliveryURL', $data) && null !== $data['requestOndemandDeliveryURL']) {
            $object->requestOndemandDeliveryURL = $data['requestOndemandDeliveryURL'];
        } elseif (\array_key_exists('requestOndemandDeliveryURL', $data)) {
            $object->requestOndemandDeliveryURL = null;
        }
        if (\array_key_exists('shipmentNotification', $data) && null !== $data['shipmentNotification']) {
            $values_5 = [];
            foreach ($data['shipmentNotification'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class, 'json', $context);
            }
            $object->shipmentNotification = $values_5;
        } elseif (\array_key_exists('shipmentNotification', $data)) {
            $object->shipmentNotification = null;
        }
        if (\array_key_exists('prepaidCharges', $data) && null !== $data['prepaidCharges']) {
            $values_6 = [];
            foreach ($data['prepaidCharges'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class, 'json', $context);
            }
            $object->prepaidCharges = $values_6;
        } elseif (\array_key_exists('prepaidCharges', $data)) {
            $object->prepaidCharges = null;
        }
        if (\array_key_exists('getTransliteratedResponse', $data) && null !== $data['getTransliteratedResponse']) {
            $object->getTransliteratedResponse = $data['getTransliteratedResponse'];
        } elseif (\array_key_exists('getTransliteratedResponse', $data)) {
            $object->getTransliteratedResponse = null;
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->estimatedDeliveryDate = $this->denormalizer->denormalize($data['estimatedDeliveryDate'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class, 'json', $context);
        } elseif (\array_key_exists('estimatedDeliveryDate', $data)) {
            $object->estimatedDeliveryDate = null;
        }
        if (\array_key_exists('getAdditionalInformation', $data) && null !== $data['getAdditionalInformation']) {
            $values_7 = [];
            foreach ($data['getAdditionalInformation'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class, 'json', $context);
            }
            $object->getAdditionalInformation = $values_7;
        } elseif (\array_key_exists('getAdditionalInformation', $data)) {
            $object->getAdditionalInformation = null;
        }
        if (\array_key_exists('parentShipment', $data) && null !== $data['parentShipment']) {
            $object->parentShipment = $this->denormalizer->denormalize($data['parentShipment'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class, 'json', $context);
        } elseif (\array_key_exists('parentShipment', $data)) {
            $object->parentShipment = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['plannedShippingDateAndTime'] = $data->plannedShippingDateAndTime;
        $normalized = null === $data->pickup ? null : $this->normalizer->normalize($data->pickup, 'json', $context);
        $dataArray['pickup'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        $dataArray['productCode'] = $data->productCode;
        if (\array_key_exists('localProductCode', get_object_vars($data)) && null !== ($data->localProductCode ?? null)) {
            $dataArray['localProductCode'] = $data->localProductCode;
        }
        if (\array_key_exists('getRateEstimates', get_object_vars($data)) && null !== ($data->getRateEstimates ?? null)) {
            $dataArray['getRateEstimates'] = $data->getRateEstimates;
        }
        $values = [];
        foreach ($data->accounts as $value) {
            $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['accounts'] = $values;
        if (\array_key_exists('valueAddedServices', get_object_vars($data)) && null !== ($data->valueAddedServices ?? null)) {
            $values_1 = [];
            foreach ($data->valueAddedServices as $value_1) {
                $normalized_2 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['valueAddedServices'] = $values_1;
        }
        if (\array_key_exists('outputImageProperties', get_object_vars($data)) && null !== ($data->outputImageProperties ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->outputImageProperties, 'json', $context);
            $dataArray['outputImageProperties'] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (\array_key_exists('customerReferences', get_object_vars($data)) && null !== ($data->customerReferences ?? null)) {
            $values_2 = [];
            foreach ($data->customerReferences as $value_2) {
                $normalized_4 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['customerReferences'] = $values_2;
        }
        if (\array_key_exists('identifiers', get_object_vars($data)) && null !== ($data->identifiers ?? null)) {
            $values_3 = [];
            foreach ($data->identifiers as $value_3) {
                $normalized_5 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = is_iterable($normalized_5) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['identifiers'] = $values_3;
        }
        $normalized_6 = null === $data->customerDetails ? null : $this->normalizer->normalize($data->customerDetails, 'json', $context);
        $dataArray['customerDetails'] = is_iterable($normalized_6) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_6) : $normalized_6;
        $normalized_7 = null === $data->content ? null : $this->normalizer->normalize($data->content, 'json', $context);
        $dataArray['content'] = is_iterable($normalized_7) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_7) : $normalized_7;
        if (\array_key_exists('documentImages', get_object_vars($data)) && null !== ($data->documentImages ?? null)) {
            $values_4 = [];
            foreach ($data->documentImages as $value_4) {
                $normalized_8 = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = is_iterable($normalized_8) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_8) : $normalized_8;
            }
            $dataArray['documentImages'] = $values_4;
        }
        if (\array_key_exists('onDemandDelivery', get_object_vars($data)) && null !== ($data->onDemandDelivery ?? null)) {
            $normalized_9 = $this->normalizer->normalize($data->onDemandDelivery, 'json', $context);
            $dataArray['onDemandDelivery'] = is_iterable($normalized_9) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_9) : $normalized_9;
        }
        if (\array_key_exists('requestOndemandDeliveryURL', get_object_vars($data)) && null !== ($data->requestOndemandDeliveryURL ?? null)) {
            $dataArray['requestOndemandDeliveryURL'] = $data->requestOndemandDeliveryURL;
        }
        if (\array_key_exists('shipmentNotification', get_object_vars($data)) && null !== ($data->shipmentNotification ?? null)) {
            $values_5 = [];
            foreach ($data->shipmentNotification as $value_5) {
                $normalized_10 = null === $value_5 ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_5[] = is_iterable($normalized_10) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_10) : $normalized_10;
            }
            $dataArray['shipmentNotification'] = $values_5;
        }
        if (\array_key_exists('prepaidCharges', get_object_vars($data)) && null !== ($data->prepaidCharges ?? null)) {
            $values_6 = [];
            foreach ($data->prepaidCharges as $value_6) {
                $normalized_11 = null === $value_6 ? null : $this->normalizer->normalize($value_6, 'json', $context);
                $values_6[] = is_iterable($normalized_11) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_11) : $normalized_11;
            }
            $dataArray['prepaidCharges'] = $values_6;
        }
        if (\array_key_exists('getTransliteratedResponse', get_object_vars($data)) && null !== ($data->getTransliteratedResponse ?? null)) {
            $dataArray['getTransliteratedResponse'] = $data->getTransliteratedResponse;
        }
        if (\array_key_exists('estimatedDeliveryDate', get_object_vars($data)) && null !== ($data->estimatedDeliveryDate ?? null)) {
            $normalized_12 = $this->normalizer->normalize($data->estimatedDeliveryDate, 'json', $context);
            $dataArray['estimatedDeliveryDate'] = is_iterable($normalized_12) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_12) : $normalized_12;
        }
        if (\array_key_exists('getAdditionalInformation', get_object_vars($data)) && null !== ($data->getAdditionalInformation ?? null)) {
            $values_7 = [];
            foreach ($data->getAdditionalInformation as $value_7) {
                $normalized_13 = null === $value_7 ? null : $this->normalizer->normalize($value_7, 'json', $context);
                $values_7[] = is_iterable($normalized_13) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_13) : $normalized_13;
            }
            $dataArray['getAdditionalInformation'] = $values_7;
        }
        if (\array_key_exists('parentShipment', get_object_vars($data)) && null !== ($data->parentShipment ?? null)) {
            $normalized_14 = $this->normalizer->normalize($data->parentShipment, 'json', $context);
            $dataArray['parentShipment'] = is_iterable($normalized_14) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_14) : $normalized_14;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest::class => false];
    }
}
