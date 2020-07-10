<?php

namespace Comicat\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ObjsGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsGroup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsGroup();
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($data['creator']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_archived', $data)) {
            $object->setIsArchived($data['is_archived']);
        }
        if (\array_key_exists('is_deleted', $data)) {
            $object->setIsDeleted($data['is_deleted']);
        }
        if (\array_key_exists('is_group', $data)) {
            $object->setIsGroup($data['is_group']);
        }
        if (\array_key_exists('is_moved', $data)) {
            $object->setIsMoved($data['is_moved']);
        }
        if (\array_key_exists('is_mpim', $data)) {
            $object->setIsMpim($data['is_mpim']);
        }
        if (\array_key_exists('is_open', $data)) {
            $object->setIsOpen($data['is_open']);
        }
        if (\array_key_exists('is_pending_ext_shared', $data)) {
            $object->setIsPendingExtShared($data['is_pending_ext_shared']);
        }
        if (\array_key_exists('is_read_only', $data)) {
            $object->setIsReadOnly($data['is_read_only']);
        }
        if (\array_key_exists('is_thread_only', $data)) {
            $object->setIsThreadOnly($data['is_thread_only']);
        }
        if (\array_key_exists('last_read', $data)) {
            $object->setLastRead($data['last_read']);
        }
        if (\array_key_exists('latest', $data)) {
            $object->setLatest($data['latest']);
        }
        if (\array_key_exists('members', $data)) {
            $values = array();
            foreach ($data['members'] as $value) {
                $values[] = $value;
            }
            $object->setMembers($values);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('name_normalized', $data)) {
            $object->setNameNormalized($data['name_normalized']);
        }
        if (\array_key_exists('num_members', $data)) {
            $object->setNumMembers($data['num_members']);
        }
        if (\array_key_exists('parent_group', $data)) {
            $object->setParentGroup($data['parent_group']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('purpose', $data)) {
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'Comicat\\Slack\\Api\\Model\\ObjsGroupPurpose', 'json', $context));
        }
        if (\array_key_exists('topic', $data)) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], 'Comicat\\Slack\\Api\\Model\\ObjsGroupTopic', 'json', $context));
        }
        if (\array_key_exists('unread_count', $data)) {
            $object->setUnreadCount($data['unread_count']);
        }
        if (\array_key_exists('unread_count_display', $data)) {
            $object->setUnreadCountDisplay($data['unread_count_display']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        }
        if (null !== $object->getIsDeleted()) {
            $data['is_deleted'] = $object->getIsDeleted();
        }
        if (null !== $object->getIsGroup()) {
            $data['is_group'] = $object->getIsGroup();
        }
        if (null !== $object->getIsMoved()) {
            $data['is_moved'] = $object->getIsMoved();
        }
        if (null !== $object->getIsMpim()) {
            $data['is_mpim'] = $object->getIsMpim();
        }
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
        }
        if (null !== $object->getIsPendingExtShared()) {
            $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
        }
        if (null !== $object->getIsReadOnly()) {
            $data['is_read_only'] = $object->getIsReadOnly();
        }
        if (null !== $object->getIsThreadOnly()) {
            $data['is_thread_only'] = $object->getIsThreadOnly();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $object->getLatest();
        }
        if (null !== $object->getMembers()) {
            $values = array();
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data['members'] = $values;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNameNormalized()) {
            $data['name_normalized'] = $object->getNameNormalized();
        }
        if (null !== $object->getNumMembers()) {
            $data['num_members'] = $object->getNumMembers();
        }
        if (null !== $object->getParentGroup()) {
            $data['parent_group'] = $object->getParentGroup();
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getPurpose()) {
            $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        }
        if (null !== $object->getTopic()) {
            $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data['unread_count_display'] = $object->getUnreadCountDisplay();
        }
        return $data;
    }
}