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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('importCustomsDutyValue', $data) && \is_int($data['importCustomsDutyValue'])) {
            $data['importCustomsDutyValue'] = (float) $data['importCustomsDutyValue'];
        }
        if (\array_key_exists('importTaxesValue', $data) && \is_int($data['importTaxesValue'])) {
            $data['importTaxesValue'] = (float) $data['importTaxesValue'];
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

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('importCustomsDutyValue') && null !== $data->getImportCustomsDutyValue()) {
            $dataArray['importCustomsDutyValue'] = $data->getImportCustomsDutyValue();
        }
        if ($data->isInitialized('importTaxesValue') && null !== $data->getImportTaxesValue()) {
            $dataArray['importTaxesValue'] = $data->getImportTaxesValue();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class => false];
    }
}
