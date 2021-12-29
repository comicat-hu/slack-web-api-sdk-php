<?php

namespace Comicat\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Comicat\Slack\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ObjsTeamProfileFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsTeamProfileField';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsTeamProfileField';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsTeamProfileField();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('field_name', $data)) {
            $value = $data['field_name'];
            if (is_string($data['field_name'])) {
                $value = $data['field_name'];
            }
            $object->setFieldName($value);
        }
        if (\array_key_exists('hint', $data)) {
            $object->setHint($data['hint']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_hidden', $data)) {
            $object->setIsHidden($data['is_hidden']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('options', $data)) {
            $object->setOptions($data['options']);
        }
        if (\array_key_exists('ordering', $data)) {
            $object->setOrdering($data['ordering']);
        }
        if (\array_key_exists('possible_values', $data)) {
            $value_1 = $data['possible_values'];
            if (is_array($data['possible_values']) && $this->isOnlyNumericKeys($data['possible_values'])) {
                $values = array();
                foreach ($data['possible_values'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            }
            $object->setPossibleValues($value_1);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFieldName()) {
            $value = $object->getFieldName();
            if (is_string($object->getFieldName())) {
                $value = $object->getFieldName();
            }
            $data['field_name'] = $value;
        }
        $data['hint'] = $object->getHint();
        $data['id'] = $object->getId();
        if (null !== $object->getIsHidden()) {
            $data['is_hidden'] = $object->getIsHidden();
        }
        $data['label'] = $object->getLabel();
        if (null !== $object->getOptions()) {
            $data['options'] = $object->getOptions();
        }
        $data['ordering'] = $object->getOrdering();
        if (null !== $object->getPossibleValues()) {
            $value_1 = $object->getPossibleValues();
            if (is_array($object->getPossibleValues())) {
                $values = array();
                foreach ($object->getPossibleValues() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            }
            $data['possible_values'] = $value_1;
        }
        $data['type'] = $object->getType();
        return $data;
    }
}