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
class UsersSetPhotoPostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\UsersSetPhotoPostResponsedefault();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('callstack', $data)) {
            $object->setCallstack($data['callstack']);
        }
        if (\array_key_exists('debug_step', $data)) {
            $object->setDebugStep($data['debug_step']);
        }
        if (\array_key_exists('dims', $data)) {
            $object->setDims($data['dims']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('time_ident', $data)) {
            $object->setTimeIdent($data['time_ident']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCallstack()) {
            $data['callstack'] = $object->getCallstack();
        }
        if (null !== $object->getDebugStep()) {
            $data['debug_step'] = $object->getDebugStep();
        }
        if (null !== $object->getDims()) {
            $data['dims'] = $object->getDims();
        }
        $data['error'] = $object->getError();
        $data['ok'] = $object->getOk();
        if (null !== $object->getTimeIdent()) {
            $data['time_ident'] = $object->getTimeIdent();
        }
        return $data;
    }
}