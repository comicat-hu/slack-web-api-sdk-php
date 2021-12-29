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
class ObjsUserItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsUserItem1';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsUserItem1';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsUserItem1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('color', $data)) {
            $object->setColor($data['color']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('enterprise_user', $data)) {
            $object->setEnterpriseUser($this->denormalizer->denormalize($data['enterprise_user'], 'Comicat\\Slack\\Api\\Model\\ObjsEnterpriseUser', 'json', $context));
        }
        if (\array_key_exists('has_2fa', $data)) {
            $object->setHas2fa($data['has_2fa']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_admin', $data)) {
            $object->setIsAdmin($data['is_admin']);
        }
        if (\array_key_exists('is_app_user', $data)) {
            $object->setIsAppUser($data['is_app_user']);
        }
        if (\array_key_exists('is_bot', $data)) {
            $object->setIsBot($data['is_bot']);
        }
        if (\array_key_exists('is_external', $data)) {
            $object->setIsExternal($data['is_external']);
        }
        if (\array_key_exists('is_forgotten', $data)) {
            $object->setIsForgotten($data['is_forgotten']);
        }
        if (\array_key_exists('is_owner', $data)) {
            $object->setIsOwner($data['is_owner']);
        }
        if (\array_key_exists('is_primary_owner', $data)) {
            $object->setIsPrimaryOwner($data['is_primary_owner']);
        }
        if (\array_key_exists('is_restricted', $data)) {
            $object->setIsRestricted($data['is_restricted']);
        }
        if (\array_key_exists('is_stranger', $data)) {
            $object->setIsStranger($data['is_stranger']);
        }
        if (\array_key_exists('is_ultra_restricted', $data)) {
            $object->setIsUltraRestricted($data['is_ultra_restricted']);
        }
        if (\array_key_exists('locale', $data)) {
            $object->setLocale($data['locale']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('presence', $data)) {
            $object->setPresence($data['presence']);
        }
        if (\array_key_exists('profile', $data)) {
            $object->setProfile($this->denormalizer->denormalize($data['profile'], 'Comicat\\Slack\\Api\\Model\\ObjsUserProfile', 'json', $context));
        }
        if (\array_key_exists('real_name', $data)) {
            $object->setRealName($data['real_name']);
        }
        if (\array_key_exists('team_id', $data)) {
            $object->setTeamId($data['team_id']);
        }
        if (\array_key_exists('team_profile', $data)) {
            $object->setTeamProfile($this->denormalizer->denormalize($data['team_profile'], 'Comicat\\Slack\\Api\\Model\\ObjsUserItem1TeamProfile', 'json', $context));
        }
        if (\array_key_exists('teams', $data)) {
            $values = array();
            foreach ($data['teams'] as $value) {
                $values[] = $value;
            }
            $object->setTeams($values);
        }
        if (\array_key_exists('two_factor_type', $data)) {
            $object->setTwoFactorType($data['two_factor_type']);
        }
        if (\array_key_exists('tz', $data)) {
            $object->setTz($data['tz']);
        }
        if (\array_key_exists('tz_label', $data)) {
            $object->setTzLabel($data['tz_label']);
        }
        if (\array_key_exists('tz_offset', $data)) {
            $object->setTzOffset($data['tz_offset']);
        }
        if (\array_key_exists('updated', $data)) {
            $object->setUpdated($data['updated']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getEnterpriseUser()) {
            $data['enterprise_user'] = $this->normalizer->normalize($object->getEnterpriseUser(), 'json', $context);
        }
        if (null !== $object->getHas2fa()) {
            $data['has_2fa'] = $object->getHas2fa();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getIsAdmin()) {
            $data['is_admin'] = $object->getIsAdmin();
        }
        $data['is_app_user'] = $object->getIsAppUser();
        $data['is_bot'] = $object->getIsBot();
        if (null !== $object->getIsExternal()) {
            $data['is_external'] = $object->getIsExternal();
        }
        if (null !== $object->getIsForgotten()) {
            $data['is_forgotten'] = $object->getIsForgotten();
        }
        if (null !== $object->getIsOwner()) {
            $data['is_owner'] = $object->getIsOwner();
        }
        if (null !== $object->getIsPrimaryOwner()) {
            $data['is_primary_owner'] = $object->getIsPrimaryOwner();
        }
        if (null !== $object->getIsRestricted()) {
            $data['is_restricted'] = $object->getIsRestricted();
        }
        if (null !== $object->getIsStranger()) {
            $data['is_stranger'] = $object->getIsStranger();
        }
        if (null !== $object->getIsUltraRestricted()) {
            $data['is_ultra_restricted'] = $object->getIsUltraRestricted();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        $data['name'] = $object->getName();
        if (null !== $object->getPresence()) {
            $data['presence'] = $object->getPresence();
        }
        $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        if (null !== $object->getRealName()) {
            $data['real_name'] = $object->getRealName();
        }
        if (null !== $object->getTeamId()) {
            $data['team_id'] = $object->getTeamId();
        }
        if (null !== $object->getTeamProfile()) {
            $data['team_profile'] = $this->normalizer->normalize($object->getTeamProfile(), 'json', $context);
        }
        if (null !== $object->getTeams()) {
            $values = array();
            foreach ($object->getTeams() as $value) {
                $values[] = $value;
            }
            $data['teams'] = $values;
        }
        if (null !== $object->getTwoFactorType()) {
            $data['two_factor_type'] = $object->getTwoFactorType();
        }
        if (null !== $object->getTz()) {
            $data['tz'] = $object->getTz();
        }
        if (null !== $object->getTzLabel()) {
            $data['tz_label'] = $object->getTzLabel();
        }
        if (null !== $object->getTzOffset()) {
            $data['tz_offset'] = $object->getTzOffset();
        }
        $data['updated'] = $object->getUpdated();
        return $data;
    }
}