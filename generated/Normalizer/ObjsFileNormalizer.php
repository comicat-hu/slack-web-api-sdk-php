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
class ObjsFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsFile';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsFile';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsFile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channels', $data)) {
            $values = array();
            foreach ($data['channels'] as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
        }
        if (\array_key_exists('comments_count', $data)) {
            $object->setCommentsCount($data['comments_count']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('date_delete', $data)) {
            $object->setDateDelete($data['date_delete']);
        }
        if (\array_key_exists('display_as_bot', $data)) {
            $object->setDisplayAsBot($data['display_as_bot']);
        }
        if (\array_key_exists('editable', $data)) {
            $object->setEditable($data['editable']);
        }
        if (\array_key_exists('editor', $data)) {
            $object->setEditor($data['editor']);
        }
        if (\array_key_exists('external_id', $data)) {
            $object->setExternalId($data['external_id']);
        }
        if (\array_key_exists('external_type', $data)) {
            $object->setExternalType($data['external_type']);
        }
        if (\array_key_exists('external_url', $data)) {
            $object->setExternalUrl($data['external_url']);
        }
        if (\array_key_exists('filetype', $data)) {
            $object->setFiletype($data['filetype']);
        }
        if (\array_key_exists('groups', $data)) {
            $values_1 = array();
            foreach ($data['groups'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setGroups($values_1);
        }
        if (\array_key_exists('has_rich_preview', $data)) {
            $object->setHasRichPreview($data['has_rich_preview']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('image_exif_rotation', $data)) {
            $object->setImageExifRotation($data['image_exif_rotation']);
        }
        if (\array_key_exists('ims', $data)) {
            $values_2 = array();
            foreach ($data['ims'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setIms($values_2);
        }
        if (\array_key_exists('is_external', $data)) {
            $object->setIsExternal($data['is_external']);
        }
        if (\array_key_exists('is_public', $data)) {
            $object->setIsPublic($data['is_public']);
        }
        if (\array_key_exists('is_starred', $data)) {
            $object->setIsStarred($data['is_starred']);
        }
        if (\array_key_exists('is_tombstoned', $data)) {
            $object->setIsTombstoned($data['is_tombstoned']);
        }
        if (\array_key_exists('last_editor', $data)) {
            $object->setLastEditor($data['last_editor']);
        }
        if (\array_key_exists('mimetype', $data)) {
            $object->setMimetype($data['mimetype']);
        }
        if (\array_key_exists('mode', $data)) {
            $object->setMode($data['mode']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('non_owner_editable', $data)) {
            $object->setNonOwnerEditable($data['non_owner_editable']);
        }
        if (\array_key_exists('num_stars', $data)) {
            $object->setNumStars($data['num_stars']);
        }
        if (\array_key_exists('original_h', $data)) {
            $object->setOriginalH($data['original_h']);
        }
        if (\array_key_exists('original_w', $data)) {
            $object->setOriginalW($data['original_w']);
        }
        if (\array_key_exists('permalink', $data)) {
            $object->setPermalink($data['permalink']);
        }
        if (\array_key_exists('permalink_public', $data)) {
            $object->setPermalinkPublic($data['permalink_public']);
        }
        if (\array_key_exists('pinned_info', $data)) {
            $object->setPinnedInfo($data['pinned_info']);
        }
        if (\array_key_exists('pinned_to', $data)) {
            $values_3 = array();
            foreach ($data['pinned_to'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPinnedTo($values_3);
        }
        if (\array_key_exists('pretty_type', $data)) {
            $object->setPrettyType($data['pretty_type']);
        }
        if (\array_key_exists('preview', $data)) {
            $object->setPreview($data['preview']);
        }
        if (\array_key_exists('public_url_shared', $data)) {
            $object->setPublicUrlShared($data['public_url_shared']);
        }
        if (\array_key_exists('reactions', $data)) {
            $values_4 = array();
            foreach ($data['reactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Comicat\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_4);
        }
        if (\array_key_exists('shares', $data)) {
            $object->setShares($this->denormalizer->denormalize($data['shares'], 'Comicat\\Slack\\Api\\Model\\ObjsFileShares', 'json', $context));
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
        }
        if (\array_key_exists('source_team', $data)) {
            $object->setSourceTeam($data['source_team']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('thumb_1024', $data)) {
            $object->setThumb1024($data['thumb_1024']);
        }
        if (\array_key_exists('thumb_1024_h', $data)) {
            $object->setThumb1024H($data['thumb_1024_h']);
        }
        if (\array_key_exists('thumb_1024_w', $data)) {
            $object->setThumb1024W($data['thumb_1024_w']);
        }
        if (\array_key_exists('thumb_160', $data)) {
            $object->setThumb160($data['thumb_160']);
        }
        if (\array_key_exists('thumb_360', $data)) {
            $object->setThumb360($data['thumb_360']);
        }
        if (\array_key_exists('thumb_360_h', $data)) {
            $object->setThumb360H($data['thumb_360_h']);
        }
        if (\array_key_exists('thumb_360_w', $data)) {
            $object->setThumb360W($data['thumb_360_w']);
        }
        if (\array_key_exists('thumb_480', $data)) {
            $object->setThumb480($data['thumb_480']);
        }
        if (\array_key_exists('thumb_480_h', $data)) {
            $object->setThumb480H($data['thumb_480_h']);
        }
        if (\array_key_exists('thumb_480_w', $data)) {
            $object->setThumb480W($data['thumb_480_w']);
        }
        if (\array_key_exists('thumb_64', $data)) {
            $object->setThumb64($data['thumb_64']);
        }
        if (\array_key_exists('thumb_720', $data)) {
            $object->setThumb720($data['thumb_720']);
        }
        if (\array_key_exists('thumb_720_h', $data)) {
            $object->setThumb720H($data['thumb_720_h']);
        }
        if (\array_key_exists('thumb_720_w', $data)) {
            $object->setThumb720W($data['thumb_720_w']);
        }
        if (\array_key_exists('thumb_80', $data)) {
            $object->setThumb80($data['thumb_80']);
        }
        if (\array_key_exists('thumb_800', $data)) {
            $object->setThumb800($data['thumb_800']);
        }
        if (\array_key_exists('thumb_800_h', $data)) {
            $object->setThumb800H($data['thumb_800_h']);
        }
        if (\array_key_exists('thumb_800_w', $data)) {
            $object->setThumb800W($data['thumb_800_w']);
        }
        if (\array_key_exists('thumb_960', $data)) {
            $object->setThumb960($data['thumb_960']);
        }
        if (\array_key_exists('thumb_960_h', $data)) {
            $object->setThumb960H($data['thumb_960_h']);
        }
        if (\array_key_exists('thumb_960_w', $data)) {
            $object->setThumb960W($data['thumb_960_w']);
        }
        if (\array_key_exists('thumb_tiny', $data)) {
            $object->setThumbTiny($data['thumb_tiny']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp($data['timestamp']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('updated', $data)) {
            $object->setUpdated($data['updated']);
        }
        if (\array_key_exists('url_private', $data)) {
            $object->setUrlPrivate($data['url_private']);
        }
        if (\array_key_exists('url_private_download', $data)) {
            $object->setUrlPrivateDownload($data['url_private_download']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
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
        if (null !== $object->getChannels()) {
            $values = array();
            foreach ($object->getChannels() as $value) {
                $values[] = $value;
            }
            $data['channels'] = $values;
        }
        if (null !== $object->getCommentsCount()) {
            $data['comments_count'] = $object->getCommentsCount();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getDateDelete()) {
            $data['date_delete'] = $object->getDateDelete();
        }
        if (null !== $object->getDisplayAsBot()) {
            $data['display_as_bot'] = $object->getDisplayAsBot();
        }
        if (null !== $object->getEditable()) {
            $data['editable'] = $object->getEditable();
        }
        if (null !== $object->getEditor()) {
            $data['editor'] = $object->getEditor();
        }
        if (null !== $object->getExternalId()) {
            $data['external_id'] = $object->getExternalId();
        }
        if (null !== $object->getExternalType()) {
            $data['external_type'] = $object->getExternalType();
        }
        if (null !== $object->getExternalUrl()) {
            $data['external_url'] = $object->getExternalUrl();
        }
        if (null !== $object->getFiletype()) {
            $data['filetype'] = $object->getFiletype();
        }
        if (null !== $object->getGroups()) {
            $values_1 = array();
            foreach ($object->getGroups() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['groups'] = $values_1;
        }
        if (null !== $object->getHasRichPreview()) {
            $data['has_rich_preview'] = $object->getHasRichPreview();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getImageExifRotation()) {
            $data['image_exif_rotation'] = $object->getImageExifRotation();
        }
        if (null !== $object->getIms()) {
            $values_2 = array();
            foreach ($object->getIms() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['ims'] = $values_2;
        }
        if (null !== $object->getIsExternal()) {
            $data['is_external'] = $object->getIsExternal();
        }
        if (null !== $object->getIsPublic()) {
            $data['is_public'] = $object->getIsPublic();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getIsTombstoned()) {
            $data['is_tombstoned'] = $object->getIsTombstoned();
        }
        if (null !== $object->getLastEditor()) {
            $data['last_editor'] = $object->getLastEditor();
        }
        if (null !== $object->getMimetype()) {
            $data['mimetype'] = $object->getMimetype();
        }
        if (null !== $object->getMode()) {
            $data['mode'] = $object->getMode();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNonOwnerEditable()) {
            $data['non_owner_editable'] = $object->getNonOwnerEditable();
        }
        if (null !== $object->getNumStars()) {
            $data['num_stars'] = $object->getNumStars();
        }
        if (null !== $object->getOriginalH()) {
            $data['original_h'] = $object->getOriginalH();
        }
        if (null !== $object->getOriginalW()) {
            $data['original_w'] = $object->getOriginalW();
        }
        if (null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if (null !== $object->getPermalinkPublic()) {
            $data['permalink_public'] = $object->getPermalinkPublic();
        }
        if (null !== $object->getPinnedInfo()) {
            $data['pinned_info'] = $object->getPinnedInfo();
        }
        if (null !== $object->getPinnedTo()) {
            $values_3 = array();
            foreach ($object->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pinned_to'] = $values_3;
        }
        if (null !== $object->getPrettyType()) {
            $data['pretty_type'] = $object->getPrettyType();
        }
        if (null !== $object->getPreview()) {
            $data['preview'] = $object->getPreview();
        }
        if (null !== $object->getPublicUrlShared()) {
            $data['public_url_shared'] = $object->getPublicUrlShared();
        }
        if (null !== $object->getReactions()) {
            $values_4 = array();
            foreach ($object->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['reactions'] = $values_4;
        }
        if (null !== $object->getShares()) {
            $data['shares'] = $this->normalizer->normalize($object->getShares(), 'json', $context);
        }
        if (null !== $object->getSize()) {
            $data['size'] = $object->getSize();
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getThumb1024()) {
            $data['thumb_1024'] = $object->getThumb1024();
        }
        if (null !== $object->getThumb1024H()) {
            $data['thumb_1024_h'] = $object->getThumb1024H();
        }
        if (null !== $object->getThumb1024W()) {
            $data['thumb_1024_w'] = $object->getThumb1024W();
        }
        if (null !== $object->getThumb160()) {
            $data['thumb_160'] = $object->getThumb160();
        }
        if (null !== $object->getThumb360()) {
            $data['thumb_360'] = $object->getThumb360();
        }
        if (null !== $object->getThumb360H()) {
            $data['thumb_360_h'] = $object->getThumb360H();
        }
        if (null !== $object->getThumb360W()) {
            $data['thumb_360_w'] = $object->getThumb360W();
        }
        if (null !== $object->getThumb480()) {
            $data['thumb_480'] = $object->getThumb480();
        }
        if (null !== $object->getThumb480H()) {
            $data['thumb_480_h'] = $object->getThumb480H();
        }
        if (null !== $object->getThumb480W()) {
            $data['thumb_480_w'] = $object->getThumb480W();
        }
        if (null !== $object->getThumb64()) {
            $data['thumb_64'] = $object->getThumb64();
        }
        if (null !== $object->getThumb720()) {
            $data['thumb_720'] = $object->getThumb720();
        }
        if (null !== $object->getThumb720H()) {
            $data['thumb_720_h'] = $object->getThumb720H();
        }
        if (null !== $object->getThumb720W()) {
            $data['thumb_720_w'] = $object->getThumb720W();
        }
        if (null !== $object->getThumb80()) {
            $data['thumb_80'] = $object->getThumb80();
        }
        if (null !== $object->getThumb800()) {
            $data['thumb_800'] = $object->getThumb800();
        }
        if (null !== $object->getThumb800H()) {
            $data['thumb_800_h'] = $object->getThumb800H();
        }
        if (null !== $object->getThumb800W()) {
            $data['thumb_800_w'] = $object->getThumb800W();
        }
        if (null !== $object->getThumb960()) {
            $data['thumb_960'] = $object->getThumb960();
        }
        if (null !== $object->getThumb960H()) {
            $data['thumb_960_h'] = $object->getThumb960H();
        }
        if (null !== $object->getThumb960W()) {
            $data['thumb_960_w'] = $object->getThumb960W();
        }
        if (null !== $object->getThumbTiny()) {
            $data['thumb_tiny'] = $object->getThumbTiny();
        }
        if (null !== $object->getTimestamp()) {
            $data['timestamp'] = $object->getTimestamp();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getUpdated()) {
            $data['updated'] = $object->getUpdated();
        }
        if (null !== $object->getUrlPrivate()) {
            $data['url_private'] = $object->getUrlPrivate();
        }
        if (null !== $object->getUrlPrivateDownload()) {
            $data['url_private_download'] = $object->getUrlPrivateDownload();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
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