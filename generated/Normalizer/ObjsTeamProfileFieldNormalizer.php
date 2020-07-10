<?php

namespace Comicat\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
        if (\array_key_exists('field_name', $data)) {
            $object->setFieldName($data['field_name']);
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
            $values = array();
            foreach ($data['options'] as $value) {
                $values[] = $value;
            }
            $object->setOptions($values);
        }
        if (\array_key_exists('ordering', $data)) {
            $object->setOrdering($data['ordering']);
        }
        if (\array_key_exists('possible_values', $data)) {
            $values_1 = array();
            foreach ($data['possible_values'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPossibleValues($values_1);
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
            $data['field_name'] = $object->getFieldName();
        }
        if (null !== $object->getHint()) {
            $data['hint'] = $object->getHint();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsHidden()) {
            $data['is_hidden'] = $object->getIsHidden();
        }
        if (null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if (null !== $object->getOptions()) {
            $values = array();
            foreach ($object->getOptions() as $value) {
                $values[] = $value;
            }
            $data['options'] = $values;
        }
        if (null !== $object->getOrdering()) {
            $data['ordering'] = $object->getOrdering();
        }
        if (null !== $object->getPossibleValues()) {
            $values_1 = array();
            foreach ($object->getPossibleValues() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['possible_values'] = $values_1;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}