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
class ConversationsHistoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ConversationsHistoryGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channel_actions_count', $data)) {
            $object->setChannelActionsCount($data['channel_actions_count']);
        }
        if (\array_key_exists('channel_actions_ts', $data)) {
            $object->setChannelActionsTs($data['channel_actions_ts']);
        }
        if (\array_key_exists('has_more', $data)) {
            $object->setHasMore($data['has_more']);
        }
        if (\array_key_exists('messages', $data)) {
            $values = array();
            foreach ($data['messages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Comicat\\Slack\\Api\\Model\\ObjsMessage', 'json', $context);
            }
            $object->setMessages($values);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('pin_count', $data)) {
            $object->setPinCount($data['pin_count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['channel_actions_count'] = $object->getChannelActionsCount();
        $data['channel_actions_ts'] = $object->getChannelActionsTs();
        $data['has_more'] = $object->getHasMore();
        $values = array();
        foreach ($object->getMessages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['messages'] = $values;
        $data['ok'] = $object->getOk();
        $data['pin_count'] = $object->getPinCount();
        return $data;
    }
}