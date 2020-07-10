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
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('fields', $data)) {
            $value = $data['fields'];
            if (is_array($data['fields']) && $this->isOnlyNumericKeys($data['fields'])) {
                $values = array();
                foreach ($data['fields'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (isset($data['fields'])) {
                $value = $data['fields'];
            }
            $object->setFields($value);
        }
        if (\array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
        }
        if (\array_key_exists('guest_expiration_ts', $data)) {
            $object->setGuestExpirationTs($data['guest_expiration_ts']);
        }
        if (\array_key_exists('guest_invited_by', $data)) {
            $object->setGuestInvitedBy($data['guest_invited_by']);
        }
        if (\array_key_exists('image_1024', $data)) {
            $object->setImage1024($data['image_1024']);
        }
        if (\array_key_exists('image_192', $data)) {
            $object->setImage192($data['image_192']);
        }
        if (\array_key_exists('image_24', $data)) {
            $object->setImage24($data['image_24']);
        }
        if (\array_key_exists('image_32', $data)) {
            $object->setImage32($data['image_32']);
        }
        if (\array_key_exists('image_48', $data)) {
            $object->setImage48($data['image_48']);
        }
        if (\array_key_exists('image_512', $data)) {
            $object->setImage512($data['image_512']);
        }
        if (\array_key_exists('image_72', $data)) {
            $object->setImage72($data['image_72']);
        }
        if (\array_key_exists('image_original', $data)) {
            $object->setImageOriginal($data['image_original']);
        }
        if (\array_key_exists('is_custom_image', $data)) {
            $object->setIsCustomImage($data['is_custom_image']);
        }
        if (\array_key_exists('last_name', $data)) {
            $object->setLastName($data['last_name']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
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
            $object->setStatusTextCanonical($data['status_text_canonical']);
        }
        if (\array_key_exists('team', $data)) {
            $object->setTeam($data['team']);
        }
        if (\array_key_exists('teams', $data)) {
            $object->setTeams($data['teams']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
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
        if (null !== $object->getAvatarHash()) {
            $data['avatar_hash'] = $object->getAvatarHash();
        }
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        if (null !== $object->getDisplayName()) {
            $data['display_name'] = $object->getDisplayName();
        }
        if (null !== $object->getDisplayNameNormalized()) {
            $data['display_name_normalized'] = $object->getDisplayNameNormalized();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFields()) {
            $value = $object->getFields();
            if (is_array($object->getFields())) {
                $values = array();
                foreach ($object->getFields() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (!is_null($object->getFields())) {
                $value = $object->getFields();
            }
            $data['fields'] = $value;
        }
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getGuestExpirationTs()) {
            $data['guest_expiration_ts'] = $object->getGuestExpirationTs();
        }
        if (null !== $object->getGuestInvitedBy()) {
            $data['guest_invited_by'] = $object->getGuestInvitedBy();
        }
        if (null !== $object->getImage1024()) {
            $data['image_1024'] = $object->getImage1024();
        }
        if (null !== $object->getImage192()) {
            $data['image_192'] = $object->getImage192();
        }
        if (null !== $object->getImage24()) {
            $data['image_24'] = $object->getImage24();
        }
        if (null !== $object->getImage32()) {
            $data['image_32'] = $object->getImage32();
        }
        if (null !== $object->getImage48()) {
            $data['image_48'] = $object->getImage48();
        }
        if (null !== $object->getImage512()) {
            $data['image_512'] = $object->getImage512();
        }
        if (null !== $object->getImage72()) {
            $data['image_72'] = $object->getImage72();
        }
        if (null !== $object->getImageOriginal()) {
            $data['image_original'] = $object->getImageOriginal();
        }
        if (null !== $object->getIsCustomImage()) {
            $data['is_custom_image'] = $object->getIsCustomImage();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getRealName()) {
            $data['real_name'] = $object->getRealName();
        }
        if (null !== $object->getRealNameNormalized()) {
            $data['real_name_normalized'] = $object->getRealNameNormalized();
        }
        if (null !== $object->getSkype()) {
            $data['skype'] = $object->getSkype();
        }
        if (null !== $object->getStatusEmoji()) {
            $data['status_emoji'] = $object->getStatusEmoji();
        }
        if (null !== $object->getStatusExpiration()) {
            $data['status_expiration'] = $object->getStatusExpiration();
        }
        if (null !== $object->getStatusText()) {
            $data['status_text'] = $object->getStatusText();
        }
        if (null !== $object->getStatusTextCanonical()) {
            $data['status_text_canonical'] = $object->getStatusTextCanonical();
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        if (null !== $object->getTeams()) {
            $data['teams'] = $object->getTeams();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        return $data;
    }
}