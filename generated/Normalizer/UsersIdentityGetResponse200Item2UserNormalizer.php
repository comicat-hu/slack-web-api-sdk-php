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
class UsersIdentityGetResponse200Item2UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2User';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\UsersIdentityGetResponse200Item2User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('image_192', $data)) {
            $object->setImage192($data['image_192']);
        }
        if (\array_key_exists('image_24', $data)) {
            $object->setImage24($data['image_24']);
        }
        if (\array_key_exists('image_32', $data)) {
            $object->setImage32($data['image_32']);
        }
        if (\array_key_exists('image_48', $data)) {
            $object->setImage48($data['image_48']);
        }
        if (\array_key_exists('image_512', $data)) {
            $object->setImage512($data['image_512']);
        }
        if (\array_key_exists('image_72', $data)) {
            $object->setImage72($data['image_72']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['image_192'] = $object->getImage192();
        $data['image_24'] = $object->getImage24();
        $data['image_32'] = $object->getImage32();
        $data['image_48'] = $object->getImage48();
        $data['image_512'] = $object->getImage512();
        $data['image_72'] = $object->getImage72();
        $data['name'] = $object->getName();
        return $data;
    }
}