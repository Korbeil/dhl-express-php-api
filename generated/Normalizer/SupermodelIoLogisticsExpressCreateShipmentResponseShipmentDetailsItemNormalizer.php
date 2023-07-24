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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem();
        if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
            $data['volumetricWeight'] = (float) $data['volumetricWeight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('serviceHandlingFeatureCodes', $data) && null !== $data['serviceHandlingFeatureCodes']) {
            $values = [];
            foreach ($data['serviceHandlingFeatureCodes'] as $value) {
                $values[] = $value;
            }
            $object->setServiceHandlingFeatureCodes($values);
        } elseif (\array_key_exists('serviceHandlingFeatureCodes', $data) && null === $data['serviceHandlingFeatureCodes']) {
            $object->setServiceHandlingFeatureCodes(null);
        }
        if (\array_key_exists('volumetricWeight', $data) && null !== $data['volumetricWeight']) {
            $object->setVolumetricWeight($data['volumetricWeight']);
        } elseif (\array_key_exists('volumetricWeight', $data) && null === $data['volumetricWeight']) {
            $object->setVolumetricWeight(null);
        }
        if (\array_key_exists('billingCode', $data) && null !== $data['billingCode']) {
            $object->setBillingCode($data['billingCode']);
        } elseif (\array_key_exists('billingCode', $data) && null === $data['billingCode']) {
            $object->setBillingCode(null);
        }
        if (\array_key_exists('serviceContentCode', $data) && null !== $data['serviceContentCode']) {
            $object->setServiceContentCode($data['serviceContentCode']);
        } elseif (\array_key_exists('serviceContentCode', $data) && null === $data['serviceContentCode']) {
            $object->setServiceContentCode(null);
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails', 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('originServiceArea', $data) && null !== $data['originServiceArea']) {
            $object->setOriginServiceArea($this->denormalizer->denormalize($data['originServiceArea'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea', 'json', $context));
        } elseif (\array_key_exists('originServiceArea', $data) && null === $data['originServiceArea']) {
            $object->setOriginServiceArea(null);
        }
        if (\array_key_exists('destinationServiceArea', $data) && null !== $data['destinationServiceArea']) {
            $object->setDestinationServiceArea($this->denormalizer->denormalize($data['destinationServiceArea'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea', 'json', $context));
        } elseif (\array_key_exists('destinationServiceArea', $data) && null === $data['destinationServiceArea']) {
            $object->setDestinationServiceArea(null);
        }
        if (\array_key_exists('dhlRoutingCode', $data) && null !== $data['dhlRoutingCode']) {
            $object->setDhlRoutingCode($data['dhlRoutingCode']);
        } elseif (\array_key_exists('dhlRoutingCode', $data) && null === $data['dhlRoutingCode']) {
            $object->setDhlRoutingCode(null);
        }
        if (\array_key_exists('dhlRoutingDataId', $data) && null !== $data['dhlRoutingDataId']) {
            $object->setDhlRoutingDataId($data['dhlRoutingDataId']);
        } elseif (\array_key_exists('dhlRoutingDataId', $data) && null === $data['dhlRoutingDataId']) {
            $object->setDhlRoutingDataId(null);
        }
        if (\array_key_exists('deliveryDateCode', $data) && null !== $data['deliveryDateCode']) {
            $object->setDeliveryDateCode($data['deliveryDateCode']);
        } elseif (\array_key_exists('deliveryDateCode', $data) && null === $data['deliveryDateCode']) {
            $object->setDeliveryDateCode(null);
        }
        if (\array_key_exists('deliveryTimeCode', $data) && null !== $data['deliveryTimeCode']) {
            $object->setDeliveryTimeCode($data['deliveryTimeCode']);
        } elseif (\array_key_exists('deliveryTimeCode', $data) && null === $data['deliveryTimeCode']) {
            $object->setDeliveryTimeCode(null);
        }
        if (\array_key_exists('productShortName', $data) && null !== $data['productShortName']) {
            $object->setProductShortName($data['productShortName']);
        } elseif (\array_key_exists('productShortName', $data) && null === $data['productShortName']) {
            $object->setProductShortName(null);
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem', 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails', 'json', $context));
        } elseif (\array_key_exists('pickupDetails', $data) && null === $data['pickupDetails']) {
            $object->setPickupDetails(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('serviceHandlingFeatureCodes') && null !== $object->getServiceHandlingFeatureCodes()) {
            $values = [];
            foreach ($object->getServiceHandlingFeatureCodes() as $value) {
                $values[] = $value;
            }
            $data['serviceHandlingFeatureCodes'] = $values;
        }
        if ($object->isInitialized('volumetricWeight') && null !== $object->getVolumetricWeight()) {
            $data['volumetricWeight'] = $object->getVolumetricWeight();
        }
        if ($object->isInitialized('billingCode') && null !== $object->getBillingCode()) {
            $data['billingCode'] = $object->getBillingCode();
        }
        if ($object->isInitialized('serviceContentCode') && null !== $object->getServiceContentCode()) {
            $data['serviceContentCode'] = $object->getServiceContentCode();
        }
        if ($object->isInitialized('customerDetails') && null !== $object->getCustomerDetails()) {
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
        }
        if ($object->isInitialized('originServiceArea') && null !== $object->getOriginServiceArea()) {
            $data['originServiceArea'] = $this->normalizer->normalize($object->getOriginServiceArea(), 'json', $context);
        }
        if ($object->isInitialized('destinationServiceArea') && null !== $object->getDestinationServiceArea()) {
            $data['destinationServiceArea'] = $this->normalizer->normalize($object->getDestinationServiceArea(), 'json', $context);
        }
        if ($object->isInitialized('dhlRoutingCode') && null !== $object->getDhlRoutingCode()) {
            $data['dhlRoutingCode'] = $object->getDhlRoutingCode();
        }
        if ($object->isInitialized('dhlRoutingDataId') && null !== $object->getDhlRoutingDataId()) {
            $data['dhlRoutingDataId'] = $object->getDhlRoutingDataId();
        }
        if ($object->isInitialized('deliveryDateCode') && null !== $object->getDeliveryDateCode()) {
            $data['deliveryDateCode'] = $object->getDeliveryDateCode();
        }
        if ($object->isInitialized('deliveryTimeCode') && null !== $object->getDeliveryTimeCode()) {
            $data['deliveryTimeCode'] = $object->getDeliveryTimeCode();
        }
        if ($object->isInitialized('productShortName') && null !== $object->getProductShortName()) {
            $data['productShortName'] = $object->getProductShortName();
        }
        if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
            $values_1 = [];
            foreach ($object->getValueAddedServices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['valueAddedServices'] = $values_1;
        }
        if ($object->isInitialized('pickupDetails') && null !== $object->getPickupDetails()) {
            $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem' => false];
    }
}
