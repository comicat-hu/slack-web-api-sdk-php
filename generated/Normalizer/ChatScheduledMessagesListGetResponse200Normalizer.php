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
class ChatScheduledMessagesListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ChatScheduledMessagesListGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('response_metadata', $data)) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'Comicat\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200ResponseMetadata', 'json', $context));
        }
        if (\array_key_exists('scheduled_messages', $data)) {
            $values = array();
            foreach ($data['scheduled_messages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Comicat\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem', 'json', $context);
            }
            $object->setScheduledMessages($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['ok'] = $object->getOk();
        $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        $values = array();
        foreach ($object->getScheduledMessages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['scheduled_messages'] = $values;
        return $data;
    }
}