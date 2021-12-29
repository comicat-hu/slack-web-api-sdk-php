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
class ChatScheduleMessagePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ChatScheduleMessagePostResponse200Message();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bot_id', $data)) {
            $object->setBotId($data['bot_id']);
        }
        if (\array_key_exists('bot_profile', $data)) {
            $object->setBotProfile($this->denormalizer->denormalize($data['bot_profile'], 'Comicat\\Slack\\Api\\Model\\ObjsBotProfile', 'json', $context));
        }
        if (\array_key_exists('team', $data)) {
            $object->setTeam($data['team']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['bot_id'] = $object->getBotId();
        if (null !== $object->getBotProfile()) {
            $data['bot_profile'] = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
        }
        $data['team'] = $object->getTeam();
        $data['text'] = $object->getText();
        $data['type'] = $object->getType();
        $data['user'] = $object->getUser();
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        return $data;
    }
}