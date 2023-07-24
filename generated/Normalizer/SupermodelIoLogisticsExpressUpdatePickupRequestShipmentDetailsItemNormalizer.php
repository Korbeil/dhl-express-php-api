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

class SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem();
        if (\array_key_exists('declaredValue', $data) && \is_int($data['declaredValue'])) {
            $data['declaredValue'] = (float) $data['declaredValue'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAccount', 'json', $context);
            }
            $object->setAccounts($values);
        } elseif (\array_key_exists('accounts', $data) && null === $data['accounts']) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServicesRates', 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
        } elseif (\array_key_exists('isCustomsDeclarable', $data) && null === $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable(null);
        }
        if (\array_key_exists('declaredValue', $data) && null !== $data['declaredValue']) {
            $object->setDeclaredValue($data['declaredValue']);
        } elseif (\array_key_exists('declaredValue', $data) && null === $data['declaredValue']) {
            $object->setDeclaredValue(null);
        }
        if (\array_key_exists('declaredValueCurrency', $data) && null !== $data['declaredValueCurrency']) {
            $object->setDeclaredValueCurrency($data['declaredValueCurrency']);
        } elseif (\array_key_exists('declaredValueCurrency', $data) && null === $data['declaredValueCurrency']) {
            $object->setDeclaredValueCurrency(null);
        }
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement($data['unitOfMeasurement']);
        } elseif (\array_key_exists('unitOfMeasurement', $data) && null === $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement(null);
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
        } elseif (\array_key_exists('shipmentTrackingNumber', $data) && null === $data['shipmentTrackingNumber']) {
            $object->setShipmentTrackingNumber(null);
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_2 = [];
            foreach ($data['packages'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackageRR', 'json', $context);
            }
            $object->setPackages($values_2);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['productCode'] = $object->getProductCode();
        if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
            $data['localProductCode'] = $object->getLocalProductCode();
        }
        if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
        }
        if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
            $values_1 = [];
            foreach ($object->getValueAddedServices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['valueAddedServices'] = $values_1;
        }
        $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
        if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
            $data['declaredValue'] = $object->getDeclaredValue();
        }
        if ($object->isInitialized('declaredValueCurrency') && null !== $object->getDeclaredValueCurrency()) {
            $data['declaredValueCurrency'] = $object->getDeclaredValueCurrency();
        }
        $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
        if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
            $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
        }
        $values_2 = [];
        foreach ($object->getPackages() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['packages'] = $values_2;

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem' => false];
    }
}
