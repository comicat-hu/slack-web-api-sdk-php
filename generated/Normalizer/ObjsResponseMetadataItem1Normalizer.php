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
class ObjsResponseMetadataItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsResponseMetadataItem1';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsResponseMetadataItem1';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsResponseMetadataItem1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('messages', $data)) {
            $values = array();
            foreach ($data['messages'] as $value) {
                $values[] = $value;
            }
            $object->setMessages($values);
        }
        if (\array_key_exists('warnings', $data)) {
            $values_1 = array();
            foreach ($data['warnings'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWarnings($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getMessages() as $value) {
            $values[] = $value;
        }
        $data['messages'] = $values;
        $values_1 = array();
        foreach ($object->getWarnings() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['warnings'] = $values_1;
        return $data;
    }
}