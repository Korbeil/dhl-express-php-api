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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
            $data['volumetricWeight'] = (float) $data['volumetricWeight'];
        }
        if (\array_key_exists('serviceHandlingFeatureCodes', $data) && null !== $data['serviceHandlingFeatureCodes']) {
            $values = [];
            foreach ($data['serviceHandlingFeatureCodes'] as $value) {
                $values[] = $value;
            }
            $object->serviceHandlingFeatureCodes = $values;
        } elseif (\array_key_exists('serviceHandlingFeatureCodes', $data)) {
            $object->serviceHandlingFeatureCodes = null;
        }
        if (\array_key_exists('volumetricWeight', $data) && null !== $data['volumetricWeight']) {
            $object->volumetricWeight = $data['volumetricWeight'];
        } elseif (\array_key_exists('volumetricWeight', $data)) {
            $object->volumetricWeight = null;
        }
        if (\array_key_exists('billingCode', $data) && null !== $data['billingCode']) {
            $object->billingCode = $data['billingCode'];
        } elseif (\array_key_exists('billingCode', $data)) {
            $object->billingCode = null;
        }
        if (\array_key_exists('serviceContentCode', $data) && null !== $data['serviceContentCode']) {
            $object->serviceContentCode = $data['serviceContentCode'];
        } elseif (\array_key_exists('serviceContentCode', $data)) {
            $object->serviceContentCode = null;
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->customerDetails = $this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class, 'json', $context);
        } elseif (\array_key_exists('customerDetails', $data)) {
            $object->customerDetails = null;
        }
        if (\array_key_exists('originServiceArea', $data) && null !== $data['originServiceArea']) {
            $object->originServiceArea = $this->denormalizer->denormalize($data['originServiceArea'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class, 'json', $context);
        } elseif (\array_key_exists('originServiceArea', $data)) {
            $object->originServiceArea = null;
        }
        if (\array_key_exists('destinationServiceArea', $data) && null !== $data['destinationServiceArea']) {
            $object->destinationServiceArea = $this->denormalizer->denormalize($data['destinationServiceArea'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class, 'json', $context);
        } elseif (\array_key_exists('destinationServiceArea', $data)) {
            $object->destinationServiceArea = null;
        }
        if (\array_key_exists('dhlRoutingCode', $data) && null !== $data['dhlRoutingCode']) {
            $object->dhlRoutingCode = $data['dhlRoutingCode'];
        } elseif (\array_key_exists('dhlRoutingCode', $data)) {
            $object->dhlRoutingCode = null;
        }
        if (\array_key_exists('dhlRoutingDataId', $data) && null !== $data['dhlRoutingDataId']) {
            $object->dhlRoutingDataId = $data['dhlRoutingDataId'];
        } elseif (\array_key_exists('dhlRoutingDataId', $data)) {
            $object->dhlRoutingDataId = null;
        }
        if (\array_key_exists('deliveryDateCode', $data) && null !== $data['deliveryDateCode']) {
            $object->deliveryDateCode = $data['deliveryDateCode'];
        } elseif (\array_key_exists('deliveryDateCode', $data)) {
            $object->deliveryDateCode = null;
        }
        if (\array_key_exists('deliveryTimeCode', $data) && null !== $data['deliveryTimeCode']) {
            $object->deliveryTimeCode = $data['deliveryTimeCode'];
        } elseif (\array_key_exists('deliveryTimeCode', $data)) {
            $object->deliveryTimeCode = null;
        }
        if (\array_key_exists('productShortName', $data) && null !== $data['productShortName']) {
            $object->productShortName = $data['productShortName'];
        } elseif (\array_key_exists('productShortName', $data)) {
            $object->productShortName = null;
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class, 'json', $context);
            }
            $object->valueAddedServices = $values_1;
        } elseif (\array_key_exists('valueAddedServices', $data)) {
            $object->valueAddedServices = null;
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->pickupDetails = $this->denormalizer->denormalize($data['pickupDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class, 'json', $context);
        } elseif (\array_key_exists('pickupDetails', $data)) {
            $object->pickupDetails = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('serviceHandlingFeatureCodes', get_object_vars($data)) && null !== ($data->serviceHandlingFeatureCodes ?? null)) {
            $values = [];
            foreach ($data->serviceHandlingFeatureCodes as $value) {
                $values[] = $value;
            }
            $dataArray['serviceHandlingFeatureCodes'] = $values;
        }
        if (\array_key_exists('volumetricWeight', get_object_vars($data)) && null !== ($data->volumetricWeight ?? null)) {
            $dataArray['volumetricWeight'] = $data->volumetricWeight;
        }
        if (\array_key_exists('billingCode', get_object_vars($data)) && null !== ($data->billingCode ?? null)) {
            $dataArray['billingCode'] = $data->billingCode;
        }
        if (\array_key_exists('serviceContentCode', get_object_vars($data)) && null !== ($data->serviceContentCode ?? null)) {
            $dataArray['serviceContentCode'] = $data->serviceContentCode;
        }
        if (\array_key_exists('customerDetails', get_object_vars($data)) && null !== ($data->customerDetails ?? null)) {
            $normalized = $this->normalizer->normalize($data->customerDetails, 'json', $context);
            $dataArray['customerDetails'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('originServiceArea', get_object_vars($data)) && null !== ($data->originServiceArea ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->originServiceArea, 'json', $context);
            $dataArray['originServiceArea'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('destinationServiceArea', get_object_vars($data)) && null !== ($data->destinationServiceArea ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->destinationServiceArea, 'json', $context);
            $dataArray['destinationServiceArea'] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (\array_key_exists('dhlRoutingCode', get_object_vars($data)) && null !== ($data->dhlRoutingCode ?? null)) {
            $dataArray['dhlRoutingCode'] = $data->dhlRoutingCode;
        }
        if (\array_key_exists('dhlRoutingDataId', get_object_vars($data)) && null !== ($data->dhlRoutingDataId ?? null)) {
            $dataArray['dhlRoutingDataId'] = $data->dhlRoutingDataId;
        }
        if (\array_key_exists('deliveryDateCode', get_object_vars($data)) && null !== ($data->deliveryDateCode ?? null)) {
            $dataArray['deliveryDateCode'] = $data->deliveryDateCode;
        }
        if (\array_key_exists('deliveryTimeCode', get_object_vars($data)) && null !== ($data->deliveryTimeCode ?? null)) {
            $dataArray['deliveryTimeCode'] = $data->deliveryTimeCode;
        }
        if (\array_key_exists('productShortName', get_object_vars($data)) && null !== ($data->productShortName ?? null)) {
            $dataArray['productShortName'] = $data->productShortName;
        }
        if (\array_key_exists('valueAddedServices', get_object_vars($data)) && null !== ($data->valueAddedServices ?? null)) {
            $values_1 = [];
            foreach ($data->valueAddedServices as $value_1) {
                $normalized_3 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['valueAddedServices'] = $values_1;
        }
        if (\array_key_exists('pickupDetails', get_object_vars($data)) && null !== ($data->pickupDetails ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->pickupDetails, 'json', $context);
            $dataArray['pickupDetails'] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => false];
    }
}
