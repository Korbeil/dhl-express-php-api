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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem();
        if (\array_key_exists('numberOfCopies', $data) && \is_int($data['numberOfCopies'])) {
            $data['numberOfCopies'] = (float) $data['numberOfCopies'];
        }
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
        if ($object->isInitialized('hideAccountNumber') && null !== $object->getHideAccountNumber()) {
            $data['hideAccountNumber'] = $object->getHideAccountNumber();
        }
        if ($object->isInitialized('numberOfCopies') && null !== $object->getNumberOfCopies()) {
            $data['numberOfCopies'] = $object->getNumberOfCopies();
        }
        if ($object->isInitialized('invoiceType') && null !== $object->getInvoiceType()) {
            $data['invoiceType'] = $object->getInvoiceType();
        }
        if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        if ($object->isInitialized('languageCountryCode') && null !== $object->getLanguageCountryCode()) {
            $data['languageCountryCode'] = $object->getLanguageCountryCode();
        }
        if ($object->isInitialized('encodingFormat') && null !== $object->getEncodingFormat()) {
            $data['encodingFormat'] = $object->getEncodingFormat();
        }
        if ($object->isInitialized('renderDHLLogo') && null !== $object->getRenderDHLLogo()) {
            $data['renderDHLLogo'] = $object->getRenderDHLLogo();
        }
        if ($object->isInitialized('fitLabelsToA4') && null !== $object->getFitLabelsToA4()) {
            $data['fitLabelsToA4'] = $object->getFitLabelsToA4();
        }
        if ($object->isInitialized('labelFreeText') && null !== $object->getLabelFreeText()) {
            $data['labelFreeText'] = $object->getLabelFreeText();
        }
        if ($object->isInitialized('labelCustomerDataText') && null !== $object->getLabelCustomerDataText()) {
            $data['labelCustomerDataText'] = $object->getLabelCustomerDataText();
        }

        return $data;
    }
}
