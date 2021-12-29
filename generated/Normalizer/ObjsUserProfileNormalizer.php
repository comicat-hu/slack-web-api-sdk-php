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
class ObjsUserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsUserProfile';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsUserProfile';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsUserProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('always_active', $data)) {
            $object->setAlwaysActive($data['always_active']);
        }
        if (\array_key_exists('api_app_id', $data)) {
            $object->setApiAppId($data['api_app_id']);
        }
        if (\array_key_exists('avatar_hash', $data)) {
            $object->setAvatarHash($data['avatar_hash']);
        }
        if (\array_key_exists('bot_id', $data)) {
            $object->setBotId($data['bot_id']);
        }
        if (\array_key_exists('display_name', $data)) {
            $object->setDisplayName($data['display_name']);
        }
        if (\array_key_exists('display_name_normalized', $data)) {
            $object->setDisplayNameNormalized($data['display_name_normalized']);
        }
        if (\array_key_exists('email', $data)) {
            $value = $data['email'];
            if (is_string($data['email'])) {
                $value = $data['email'];
            }
            $object->setEmail($value);
        }
        if (\array_key_exists('fields', $data)) {
            $value_1 = $data['fields'];
            if (is_array($data['fields']) && $this->isOnlyNumericKeys($data['fields'])) {
                $values = array();
                foreach ($data['fields'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (isset($data['fields'])) {
                $value_1 = $data['fields'];
            }
            $object->setFields($value_1);
        }
        if (\array_key_exists('first_name', $data)) {
            $value_3 = $data['first_name'];
            if (is_string($data['first_name'])) {
                $value_3 = $data['first_name'];
            }
            $object->setFirstName($value_3);
        }
        if (\array_key_exists('guest_expiration_ts', $data)) {
            $value_4 = $data['guest_expiration_ts'];
            if (is_int($data['guest_expiration_ts'])) {
                $value_4 = $data['guest_expiration_ts'];
            }
            $object->setGuestExpirationTs($value_4);
        }
        if (\array_key_exists('guest_invited_by', $data)) {
            $value_5 = $data['guest_invited_by'];
            if (is_string($data['guest_invited_by'])) {
                $value_5 = $data['guest_invited_by'];
            }
            $object->setGuestInvitedBy($value_5);
        }
        if (\array_key_exists('image_1024', $data)) {
            $value_6 = $data['image_1024'];
            if (is_string($data['image_1024'])) {
                $value_6 = $data['image_1024'];
            }
            $object->setImage1024($value_6);
        }
        if (\array_key_exists('image_192', $data)) {
            $value_7 = $data['image_192'];
            if (is_string($data['image_192'])) {
                $value_7 = $data['image_192'];
            }
            $object->setImage192($value_7);
        }
        if (\array_key_exists('image_24', $data)) {
            $value_8 = $data['image_24'];
            if (is_string($data['image_24'])) {
                $value_8 = $data['image_24'];
            }
            $object->setImage24($value_8);
        }
        if (\array_key_exists('image_32', $data)) {
            $value_9 = $data['image_32'];
            if (is_string($data['image_32'])) {
                $value_9 = $data['image_32'];
            }
            $object->setImage32($value_9);
        }
        if (\array_key_exists('image_48', $data)) {
            $value_10 = $data['image_48'];
            if (is_string($data['image_48'])) {
                $value_10 = $data['image_48'];
            }
            $object->setImage48($value_10);
        }
        if (\array_key_exists('image_512', $data)) {
            $value_11 = $data['image_512'];
            if (is_string($data['image_512'])) {
                $value_11 = $data['image_512'];
            }
            $object->setImage512($value_11);
        }
        if (\array_key_exists('image_72', $data)) {
            $value_12 = $data['image_72'];
            if (is_string($data['image_72'])) {
                $value_12 = $data['image_72'];
            }
            $object->setImage72($value_12);
        }
        if (\array_key_exists('image_original', $data)) {
            $value_13 = $data['image_original'];
            if (is_string($data['image_original'])) {
                $value_13 = $data['image_original'];
            }
            $object->setImageOriginal($value_13);
        }
        if (\array_key_exists('is_app_user', $data)) {
            $object->setIsAppUser($data['is_app_user']);
        }
        if (\array_key_exists('is_custom_image', $data)) {
            $object->setIsCustomImage($data['is_custom_image']);
        }
        if (\array_key_exists('is_restricted', $data)) {
            $value_14 = $data['is_restricted'];
            if (is_bool($data['is_restricted'])) {
                $value_14 = $data['is_restricted'];
            }
            $object->setIsRestricted($value_14);
        }
        if (\array_key_exists('is_ultra_restricted', $data)) {
            $value_15 = $data['is_ultra_restricted'];
            if (is_bool($data['is_ultra_restricted'])) {
                $value_15 = $data['is_ultra_restricted'];
            }
            $object->setIsUltraRestricted($value_15);
        }
        if (\array_key_exists('last_avatar_image_hash', $data)) {
            $object->setLastAvatarImageHash($data['last_avatar_image_hash']);
        }
        if (\array_key_exists('last_name', $data)) {
            $value_16 = $data['last_name'];
            if (is_string($data['last_name'])) {
                $value_16 = $data['last_name'];
            }
            $object->setLastName($value_16);
        }
        if (\array_key_exists('memberships_count', $data)) {
            $object->setMembershipsCount($data['memberships_count']);
        }
        if (\array_key_exists('name', $data)) {
            $value_17 = $data['name'];
            if (is_string($data['name'])) {
                $value_17 = $data['name'];
            }
            $object->setName($value_17);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('pronouns', $data)) {
            $object->setPronouns($data['pronouns']);
        }
        if (\array_key_exists('real_name', $data)) {
            $object->setRealName($data['real_name']);
        }
        if (\array_key_exists('real_name_normalized', $data)) {
            $object->setRealNameNormalized($data['real_name_normalized']);
        }
        if (\array_key_exists('skype', $data)) {
            $object->setSkype($data['skype']);
        }
        if (\array_key_exists('status_default_emoji', $data)) {
            $object->setStatusDefaultEmoji($data['status_default_emoji']);
        }
        if (\array_key_exists('status_default_text', $data)) {
            $object->setStatusDefaultText($data['status_default_text']);
        }
        if (\array_key_exists('status_default_text_canonical', $data)) {
            $value_18 = $data['status_default_text_canonical'];
            if (is_string($data['status_default_text_canonical'])) {
                $value_18 = $data['status_default_text_canonical'];
            }
            $object->setStatusDefaultTextCanonical($value_18);
        }
        if (\array_key_exists('status_emoji', $data)) {
            $object->setStatusEmoji($data['status_emoji']);
        }
        if (\array_key_exists('status_expiration', $data)) {
            $object->setStatusExpiration($data['status_expiration']);
        }
        if (\array_key_exists('status_text', $data)) {
            $object->setStatusText($data['status_text']);
        }
        if (\array_key_exists('status_text_canonical', $data)) {
            $value_19 = $data['status_text_canonical'];
            if (is_string($data['status_text_canonical'])) {
                $value_19 = $data['status_text_canonical'];
            }
            $object->setStatusTextCanonical($value_19);
        }
        if (\array_key_exists('team', $data)) {
            $object->setTeam($data['team']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('updated', $data)) {
            $object->setUpdated($data['updated']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
        }
        if (\array_key_exists('username', $data)) {
            $value_20 = $data['username'];
            if (is_string($data['username'])) {
                $value_20 = $data['username'];
            }
            $object->setUsername($value_20);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAlwaysActive()) {
            $data['always_active'] = $object->getAlwaysActive();
        }
        if (null !== $object->getApiAppId()) {
            $data['api_app_id'] = $object->getApiAppId();
        }
        $data['avatar_hash'] = $object->getAvatarHash();
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        $data['display_name'] = $object->getDisplayName();
        $data['display_name_normalized'] = $object->getDisplayNameNormalized();
        if (null !== $object->getEmail()) {
            $value = $object->getEmail();
            if (is_string($object->getEmail())) {
                $value = $object->getEmail();
            }
            $data['email'] = $value;
        }
        $value_1 = $object->getFields();
        if (is_array($object->getFields())) {
            $values = array();
            foreach ($object->getFields() as $value_2) {
                $values[] = $value_2;
            }
            $value_1 = $values;
        } elseif (!is_null($object->getFields())) {
            $value_1 = $object->getFields();
        }
        $data['fields'] = $value_1;
        if (null !== $object->getFirstName()) {
            $value_3 = $object->getFirstName();
            if (is_string($object->getFirstName())) {
                $value_3 = $object->getFirstName();
            }
            $data['first_name'] = $value_3;
        }
        if (null !== $object->getGuestExpirationTs()) {
            $value_4 = $object->getGuestExpirationTs();
            if (is_int($object->getGuestExpirationTs())) {
                $value_4 = $object->getGuestExpirationTs();
            }
            $data['guest_expiration_ts'] = $value_4;
        }
        if (null !== $object->getGuestInvitedBy()) {
            $value_5 = $object->getGuestInvitedBy();
            if (is_string($object->getGuestInvitedBy())) {
                $value_5 = $object->getGuestInvitedBy();
            }
            $data['guest_invited_by'] = $value_5;
        }
        if (null !== $object->getImage1024()) {
            $value_6 = $object->getImage1024();
            if (is_string($object->getImage1024())) {
                $value_6 = $object->getImage1024();
            }
            $data['image_1024'] = $value_6;
        }
        if (null !== $object->getImage192()) {
            $value_7 = $object->getImage192();
            if (is_string($object->getImage192())) {
                $value_7 = $object->getImage192();
            }
            $data['image_192'] = $value_7;
        }
        if (null !== $object->getImage24()) {
            $value_8 = $object->getImage24();
            if (is_string($object->getImage24())) {
                $value_8 = $object->getImage24();
            }
            $data['image_24'] = $value_8;
        }
        if (null !== $object->getImage32()) {
            $value_9 = $object->getImage32();
            if (is_string($object->getImage32())) {
                $value_9 = $object->getImage32();
            }
            $data['image_32'] = $value_9;
        }
        if (null !== $object->getImage48()) {
            $value_10 = $object->getImage48();
            if (is_string($object->getImage48())) {
                $value_10 = $object->getImage48();
            }
            $data['image_48'] = $value_10;
        }
        if (null !== $object->getImage512()) {
            $value_11 = $object->getImage512();
            if (is_string($object->getImage512())) {
                $value_11 = $object->getImage512();
            }
            $data['image_512'] = $value_11;
        }
        if (null !== $object->getImage72()) {
            $value_12 = $object->getImage72();
            if (is_string($object->getImage72())) {
                $value_12 = $object->getImage72();
            }
            $data['image_72'] = $value_12;
        }
        if (null !== $object->getImageOriginal()) {
            $value_13 = $object->getImageOriginal();
            if (is_string($object->getImageOriginal())) {
                $value_13 = $object->getImageOriginal();
            }
            $data['image_original'] = $value_13;
        }
        if (null !== $object->getIsAppUser()) {
            $data['is_app_user'] = $object->getIsAppUser();
        }
        if (null !== $object->getIsCustomImage()) {
            $data['is_custom_image'] = $object->getIsCustomImage();
        }
        if (null !== $object->getIsRestricted()) {
            $value_14 = $object->getIsRestricted();
            if (is_bool($object->getIsRestricted())) {
                $value_14 = $object->getIsRestricted();
            }
            $data['is_restricted'] = $value_14;
        }
        if (null !== $object->getIsUltraRestricted()) {
            $value_15 = $object->getIsUltraRestricted();
            if (is_bool($object->getIsUltraRestricted())) {
                $value_15 = $object->getIsUltraRestricted();
            }
            $data['is_ultra_restricted'] = $value_15;
        }
        if (null !== $object->getLastAvatarImageHash()) {
            $data['last_avatar_image_hash'] = $object->getLastAvatarImageHash();
        }
        if (null !== $object->getLastName()) {
            $value_16 = $object->getLastName();
            if (is_string($object->getLastName())) {
                $value_16 = $object->getLastName();
            }
            $data['last_name'] = $value_16;
        }
        if (null !== $object->getMembershipsCount()) {
            $data['memberships_count'] = $object->getMembershipsCount();
        }
        if (null !== $object->getName()) {
            $value_17 = $object->getName();
            if (is_string($object->getName())) {
                $value_17 = $object->getName();
            }
            $data['name'] = $value_17;
        }
        $data['phone'] = $object->getPhone();
        if (null !== $object->getPronouns()) {
            $data['pronouns'] = $object->getPronouns();
        }
        $data['real_name'] = $object->getRealName();
        $data['real_name_normalized'] = $object->getRealNameNormalized();
        $data['skype'] = $object->getSkype();
        if (null !== $object->getStatusDefaultEmoji()) {
            $data['status_default_emoji'] = $object->getStatusDefaultEmoji();
        }
        if (null !== $object->getStatusDefaultText()) {
            $data['status_default_text'] = $object->getStatusDefaultText();
        }
        if (null !== $object->getStatusDefaultTextCanonical()) {
            $value_18 = $object->getStatusDefaultTextCanonical();
            if (is_string($object->getStatusDefaultTextCanonical())) {
                $value_18 = $object->getStatusDefaultTextCanonical();
            }
            $data['status_default_text_canonical'] = $value_18;
        }
        $data['status_emoji'] = $object->getStatusEmoji();
        if (null !== $object->getStatusExpiration()) {
            $data['status_expiration'] = $object->getStatusExpiration();
        }
        $data['status_text'] = $object->getStatusText();
        if (null !== $object->getStatusTextCanonical()) {
            $value_19 = $object->getStatusTextCanonical();
            if (is_string($object->getStatusTextCanonical())) {
                $value_19 = $object->getStatusTextCanonical();
            }
            $data['status_text_canonical'] = $value_19;
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        $data['title'] = $object->getTitle();
        if (null !== $object->getUpdated()) {
            $data['updated'] = $object->getUpdated();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getUsername()) {
            $value_20 = $object->getUsername();
            if (is_string($object->getUsername())) {
                $value_20 = $object->getUsername();
            }
            $data['username'] = $value_20;
        }
        return $data;
    }
}