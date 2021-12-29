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
class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsMessageAttachmentsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fallback', $data)) {
            $object->setFallback($data['fallback']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('image_bytes', $data)) {
            $object->setImageBytes($data['image_bytes']);
        }
        if (\array_key_exists('image_height', $data)) {
            $object->setImageHeight($data['image_height']);
        }
        if (\array_key_exists('image_url', $data)) {
            $object->setImageUrl($data['image_url']);
        }
        if (\array_key_exists('image_width', $data)) {
            $object->setImageWidth($data['image_width']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFallback()) {
            $data['fallback'] = $object->getFallback();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getImageBytes()) {
            $data['image_bytes'] = $object->getImageBytes();
        }
        if (null !== $object->getImageHeight()) {
            $data['image_height'] = $object->getImageHeight();
        }
        if (null !== $object->getImageUrl()) {
            $data['image_url'] = $object->getImageUrl();
        }
        if (null !== $object->getImageWidth()) {
            $data['image_width'] = $object->getImageWidth();
        }
        return $data;
    }
}