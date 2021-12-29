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
class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsChannel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsChannel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsChannel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accepted_user', $data)) {
            $object->setAcceptedUser($data['accepted_user']);
        }
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
        if (\array_key_exists('is_channel', $data)) {
            $object->setIsChannel($data['is_channel']);
        }
        if (\array_key_exists('is_frozen', $data)) {
            $object->setIsFrozen($data['is_frozen']);
        }
        if (\array_key_exists('is_general', $data)) {
            $object->setIsGeneral($data['is_general']);
        }
        if (\array_key_exists('is_member', $data)) {
            $object->setIsMember($data['is_member']);
        }
        if (\array_key_exists('is_moved', $data)) {
            $object->setIsMoved($data['is_moved']);
        }
        if (\array_key_exists('is_mpim', $data)) {
            $object->setIsMpim($data['is_mpim']);
        }
        if (\array_key_exists('is_non_threadable', $data)) {
            $object->setIsNonThreadable($data['is_non_threadable']);
        }
        if (\array_key_exists('is_org_shared', $data)) {
            $object->setIsOrgShared($data['is_org_shared']);
        }
        if (\array_key_exists('is_pending_ext_shared', $data)) {
            $object->setIsPendingExtShared($data['is_pending_ext_shared']);
        }
        if (\array_key_exists('is_private', $data)) {
            $object->setIsPrivate($data['is_private']);
        }
        if (\array_key_exists('is_read_only', $data)) {
            $object->setIsReadOnly($data['is_read_only']);
        }
        if (\array_key_exists('is_shared', $data)) {
            $object->setIsShared($data['is_shared']);
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
        if (\array_key_exists('pending_shared', $data)) {
            $values_1 = array();
            foreach ($data['pending_shared'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPendingShared($values_1);
        }
        if (\array_key_exists('previous_names', $data)) {
            $values_2 = array();
            foreach ($data['previous_names'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPreviousNames($values_2);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('purpose', $data)) {
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'Comicat\\Slack\\Api\\Model\\ObjsChannelPurpose', 'json', $context));
        }
        if (\array_key_exists('topic', $data)) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], 'Comicat\\Slack\\Api\\Model\\ObjsChannelTopic', 'json', $context));
        }
        if (\array_key_exists('unlinked', $data)) {
            $object->setUnlinked($data['unlinked']);
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
        if (null !== $object->getAcceptedUser()) {
            $data['accepted_user'] = $object->getAcceptedUser();
        }
        $data['created'] = $object->getCreated();
        $data['creator'] = $object->getCreator();
        $data['id'] = $object->getId();
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        }
        $data['is_channel'] = $object->getIsChannel();
        if (null !== $object->getIsFrozen()) {
            $data['is_frozen'] = $object->getIsFrozen();
        }
        if (null !== $object->getIsGeneral()) {
            $data['is_general'] = $object->getIsGeneral();
        }
        if (null !== $object->getIsMember()) {
            $data['is_member'] = $object->getIsMember();
        }
        if (null !== $object->getIsMoved()) {
            $data['is_moved'] = $object->getIsMoved();
        }
        $data['is_mpim'] = $object->getIsMpim();
        if (null !== $object->getIsNonThreadable()) {
            $data['is_non_threadable'] = $object->getIsNonThreadable();
        }
        $data['is_org_shared'] = $object->getIsOrgShared();
        if (null !== $object->getIsPendingExtShared()) {
            $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
        }
        $data['is_private'] = $object->getIsPrivate();
        if (null !== $object->getIsReadOnly()) {
            $data['is_read_only'] = $object->getIsReadOnly();
        }
        $data['is_shared'] = $object->getIsShared();
        if (null !== $object->getIsThreadOnly()) {
            $data['is_thread_only'] = $object->getIsThreadOnly();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $object->getLatest();
        }
        $values = array();
        foreach ($object->getMembers() as $value) {
            $values[] = $value;
        }
        $data['members'] = $values;
        $data['name'] = $object->getName();
        $data['name_normalized'] = $object->getNameNormalized();
        if (null !== $object->getNumMembers()) {
            $data['num_members'] = $object->getNumMembers();
        }
        if (null !== $object->getPendingShared()) {
            $values_1 = array();
            foreach ($object->getPendingShared() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['pending_shared'] = $values_1;
        }
        if (null !== $object->getPreviousNames()) {
            $values_2 = array();
            foreach ($object->getPreviousNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['previous_names'] = $values_2;
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        if (null !== $object->getUnlinked()) {
            $data['unlinked'] = $object->getUnlinked();
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