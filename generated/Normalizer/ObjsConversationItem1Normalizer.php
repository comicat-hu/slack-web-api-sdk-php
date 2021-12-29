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
class ObjsConversationItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem1';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem1';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsConversationItem1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accepted_user', $data)) {
            $object->setAcceptedUser($data['accepted_user']);
        }
        if (\array_key_exists('connected_team_ids', $data)) {
            $values = array();
            foreach ($data['connected_team_ids'] as $value) {
                $values[] = $value;
            }
            $object->setConnectedTeamIds($values);
        }
        if (\array_key_exists('conversation_host_id', $data)) {
            $object->setConversationHostId($data['conversation_host_id']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($data['creator']);
        }
        if (\array_key_exists('display_counts', $data)) {
            $object->setDisplayCounts($this->denormalizer->denormalize($data['display_counts'], 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem1DisplayCounts', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('internal_team_ids', $data)) {
            $values_1 = array();
            foreach ($data['internal_team_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInternalTeamIds($values_1);
        }
        if (\array_key_exists('is_archived', $data)) {
            $object->setIsArchived($data['is_archived']);
        }
        if (\array_key_exists('is_channel', $data)) {
            $object->setIsChannel($data['is_channel']);
        }
        if (\array_key_exists('is_ext_shared', $data)) {
            $object->setIsExtShared($data['is_ext_shared']);
        }
        if (\array_key_exists('is_frozen', $data)) {
            $object->setIsFrozen($data['is_frozen']);
        }
        if (\array_key_exists('is_general', $data)) {
            $object->setIsGeneral($data['is_general']);
        }
        if (\array_key_exists('is_group', $data)) {
            $object->setIsGroup($data['is_group']);
        }
        if (\array_key_exists('is_im', $data)) {
            $object->setIsIm($data['is_im']);
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
        if (\array_key_exists('is_open', $data)) {
            $object->setIsOpen($data['is_open']);
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
        if (\array_key_exists('is_starred', $data)) {
            $object->setIsStarred($data['is_starred']);
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
            $values_2 = array();
            foreach ($data['members'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMembers($values_2);
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
        if (\array_key_exists('parent_conversation', $data)) {
            $object->setParentConversation($data['parent_conversation']);
        }
        if (\array_key_exists('pending_connected_team_ids', $data)) {
            $values_3 = array();
            foreach ($data['pending_connected_team_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPendingConnectedTeamIds($values_3);
        }
        if (\array_key_exists('pending_shared', $data)) {
            $values_4 = array();
            foreach ($data['pending_shared'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPendingShared($values_4);
        }
        if (\array_key_exists('pin_count', $data)) {
            $object->setPinCount($data['pin_count']);
        }
        if (\array_key_exists('previous_names', $data)) {
            $values_5 = array();
            foreach ($data['previous_names'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setPreviousNames($values_5);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('purpose', $data)) {
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem1Purpose', 'json', $context));
        }
        if (\array_key_exists('shared_team_ids', $data)) {
            $values_6 = array();
            foreach ($data['shared_team_ids'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setSharedTeamIds($values_6);
        }
        if (\array_key_exists('shares', $data)) {
            $values_7 = array();
            foreach ($data['shares'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem1SharesItem', 'json', $context);
            }
            $object->setShares($values_7);
        }
        if (\array_key_exists('timezone_count', $data)) {
            $object->setTimezoneCount($data['timezone_count']);
        }
        if (\array_key_exists('topic', $data)) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem1Topic', 'json', $context));
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
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAcceptedUser()) {
            $data['accepted_user'] = $object->getAcceptedUser();
        }
        if (null !== $object->getConnectedTeamIds()) {
            $values = array();
            foreach ($object->getConnectedTeamIds() as $value) {
                $values[] = $value;
            }
            $data['connected_team_ids'] = $values;
        }
        if (null !== $object->getConversationHostId()) {
            $data['conversation_host_id'] = $object->getConversationHostId();
        }
        $data['created'] = $object->getCreated();
        $data['creator'] = $object->getCreator();
        if (null !== $object->getDisplayCounts()) {
            $data['display_counts'] = $this->normalizer->normalize($object->getDisplayCounts(), 'json', $context);
        }
        $data['id'] = $object->getId();
        if (null !== $object->getInternalTeamIds()) {
            $values_1 = array();
            foreach ($object->getInternalTeamIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['internal_team_ids'] = $values_1;
        }
        $data['is_archived'] = $object->getIsArchived();
        $data['is_channel'] = $object->getIsChannel();
        if (null !== $object->getIsExtShared()) {
            $data['is_ext_shared'] = $object->getIsExtShared();
        }
        if (null !== $object->getIsFrozen()) {
            $data['is_frozen'] = $object->getIsFrozen();
        }
        $data['is_general'] = $object->getIsGeneral();
        $data['is_group'] = $object->getIsGroup();
        $data['is_im'] = $object->getIsIm();
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
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
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
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
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
            $values_2 = array();
            foreach ($object->getMembers() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['members'] = $values_2;
        }
        $data['name'] = $object->getName();
        $data['name_normalized'] = $object->getNameNormalized();
        if (null !== $object->getNumMembers()) {
            $data['num_members'] = $object->getNumMembers();
        }
        if (null !== $object->getParentConversation()) {
            $data['parent_conversation'] = $object->getParentConversation();
        }
        if (null !== $object->getPendingConnectedTeamIds()) {
            $values_3 = array();
            foreach ($object->getPendingConnectedTeamIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pending_connected_team_ids'] = $values_3;
        }
        if (null !== $object->getPendingShared()) {
            $values_4 = array();
            foreach ($object->getPendingShared() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['pending_shared'] = $values_4;
        }
        if (null !== $object->getPinCount()) {
            $data['pin_count'] = $object->getPinCount();
        }
        if (null !== $object->getPreviousNames()) {
            $values_5 = array();
            foreach ($object->getPreviousNames() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['previous_names'] = $values_5;
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        if (null !== $object->getSharedTeamIds()) {
            $values_6 = array();
            foreach ($object->getSharedTeamIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['shared_team_ids'] = $values_6;
        }
        if (null !== $object->getShares()) {
            $values_7 = array();
            foreach ($object->getShares() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['shares'] = $values_7;
        }
        if (null !== $object->getTimezoneCount()) {
            $data['timezone_count'] = $object->getTimezoneCount();
        }
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
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        return $data;
    }
}