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
class ObjsMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsMessage';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsMessage';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsMessage();
        if (\array_key_exists('attachments', $data)) {
            $values = array();
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Comicat\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem', 'json', $context);
            }
            $object->setAttachments($values);
        }
        if (\array_key_exists('blocks', $data)) {
            $values_1 = array();
            foreach ($data['blocks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Comicat\\Slack\\Api\\Model\\BlocksItem', 'json', $context);
            }
            $object->setBlocks($values_1);
        }
        if (\array_key_exists('bot_id', $data)) {
            $object->setBotId($data['bot_id']);
        }
        if (\array_key_exists('bot_profile', $data)) {
            $object->setBotProfile($this->denormalizer->denormalize($data['bot_profile'], 'Comicat\\Slack\\Api\\Model\\ObjsBotProfile', 'json', $context));
        }
        if (\array_key_exists('client_msg_id', $data)) {
            $object->setClientMsgId($data['client_msg_id']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Comicat\\Slack\\Api\\Model\\ObjsComment', 'json', $context));
        }
        if (\array_key_exists('display_as_bot', $data)) {
            $object->setDisplayAsBot($data['display_as_bot']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'Comicat\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        }
        if (\array_key_exists('files', $data)) {
            $values_2 = array();
            foreach ($data['files'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Comicat\\Slack\\Api\\Model\\ObjsFile', 'json', $context);
            }
            $object->setFiles($values_2);
        }
        if (\array_key_exists('icons', $data)) {
            $object->setIcons($this->denormalizer->denormalize($data['icons'], 'Comicat\\Slack\\Api\\Model\\ObjsMessageIcons', 'json', $context));
        }
        if (\array_key_exists('inviter', $data)) {
            $object->setInviter($data['inviter']);
        }
        if (\array_key_exists('is_delayed_message', $data)) {
            $object->setIsDelayedMessage($data['is_delayed_message']);
        }
        if (\array_key_exists('is_intro', $data)) {
            $object->setIsIntro($data['is_intro']);
        }
        if (\array_key_exists('is_starred', $data)) {
            $object->setIsStarred($data['is_starred']);
        }
        if (\array_key_exists('last_read', $data)) {
            $object->setLastRead($data['last_read']);
        }
        if (\array_key_exists('latest_reply', $data)) {
            $object->setLatestReply($data['latest_reply']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('old_name', $data)) {
            $object->setOldName($data['old_name']);
        }
        if (\array_key_exists('parent_user_id', $data)) {
            $object->setParentUserId($data['parent_user_id']);
        }
        if (\array_key_exists('permalink', $data)) {
            $object->setPermalink($data['permalink']);
        }
        if (\array_key_exists('pinned_to', $data)) {
            $values_3 = array();
            foreach ($data['pinned_to'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPinnedTo($values_3);
        }
        if (\array_key_exists('purpose', $data)) {
            $object->setPurpose($data['purpose']);
        }
        if (\array_key_exists('reactions', $data)) {
            $values_4 = array();
            foreach ($data['reactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Comicat\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_4);
        }
        if (\array_key_exists('reply_count', $data)) {
            $object->setReplyCount($data['reply_count']);
        }
        if (\array_key_exists('reply_users', $data)) {
            $values_5 = array();
            foreach ($data['reply_users'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setReplyUsers($values_5);
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
        if (\array_key_exists('subtype', $data)) {
            $object->setSubtype($data['subtype']);
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
        if (\array_key_exists('topic', $data)) {
            $object->setTopic($data['topic']);
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
        if (\array_key_exists('upload', $data)) {
            $object->setUpload($data['upload']);
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
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttachments()) {
            $values = array();
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attachments'] = $values;
        }
        if (null !== $object->getBlocks()) {
            $values_1 = array();
            foreach ($object->getBlocks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['blocks'] = $values_1;
        }
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        if (null !== $object->getBotProfile()) {
            $data['bot_profile'] = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
        }
        if (null !== $object->getClientMsgId()) {
            $data['client_msg_id'] = $object->getClientMsgId();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getDisplayAsBot()) {
            $data['display_as_bot'] = $object->getDisplayAsBot();
        }
        if (null !== $object->getFile()) {
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getFiles()) {
            $values_2 = array();
            foreach ($object->getFiles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['files'] = $values_2;
        }
        if (null !== $object->getIcons()) {
            $data['icons'] = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        }
        if (null !== $object->getInviter()) {
            $data['inviter'] = $object->getInviter();
        }
        if (null !== $object->getIsDelayedMessage()) {
            $data['is_delayed_message'] = $object->getIsDelayedMessage();
        }
        if (null !== $object->getIsIntro()) {
            $data['is_intro'] = $object->getIsIntro();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatestReply()) {
            $data['latest_reply'] = $object->getLatestReply();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOldName()) {
            $data['old_name'] = $object->getOldName();
        }
        if (null !== $object->getParentUserId()) {
            $data['parent_user_id'] = $object->getParentUserId();
        }
        if (null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if (null !== $object->getPinnedTo()) {
            $values_3 = array();
            foreach ($object->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pinned_to'] = $values_3;
        }
        if (null !== $object->getPurpose()) {
            $data['purpose'] = $object->getPurpose();
        }
        if (null !== $object->getReactions()) {
            $values_4 = array();
            foreach ($object->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['reactions'] = $values_4;
        }
        if (null !== $object->getReplyCount()) {
            $data['reply_count'] = $object->getReplyCount();
        }
        if (null !== $object->getReplyUsers()) {
            $values_5 = array();
            foreach ($object->getReplyUsers() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['reply_users'] = $values_5;
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
        if (null !== $object->getSubtype()) {
            $data['subtype'] = $object->getSubtype();
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
        if (null !== $object->getTopic()) {
            $data['topic'] = $object->getTopic();
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
        if (null !== $object->getUpload()) {
            $data['upload'] = $object->getUpload();
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
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        return $data;
    }
}