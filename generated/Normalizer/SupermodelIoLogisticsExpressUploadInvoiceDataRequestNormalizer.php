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

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequest' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('plannedShipDate', $data) && null !== $data['plannedShipDate']) {
            $object->setPlannedShipDate($data['plannedShipDate']);
        } elseif (\array_key_exists('plannedShipDate', $data) && null === $data['plannedShipDate']) {
            $object->setPlannedShipDate(null);
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
        if (\array_key_exists('content', $data) && null !== $data['content']) {
            $object->setContent($this->denormalizer->denormalize($data['content'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent', 'json', $context));
        } elseif (\array_key_exists('content', $data) && null === $data['content']) {
            $object->setContent(null);
        }
        if (\array_key_exists('outputImageProperties', $data) && null !== $data['outputImageProperties']) {
            $object->setOutputImageProperties($this->denormalizer->denormalize($data['outputImageProperties'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties', 'json', $context));
        } elseif (\array_key_exists('outputImageProperties', $data) && null === $data['outputImageProperties']) {
            $object->setOutputImageProperties(null);
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails', 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('plannedShipDate') && null !== $object->getPlannedShipDate()) {
            $data['plannedShipDate'] = $object->getPlannedShipDate();
        }
        if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
        }
        $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
        if ($object->isInitialized('outputImageProperties') && null !== $object->getOutputImageProperties()) {
            $data['outputImageProperties'] = $this->normalizer->normalize($object->getOutputImageProperties(), 'json', $context);
        }
        if ($object->isInitialized('customerDetails') && null !== $object->getCustomerDetails()) {
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequest' => false];
    }
}
