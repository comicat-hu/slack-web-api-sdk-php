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
class ConversationsInvitePostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ConversationsInvitePostResponsedefault';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ConversationsInvitePostResponsedefault';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ConversationsInvitePostResponsedefault();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('callstack', $data)) {
            $object->setCallstack($data['callstack']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
        }
        if (\array_key_exists('errors', $data)) {
            $values = array();
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Comicat\\Slack\\Api\\Model\\ConversationsInvitePostResponsedefaultErrorsItem', 'json', $context);
            }
            $object->setErrors($values);
        }
        if (\array_key_exists('needed', $data)) {
            $object->setNeeded($data['needed']);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('provided', $data)) {
            $object->setProvided($data['provided']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCallstack()) {
            $data['callstack'] = $object->getCallstack();
        }
        if (null !== $object->getError()) {
            $data['error'] = $object->getError();
        }
        if (null !== $object->getErrors()) {
            $values = array();
            foreach ($object->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['errors'] = $values;
        }
        if (null !== $object->getNeeded()) {
            $data['needed'] = $object->getNeeded();
        }
        $data['ok'] = $object->getOk();
        if (null !== $object->getProvided()) {
            $data['provided'] = $object->getProvided();
        }
        return $data;
    }
}