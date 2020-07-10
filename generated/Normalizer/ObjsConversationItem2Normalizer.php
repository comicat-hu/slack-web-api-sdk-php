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
class ObjsConversationItem2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem2';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem2';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsConversationItem2();
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('has_pins', $data)) {
            $object->setHasPins($data['has_pins']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_archived', $data)) {
            $object->setIsArchived($data['is_archived']);
        }
        if (\array_key_exists('is_ext_shared', $data)) {
            $object->setIsExtShared($data['is_ext_shared']);
        }
        if (\array_key_exists('is_frozen', $data)) {
            $object->setIsFrozen($data['is_frozen']);
        }
        if (\array_key_exists('is_im', $data)) {
            $object->setIsIm($data['is_im']);
        }
        if (\array_key_exists('is_open', $data)) {
            $object->setIsOpen($data['is_open']);
        }
        if (\array_key_exists('is_org_shared', $data)) {
            $object->setIsOrgShared($data['is_org_shared']);
        }
        if (\array_key_exists('is_shared', $data)) {
            $object->setIsShared($data['is_shared']);
        }
        if (\array_key_exists('is_starred', $data)) {
            $object->setIsStarred($data['is_starred']);
        }
        if (\array_key_exists('is_user_deleted', $data)) {
            $object->setIsUserDeleted($data['is_user_deleted']);
        }
        if (\array_key_exists('last_read', $data)) {
            $object->setLastRead($data['last_read']);
        }
        if (\array_key_exists('latest', $data)) {
            $object->setLatest($data['latest']);
        }
        if (\array_key_exists('parent_conversation', $data)) {
            $object->setParentConversation($data['parent_conversation']);
        }
        if (\array_key_exists('pin_count', $data)) {
            $object->setPinCount($data['pin_count']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('shares', $data)) {
            $values = array();
            foreach ($data['shares'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Comicat\\Slack\\Api\\Model\\ObjsConversationItem2SharesItem', 'json', $context);
            }
            $object->setShares($values);
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
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getHasPins()) {
            $data['has_pins'] = $object->getHasPins();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        }
        if (null !== $object->getIsExtShared()) {
            $data['is_ext_shared'] = $object->getIsExtShared();
        }
        if (null !== $object->getIsFrozen()) {
            $data['is_frozen'] = $object->getIsFrozen();
        }
        if (null !== $object->getIsIm()) {
            $data['is_im'] = $object->getIsIm();
        }
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
        }
        if (null !== $object->getIsOrgShared()) {
            $data['is_org_shared'] = $object->getIsOrgShared();
        }
        if (null !== $object->getIsShared()) {
            $data['is_shared'] = $object->getIsShared();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getIsUserDeleted()) {
            $data['is_user_deleted'] = $object->getIsUserDeleted();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $object->getLatest();
        }
        if (null !== $object->getParentConversation()) {
            $data['parent_conversation'] = $object->getParentConversation();
        }
        if (null !== $object->getPinCount()) {
            $data['pin_count'] = $object->getPinCount();
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getShares()) {
            $values = array();
            foreach ($object->getShares() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shares'] = $values;
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