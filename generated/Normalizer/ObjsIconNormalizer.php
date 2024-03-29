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
class ObjsIconNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsIcon';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsIcon';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsIcon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image_102', $data)) {
            $object->setImage102($data['image_102']);
        }
        if (\array_key_exists('image_132', $data)) {
            $object->setImage132($data['image_132']);
        }
        if (\array_key_exists('image_230', $data)) {
            $object->setImage230($data['image_230']);
        }
        if (\array_key_exists('image_34', $data)) {
            $object->setImage34($data['image_34']);
        }
        if (\array_key_exists('image_44', $data)) {
            $object->setImage44($data['image_44']);
        }
        if (\array_key_exists('image_68', $data)) {
            $object->setImage68($data['image_68']);
        }
        if (\array_key_exists('image_88', $data)) {
            $object->setImage88($data['image_88']);
        }
        if (\array_key_exists('image_default', $data)) {
            $object->setImageDefault($data['image_default']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getImage102()) {
            $data['image_102'] = $object->getImage102();
        }
        if (null !== $object->getImage132()) {
            $data['image_132'] = $object->getImage132();
        }
        if (null !== $object->getImage230()) {
            $data['image_230'] = $object->getImage230();
        }
        if (null !== $object->getImage34()) {
            $data['image_34'] = $object->getImage34();
        }
        if (null !== $object->getImage44()) {
            $data['image_44'] = $object->getImage44();
        }
        if (null !== $object->getImage68()) {
            $data['image_68'] = $object->getImage68();
        }
        if (null !== $object->getImage88()) {
            $data['image_88'] = $object->getImage88();
        }
        if (null !== $object->getImageDefault()) {
            $data['image_default'] = $object->getImageDefault();
        }
        return $data;
    }
}