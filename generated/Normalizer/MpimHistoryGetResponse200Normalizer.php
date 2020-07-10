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
class MpimHistoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\MpimHistoryGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\MpimHistoryGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\MpimHistoryGetResponse200();
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
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getChannelActionsCount()) {
            $data['channel_actions_count'] = $object->getChannelActionsCount();
        }
        if (null !== $object->getChannelActionsTs()) {
            $data['channel_actions_ts'] = $object->getChannelActionsTs();
        }
        if (null !== $object->getHasMore()) {
            $data['has_more'] = $object->getHasMore();
        }
        if (null !== $object->getMessages()) {
            $values = array();
            foreach ($object->getMessages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['messages'] = $values;
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        return $data;
    }
}