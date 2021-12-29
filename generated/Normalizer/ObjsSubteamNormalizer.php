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
class ObjsSubteamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsSubteam';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsSubteam';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsSubteam();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('auto_provision', $data)) {
            $object->setAutoProvision($data['auto_provision']);
        }
        if (\array_key_exists('auto_type', $data)) {
            $object->setAutoType($data['auto_type']);
        }
        if (\array_key_exists('channel_count', $data)) {
            $object->setChannelCount($data['channel_count']);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->setCreatedBy($data['created_by']);
        }
        if (\array_key_exists('date_create', $data)) {
            $object->setDateCreate($data['date_create']);
        }
        if (\array_key_exists('date_delete', $data)) {
            $object->setDateDelete($data['date_delete']);
        }
        if (\array_key_exists('date_update', $data)) {
            $object->setDateUpdate($data['date_update']);
        }
        if (\array_key_exists('deleted_by', $data)) {
            $object->setDeletedBy($data['deleted_by']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('enterprise_subteam_id', $data)) {
            $object->setEnterpriseSubteamId($data['enterprise_subteam_id']);
        }
        if (\array_key_exists('handle', $data)) {
            $object->setHandle($data['handle']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_external', $data)) {
            $object->setIsExternal($data['is_external']);
        }
        if (\array_key_exists('is_subteam', $data)) {
            $object->setIsSubteam($data['is_subteam']);
        }
        if (\array_key_exists('is_usergroup', $data)) {
            $object->setIsUsergroup($data['is_usergroup']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('prefs', $data)) {
            $object->setPrefs($this->denormalizer->denormalize($data['prefs'], 'Comicat\\Slack\\Api\\Model\\ObjsSubteamPrefs', 'json', $context));
        }
        if (\array_key_exists('team_id', $data)) {
            $object->setTeamId($data['team_id']);
        }
        if (\array_key_exists('updated_by', $data)) {
            $object->setUpdatedBy($data['updated_by']);
        }
        if (\array_key_exists('user_count', $data)) {
            $object->setUserCount($data['user_count']);
        }
        if (\array_key_exists('users', $data)) {
            $values = array();
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['auto_provision'] = $object->getAutoProvision();
        $data['auto_type'] = $object->getAutoType();
        if (null !== $object->getChannelCount()) {
            $data['channel_count'] = $object->getChannelCount();
        }
        $data['created_by'] = $object->getCreatedBy();
        $data['date_create'] = $object->getDateCreate();
        $data['date_delete'] = $object->getDateDelete();
        $data['date_update'] = $object->getDateUpdate();
        $data['deleted_by'] = $object->getDeletedBy();
        $data['description'] = $object->getDescription();
        $data['enterprise_subteam_id'] = $object->getEnterpriseSubteamId();
        $data['handle'] = $object->getHandle();
        $data['id'] = $object->getId();
        $data['is_external'] = $object->getIsExternal();
        $data['is_subteam'] = $object->getIsSubteam();
        $data['is_usergroup'] = $object->getIsUsergroup();
        $data['name'] = $object->getName();
        $data['prefs'] = $this->normalizer->normalize($object->getPrefs(), 'json', $context);
        $data['team_id'] = $object->getTeamId();
        $data['updated_by'] = $object->getUpdatedBy();
        if (null !== $object->getUserCount()) {
            $data['user_count'] = $object->getUserCount();
        }
        if (null !== $object->getUsers()) {
            $values = array();
            foreach ($object->getUsers() as $value) {
                $values[] = $value;
            }
            $data['users'] = $values;
        }
        return $data;
    }
}