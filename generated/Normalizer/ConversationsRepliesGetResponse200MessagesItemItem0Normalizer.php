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
class ConversationsRepliesGetResponse200MessagesItemItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem0';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem0';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0();
        if (\array_key_exists('last_read', $data)) {
            $object->setLastRead($data['last_read']);
        }
        if (\array_key_exists('latest_reply', $data)) {
            $object->setLatestReply($data['latest_reply']);
        }
        if (\array_key_exists('reply_count', $data)) {
            $object->setReplyCount($data['reply_count']);
        }
        if (\array_key_exists('reply_users', $data)) {
            $values = array();
            foreach ($data['reply_users'] as $value) {
                $values[] = $value;
            }
            $object->setReplyUsers($values);
        }
        if (\array_key_exists('reply_users_count', $data)) {
            $object->setReplyUsersCount($data['reply_users_count']);
        }
        if (\array_key_exists('source_team', $data)) {
            $object->setSourceTeam($data['source_team']);
        }
        if (\array_key_exists('subscribed', $data)) {
            $object->setSubscribed($data['subscribed']);
        }
        if (\array_key_exists('team', $data)) {
            $object->setTeam($data['team']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('thread_ts', $data)) {
            $object->setThreadTs($data['thread_ts']);
        }
        if (\array_key_exists('ts', $data)) {
            $object->setTs($data['ts']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('unread_count', $data)) {
            $object->setUnreadCount($data['unread_count']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('user_profile', $data)) {
            $object->setUserProfile($this->denormalizer->denormalize($data['user_profile'], 'Comicat\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
        }
        if (\array_key_exists('user_team', $data)) {
            $object->setUserTeam($data['user_team']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatestReply()) {
            $data['latest_reply'] = $object->getLatestReply();
        }
        if (null !== $object->getReplyCount()) {
            $data['reply_count'] = $object->getReplyCount();
        }
        if (null !== $object->getReplyUsers()) {
            $values = array();
            foreach ($object->getReplyUsers() as $value) {
                $values[] = $value;
            }
            $data['reply_users'] = $values;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data['reply_users_count'] = $object->getReplyUsersCount();
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        }
        if (null !== $object->getSubscribed()) {
            $data['subscribed'] = $object->getSubscribed();
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if (null !== $object->getThreadTs()) {
            $data['thread_ts'] = $object->getThreadTs();
        }
        if (null !== $object->getTs()) {
            $data['ts'] = $object->getTs();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getUserProfile()) {
            $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data['user_team'] = $object->getUserTeam();
        }
        return $data;
    }
}