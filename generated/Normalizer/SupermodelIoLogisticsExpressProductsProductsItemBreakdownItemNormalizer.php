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

class SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
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

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
            $data['serviceCode'] = $object->getServiceCode();
        }
        if ($object->isInitialized('localServiceCode') && null !== $object->getLocalServiceCode()) {
            $data['localServiceCode'] = $object->getLocalServiceCode();
        }
        if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
            $data['typeCode'] = $object->getTypeCode();
        }
        if ($object->isInitialized('serviceTypeCode') && null !== $object->getServiceTypeCode()) {
            $data['serviceTypeCode'] = $object->getServiceTypeCode();
        }
        if ($object->isInitialized('isCustomerAgreement') && null !== $object->getIsCustomerAgreement()) {
            $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
        }
        if ($object->isInitialized('isMarketedService') && null !== $object->getIsMarketedService()) {
            $data['isMarketedService'] = $object->getIsMarketedService();
        }
        if ($object->isInitialized('isBillingServiceIndicator') && null !== $object->getIsBillingServiceIndicator()) {
            $data['isBillingServiceIndicator'] = $object->getIsBillingServiceIndicator();
        }

        return $data;
    }
}
