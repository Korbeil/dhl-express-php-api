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

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('postalAddress', $data) && null !== $data['postalAddress']) {
            $object->setPostalAddress($this->denormalizer->denormalize($data['postalAddress'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAddress', 'json', $context));
        } elseif (\array_key_exists('postalAddress', $data) && null === $data['postalAddress']) {
            $object->setPostalAddress(null);
        }
        if (\array_key_exists('contactInformation', $data) && null !== $data['contactInformation']) {
            $object->setContactInformation($this->denormalizer->denormalize($data['contactInformation'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressContact', 'json', $context));
        } elseif (\array_key_exists('contactInformation', $data) && null === $data['contactInformation']) {
            $object->setContactInformation(null);
        }
        if (\array_key_exists('registrationNumbers', $data) && null !== $data['registrationNumbers']) {
            $values = [];
            foreach ($data['registrationNumbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRegistrationNumbers', 'json', $context);
            }
            $object->setRegistrationNumbers($values);
        } elseif (\array_key_exists('registrationNumbers', $data) && null === $data['registrationNumbers']) {
            $object->setRegistrationNumbers(null);
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['postalAddress'] = $this->normalizer->normalize($object->getPostalAddress(), 'json', $context);
        $data['contactInformation'] = $this->normalizer->normalize($object->getContactInformation(), 'json', $context);
        if ($object->isInitialized('registrationNumbers') && null !== $object->getRegistrationNumbers()) {
            $values = [];
            foreach ($object->getRegistrationNumbers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['registrationNumbers'] = $values;
        }
        if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
            $data['typeCode'] = $object->getTypeCode();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails' => false];
    }
}
