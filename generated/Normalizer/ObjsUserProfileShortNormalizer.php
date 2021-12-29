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
class ObjsUserProfileShortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsUserProfileShort';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsUserProfileShort';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsUserProfileShort();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avatar_hash', $data)) {
            $object->setAvatarHash($data['avatar_hash']);
        }
        if (\array_key_exists('display_name', $data)) {
            $object->setDisplayName($data['display_name']);
        }
        if (\array_key_exists('display_name_normalized', $data)) {
            $object->setDisplayNameNormalized($data['display_name_normalized']);
        }
        if (\array_key_exists('first_name', $data)) {
            $value = $data['first_name'];
            if (is_string($data['first_name'])) {
                $value = $data['first_name'];
            }
            $object->setFirstName($value);
        }
        if (\array_key_exists('image_72', $data)) {
            $object->setImage72($data['image_72']);
        }
        if (\array_key_exists('is_restricted', $data)) {
            $object->setIsRestricted($data['is_restricted']);
        }
        if (\array_key_exists('is_ultra_restricted', $data)) {
            $object->setIsUltraRestricted($data['is_ultra_restricted']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('real_name', $data)) {
            $object->setRealName($data['real_name']);
        }
        if (\array_key_exists('real_name_normalized', $data)) {
            $object->setRealNameNormalized($data['real_name_normalized']);
        }
        if (\array_key_exists('team', $data)) {
            $object->setTeam($data['team']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['avatar_hash'] = $object->getAvatarHash();
        $data['display_name'] = $object->getDisplayName();
        if (null !== $object->getDisplayNameNormalized()) {
            $data['display_name_normalized'] = $object->getDisplayNameNormalized();
        }
        $value = $object->getFirstName();
        if (is_string($object->getFirstName())) {
            $value = $object->getFirstName();
        }
        $data['first_name'] = $value;
        $data['image_72'] = $object->getImage72();
        $data['is_restricted'] = $object->getIsRestricted();
        $data['is_ultra_restricted'] = $object->getIsUltraRestricted();
        $data['name'] = $object->getName();
        $data['real_name'] = $object->getRealName();
        if (null !== $object->getRealNameNormalized()) {
            $data['real_name_normalized'] = $object->getRealNameNormalized();
        }
        $data['team'] = $object->getTeam();
        return $data;
    }
}