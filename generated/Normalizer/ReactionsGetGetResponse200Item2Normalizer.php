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
class ReactionsGetGetResponse200Item2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ReactionsGetGetResponse200Item2';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ReactionsGetGetResponse200Item2';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ReactionsGetGetResponse200Item2();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Comicat\\Slack\\Api\\Model\\ObjsComment', 'json', $context));
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'Comicat\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        $data['ok'] = $object->getOk();
        $data['type'] = $object->getType();
        return $data;
    }
}