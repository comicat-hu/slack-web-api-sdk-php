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
class ObjsBotProfileIconsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsBotProfileIcons';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsBotProfileIcons';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsBotProfileIcons();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image_36', $data)) {
            $object->setImage36($data['image_36']);
        }
        if (\array_key_exists('image_48', $data)) {
            $object->setImage48($data['image_48']);
        }
        if (\array_key_exists('image_72', $data)) {
            $object->setImage72($data['image_72']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['image_36'] = $object->getImage36();
        $data['image_48'] = $object->getImage48();
        $data['image_72'] = $object->getImage72();
        return $data;
    }
}