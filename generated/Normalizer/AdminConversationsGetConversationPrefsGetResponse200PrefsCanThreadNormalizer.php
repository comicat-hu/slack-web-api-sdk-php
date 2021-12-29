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
class AdminConversationsGetConversationPrefsGetResponse200PrefsCanThreadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $values = array();
            foreach ($data['type'] as $value) {
                $values[] = $value;
            }
            $object->setType($values);
        }
        if (\array_key_exists('user', $data)) {
            $values_1 = array();
            foreach ($data['user'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUser($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $values = array();
            foreach ($object->getType() as $value) {
                $values[] = $value;
            }
            $data['type'] = $values;
        }
        if (null !== $object->getUser()) {
            $values_1 = array();
            foreach ($object->getUser() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['user'] = $values_1;
        }
        return $data;
    }
}