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
class PinsListGetResponse200Item0ItemsItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem0';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem0';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem0();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->setCreatedBy($data['created_by']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'Comicat\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getCreatedBy()) {
            $data['created_by'] = $object->getCreatedBy();
        }
        if (null !== $object->getFile()) {
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}