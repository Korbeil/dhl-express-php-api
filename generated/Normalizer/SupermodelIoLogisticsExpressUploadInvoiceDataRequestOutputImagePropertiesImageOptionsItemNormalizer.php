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

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }
        if (\array_key_exists('templateName', $data) && null !== $data['templateName']) {
            $object->setTemplateName($data['templateName']);
        } elseif (\array_key_exists('templateName', $data) && null === $data['templateName']) {
            $object->setTemplateName(null);
        }
        if (\array_key_exists('isRequested', $data) && null !== $data['isRequested']) {
            $object->setIsRequested($data['isRequested']);
        } elseif (\array_key_exists('isRequested', $data) && null === $data['isRequested']) {
            $object->setIsRequested(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['typeCode'] = $object->getTypeCode();
        if ($object->isInitialized('templateName') && null !== $object->getTemplateName()) {
            $data['templateName'] = $object->getTemplateName();
        }
        if ($object->isInitialized('isRequested') && null !== $object->getIsRequested()) {
            $data['isRequested'] = $object->getIsRequested();
        }

        return $data;
    }
}
