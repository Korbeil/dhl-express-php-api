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

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('numberOfCopies', $data) && \is_int($data['numberOfCopies'])) {
            $data['numberOfCopies'] = (float) $data['numberOfCopies'];
        }
        if (\array_key_exists('isRequested', $data) && \is_int($data['isRequested'])) {
            $data['isRequested'] = (bool) $data['isRequested'];
        }
        if (\array_key_exists('hideAccountNumber', $data) && \is_int($data['hideAccountNumber'])) {
            $data['hideAccountNumber'] = (bool) $data['hideAccountNumber'];
        }
        if (\array_key_exists('renderDHLLogo', $data) && \is_int($data['renderDHLLogo'])) {
            $data['renderDHLLogo'] = (bool) $data['renderDHLLogo'];
        }
        if (\array_key_exists('fitLabelsToA4', $data) && \is_int($data['fitLabelsToA4'])) {
            $data['fitLabelsToA4'] = (bool) $data['fitLabelsToA4'];
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }
        if (\array_key_exists('templateName', $data) && null !== $data['templateName']) {
            $object->templateName = $data['templateName'];
        } elseif (\array_key_exists('templateName', $data)) {
            $object->templateName = null;
        }
        if (\array_key_exists('isRequested', $data) && null !== $data['isRequested']) {
            $object->isRequested = $data['isRequested'];
        } elseif (\array_key_exists('isRequested', $data)) {
            $object->isRequested = null;
        }
        if (\array_key_exists('hideAccountNumber', $data) && null !== $data['hideAccountNumber']) {
            $object->hideAccountNumber = $data['hideAccountNumber'];
        } elseif (\array_key_exists('hideAccountNumber', $data)) {
            $object->hideAccountNumber = null;
        }
        if (\array_key_exists('numberOfCopies', $data) && null !== $data['numberOfCopies']) {
            $object->numberOfCopies = $data['numberOfCopies'];
        } elseif (\array_key_exists('numberOfCopies', $data)) {
            $object->numberOfCopies = null;
        }
        if (\array_key_exists('invoiceType', $data) && null !== $data['invoiceType']) {
            $object->invoiceType = $data['invoiceType'];
        } elseif (\array_key_exists('invoiceType', $data)) {
            $object->invoiceType = null;
        }
        if (\array_key_exists('languageCode', $data) && null !== $data['languageCode']) {
            $object->languageCode = $data['languageCode'];
        } elseif (\array_key_exists('languageCode', $data)) {
            $object->languageCode = null;
        }
        if (\array_key_exists('languageCountryCode', $data) && null !== $data['languageCountryCode']) {
            $object->languageCountryCode = $data['languageCountryCode'];
        } elseif (\array_key_exists('languageCountryCode', $data)) {
            $object->languageCountryCode = null;
        }
        if (\array_key_exists('encodingFormat', $data) && null !== $data['encodingFormat']) {
            $object->encodingFormat = $data['encodingFormat'];
        } elseif (\array_key_exists('encodingFormat', $data)) {
            $object->encodingFormat = null;
        }
        if (\array_key_exists('renderDHLLogo', $data) && null !== $data['renderDHLLogo']) {
            $object->renderDHLLogo = $data['renderDHLLogo'];
        } elseif (\array_key_exists('renderDHLLogo', $data)) {
            $object->renderDHLLogo = null;
        }
        if (\array_key_exists('fitLabelsToA4', $data) && null !== $data['fitLabelsToA4']) {
            $object->fitLabelsToA4 = $data['fitLabelsToA4'];
        } elseif (\array_key_exists('fitLabelsToA4', $data)) {
            $object->fitLabelsToA4 = null;
        }
        if (\array_key_exists('labelFreeText', $data) && null !== $data['labelFreeText']) {
            $object->labelFreeText = $data['labelFreeText'];
        } elseif (\array_key_exists('labelFreeText', $data)) {
            $object->labelFreeText = null;
        }
        if (\array_key_exists('labelCustomerDataText', $data) && null !== $data['labelCustomerDataText']) {
            $object->labelCustomerDataText = $data['labelCustomerDataText'];
        } elseif (\array_key_exists('labelCustomerDataText', $data)) {
            $object->labelCustomerDataText = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['typeCode'] = $data->typeCode;
        if (\array_key_exists('templateName', get_object_vars($data)) && null !== ($data->templateName ?? null)) {
            $dataArray['templateName'] = $data->templateName;
        }
        if (\array_key_exists('isRequested', get_object_vars($data)) && null !== ($data->isRequested ?? null)) {
            $dataArray['isRequested'] = $data->isRequested;
        }
        if (\array_key_exists('hideAccountNumber', get_object_vars($data)) && null !== ($data->hideAccountNumber ?? null)) {
            $dataArray['hideAccountNumber'] = $data->hideAccountNumber;
        }
        if (\array_key_exists('numberOfCopies', get_object_vars($data)) && null !== ($data->numberOfCopies ?? null)) {
            $dataArray['numberOfCopies'] = $data->numberOfCopies;
        }
        if (\array_key_exists('invoiceType', get_object_vars($data)) && null !== ($data->invoiceType ?? null)) {
            $dataArray['invoiceType'] = $data->invoiceType;
        }
        if (\array_key_exists('languageCode', get_object_vars($data)) && null !== ($data->languageCode ?? null)) {
            $dataArray['languageCode'] = $data->languageCode;
        }
        if (\array_key_exists('languageCountryCode', get_object_vars($data)) && null !== ($data->languageCountryCode ?? null)) {
            $dataArray['languageCountryCode'] = $data->languageCountryCode;
        }
        if (\array_key_exists('encodingFormat', get_object_vars($data)) && null !== ($data->encodingFormat ?? null)) {
            $dataArray['encodingFormat'] = $data->encodingFormat;
        }
        if (\array_key_exists('renderDHLLogo', get_object_vars($data)) && null !== ($data->renderDHLLogo ?? null)) {
            $dataArray['renderDHLLogo'] = $data->renderDHLLogo;
        }
        if (\array_key_exists('fitLabelsToA4', get_object_vars($data)) && null !== ($data->fitLabelsToA4 ?? null)) {
            $dataArray['fitLabelsToA4'] = $data->fitLabelsToA4;
        }
        if (\array_key_exists('labelFreeText', get_object_vars($data)) && null !== ($data->labelFreeText ?? null)) {
            $dataArray['labelFreeText'] = $data->labelFreeText;
        }
        if (\array_key_exists('labelCustomerDataText', get_object_vars($data)) && null !== ($data->labelCustomerDataText ?? null)) {
            $dataArray['labelCustomerDataText'] = $data->labelCustomerDataText;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => false];
    }
}
