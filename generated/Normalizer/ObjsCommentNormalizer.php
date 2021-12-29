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
class ObjsCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsComment';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsComment';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsComment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_intro', $data)) {
            $object->setIsIntro($data['is_intro']);
        }
        if (\array_key_exists('is_starred', $data)) {
            $object->setIsStarred($data['is_starred']);
        }
        if (\array_key_exists('num_stars', $data)) {
            $object->setNumStars($data['num_stars']);
        }
        if (\array_key_exists('pinned_info', $data)) {
            $object->setPinnedInfo($data['pinned_info']);
        }
        if (\array_key_exists('pinned_to', $data)) {
            $values = array();
            foreach ($data['pinned_to'] as $value) {
                $values[] = $value;
            }
            $object->setPinnedTo($values);
        }
        if (\array_key_exists('reactions', $data)) {
            $values_1 = array();
            foreach ($data['reactions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Comicat\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_1);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp($data['timestamp']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['comment'] = $object->getComment();
        $data['created'] = $object->getCreated();
        $data['id'] = $object->getId();
        $data['is_intro'] = $object->getIsIntro();
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getNumStars()) {
            $data['num_stars'] = $object->getNumStars();
        }
        if (null !== $object->getPinnedInfo()) {
            $data['pinned_info'] = $object->getPinnedInfo();
        }
        if (null !== $object->getPinnedTo()) {
            $values = array();
            foreach ($object->getPinnedTo() as $value) {
                $values[] = $value;
            }
            $data['pinned_to'] = $values;
        }
        if (null !== $object->getReactions()) {
            $values_1 = array();
            foreach ($object->getReactions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['reactions'] = $values_1;
        }
        $data['timestamp'] = $object->getTimestamp();
        $data['user'] = $object->getUser();
        return $data;
    }
}