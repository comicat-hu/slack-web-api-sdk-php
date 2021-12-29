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
class BotsInfoGetResponse200BotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\BotsInfoGetResponse200Bot();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('app_id', $data)) {
            $object->setAppId($data['app_id']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('icons', $data)) {
            $object->setIcons($this->denormalizer->denormalize($data['icons'], 'Comicat\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('updated', $data)) {
            $object->setUpdated($data['updated']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['app_id'] = $object->getAppId();
        $data['deleted'] = $object->getDeleted();
        $data['icons'] = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        $data['updated'] = $object->getUpdated();
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        return $data;
    }
}