<?php

namespace Korbeil\DHLExpress\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['typeCode'] = $object->getTypeCode();
        if (null !== $object->getTemplateName()) {
            $data['templateName'] = $object->getTemplateName();
        }
        if (null !== $object->getIsRequested()) {
            $data['isRequested'] = $object->getIsRequested();
        }
        if (null !== $object->getHideAccountNumber()) {
            $data['hideAccountNumber'] = $object->getHideAccountNumber();
        }
        if (null !== $object->getNumberOfCopies()) {
            $data['numberOfCopies'] = $object->getNumberOfCopies();
        }
        if (null !== $object->getInvoiceType()) {
            $data['invoiceType'] = $object->getInvoiceType();
        }
        if (null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        if (null !== $object->getLanguageCountryCode()) {
            $data['languageCountryCode'] = $object->getLanguageCountryCode();
        }
        if (null !== $object->getEncodingFormat()) {
            $data['encodingFormat'] = $object->getEncodingFormat();
        }
        if (null !== $object->getRenderDHLLogo()) {
            $data['renderDHLLogo'] = $object->getRenderDHLLogo();
        }
        if (null !== $object->getFitLabelsToA4()) {
            $data['fitLabelsToA4'] = $object->getFitLabelsToA4();
        }
        if (null !== $object->getLabelFreeText()) {
            $data['labelFreeText'] = $object->getLabelFreeText();
        }
        if (null !== $object->getLabelCustomerDataText()) {
            $data['labelCustomerDataText'] = $object->getLabelCustomerDataText();
        }

        return $data;
    }
}
