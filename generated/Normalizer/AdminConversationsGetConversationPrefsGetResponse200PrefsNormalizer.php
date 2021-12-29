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
class AdminConversationsGetConversationPrefsGetResponse200PrefsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200Prefs';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200Prefs';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('can_thread', $data)) {
            $object->setCanThread($this->denormalizer->denormalize($data['can_thread'], 'Comicat\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread', 'json', $context));
        }
        if (\array_key_exists('who_can_post', $data)) {
            $object->setWhoCanPost($this->denormalizer->denormalize($data['who_can_post'], 'Comicat\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCanThread()) {
            $data['can_thread'] = $this->normalizer->normalize($object->getCanThread(), 'json', $context);
        }
        if (null !== $object->getWhoCanPost()) {
            $data['who_can_post'] = $this->normalizer->normalize($object->getWhoCanPost(), 'json', $context);
        }
        return $data;
    }
}