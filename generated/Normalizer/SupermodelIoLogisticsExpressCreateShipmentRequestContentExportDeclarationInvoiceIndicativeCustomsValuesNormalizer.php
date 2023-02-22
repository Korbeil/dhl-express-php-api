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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValuesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues();
        if (\array_key_exists('importCustomsDutyValue', $data) && \is_int($data['importCustomsDutyValue'])) {
            $data['importCustomsDutyValue'] = (float) $data['importCustomsDutyValue'];
        }
        if (\array_key_exists('importTaxesValue', $data) && \is_int($data['importTaxesValue'])) {
            $data['importTaxesValue'] = (float) $data['importTaxesValue'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('importCustomsDutyValue', $data) && null !== $data['importCustomsDutyValue']) {
            $object->setImportCustomsDutyValue($data['importCustomsDutyValue']);
        } elseif (\array_key_exists('importCustomsDutyValue', $data) && null === $data['importCustomsDutyValue']) {
            $object->setImportCustomsDutyValue(null);
        }
        if (\array_key_exists('importTaxesValue', $data) && null !== $data['importTaxesValue']) {
            $object->setImportTaxesValue($data['importTaxesValue']);
        } elseif (\array_key_exists('importTaxesValue', $data) && null === $data['importTaxesValue']) {
            $object->setImportTaxesValue(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('importCustomsDutyValue') && null !== $object->getImportCustomsDutyValue()) {
            $data['importCustomsDutyValue'] = $object->getImportCustomsDutyValue();
        }
        if ($object->isInitialized('importTaxesValue') && null !== $object->getImportTaxesValue()) {
            $data['importTaxesValue'] = $object->getImportTaxesValue();
        }

        return $data;
    }
}
