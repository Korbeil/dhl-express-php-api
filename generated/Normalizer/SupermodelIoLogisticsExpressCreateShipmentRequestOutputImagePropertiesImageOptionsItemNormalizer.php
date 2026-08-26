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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
        if (\array_key_exists('hideAccountNumber', $data) && null !== $data['hideAccountNumber']) {
            $object->setHideAccountNumber($data['hideAccountNumber']);
        } elseif (\array_key_exists('hideAccountNumber', $data) && null === $data['hideAccountNumber']) {
            $object->setHideAccountNumber(null);
        }
        if (\array_key_exists('numberOfCopies', $data) && null !== $data['numberOfCopies']) {
            $object->setNumberOfCopies($data['numberOfCopies']);
        } elseif (\array_key_exists('numberOfCopies', $data) && null === $data['numberOfCopies']) {
            $object->setNumberOfCopies(null);
        }
        if (\array_key_exists('invoiceType', $data) && null !== $data['invoiceType']) {
            $object->setInvoiceType($data['invoiceType']);
        } elseif (\array_key_exists('invoiceType', $data) && null === $data['invoiceType']) {
            $object->setInvoiceType(null);
        }
        if (\array_key_exists('languageCode', $data) && null !== $data['languageCode']) {
            $object->setLanguageCode($data['languageCode']);
        } elseif (\array_key_exists('languageCode', $data) && null === $data['languageCode']) {
            $object->setLanguageCode(null);
        }
        if (\array_key_exists('languageCountryCode', $data) && null !== $data['languageCountryCode']) {
            $object->setLanguageCountryCode($data['languageCountryCode']);
        } elseif (\array_key_exists('languageCountryCode', $data) && null === $data['languageCountryCode']) {
            $object->setLanguageCountryCode(null);
        }
        if (\array_key_exists('encodingFormat', $data) && null !== $data['encodingFormat']) {
            $object->setEncodingFormat($data['encodingFormat']);
        } elseif (\array_key_exists('encodingFormat', $data) && null === $data['encodingFormat']) {
            $object->setEncodingFormat(null);
        }
        if (\array_key_exists('renderDHLLogo', $data) && null !== $data['renderDHLLogo']) {
            $object->setRenderDHLLogo($data['renderDHLLogo']);
        } elseif (\array_key_exists('renderDHLLogo', $data) && null === $data['renderDHLLogo']) {
            $object->setRenderDHLLogo(null);
        }
        if (\array_key_exists('fitLabelsToA4', $data) && null !== $data['fitLabelsToA4']) {
            $object->setFitLabelsToA4($data['fitLabelsToA4']);
        } elseif (\array_key_exists('fitLabelsToA4', $data) && null === $data['fitLabelsToA4']) {
            $object->setFitLabelsToA4(null);
        }
        if (\array_key_exists('labelFreeText', $data) && null !== $data['labelFreeText']) {
            $object->setLabelFreeText($data['labelFreeText']);
        } elseif (\array_key_exists('labelFreeText', $data) && null === $data['labelFreeText']) {
            $object->setLabelFreeText(null);
        }
        if (\array_key_exists('labelCustomerDataText', $data) && null !== $data['labelCustomerDataText']) {
            $object->setLabelCustomerDataText($data['labelCustomerDataText']);
        } elseif (\array_key_exists('labelCustomerDataText', $data) && null === $data['labelCustomerDataText']) {
            $object->setLabelCustomerDataText(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['typeCode'] = $data->getTypeCode();
        if ($data->isInitialized('templateName') && null !== $data->getTemplateName()) {
            $dataArray['templateName'] = $data->getTemplateName();
        }
        if ($data->isInitialized('isRequested') && null !== $data->getIsRequested()) {
            $dataArray['isRequested'] = $data->getIsRequested();
        }
        if ($data->isInitialized('hideAccountNumber') && null !== $data->getHideAccountNumber()) {
            $dataArray['hideAccountNumber'] = $data->getHideAccountNumber();
        }
        if ($data->isInitialized('numberOfCopies') && null !== $data->getNumberOfCopies()) {
            $dataArray['numberOfCopies'] = $data->getNumberOfCopies();
        }
        if ($data->isInitialized('invoiceType') && null !== $data->getInvoiceType()) {
            $dataArray['invoiceType'] = $data->getInvoiceType();
        }
        if ($data->isInitialized('languageCode') && null !== $data->getLanguageCode()) {
            $dataArray['languageCode'] = $data->getLanguageCode();
        }
        if ($data->isInitialized('languageCountryCode') && null !== $data->getLanguageCountryCode()) {
            $dataArray['languageCountryCode'] = $data->getLanguageCountryCode();
        }
        if ($data->isInitialized('encodingFormat') && null !== $data->getEncodingFormat()) {
            $dataArray['encodingFormat'] = $data->getEncodingFormat();
        }
        if ($data->isInitialized('renderDHLLogo') && null !== $data->getRenderDHLLogo()) {
            $dataArray['renderDHLLogo'] = $data->getRenderDHLLogo();
        }
        if ($data->isInitialized('fitLabelsToA4') && null !== $data->getFitLabelsToA4()) {
            $dataArray['fitLabelsToA4'] = $data->getFitLabelsToA4();
        }
        if ($data->isInitialized('labelFreeText') && null !== $data->getLabelFreeText()) {
            $dataArray['labelFreeText'] = $data->getLabelFreeText();
        }
        if ($data->isInitialized('labelCustomerDataText') && null !== $data->getLabelCustomerDataText()) {
            $dataArray['labelCustomerDataText'] = $data->getLabelCustomerDataText();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => false];
    }
}
