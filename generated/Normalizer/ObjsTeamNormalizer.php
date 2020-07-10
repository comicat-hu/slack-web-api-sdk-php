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
class ObjsTeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsTeam';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsTeam';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsTeam();
        if (\array_key_exists('archived', $data)) {
            $object->setArchived($data['archived']);
        }
        if (\array_key_exists('avatar_base_url', $data)) {
            $object->setAvatarBaseUrl($data['avatar_base_url']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('date_create', $data)) {
            $object->setDateCreate($data['date_create']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('discoverable', $data)) {
            $object->setDiscoverable($data['discoverable']);
        }
        if (\array_key_exists('domain', $data)) {
            $object->setDomain($data['domain']);
        }
        if (\array_key_exists('email_domain', $data)) {
            $object->setEmailDomain($data['email_domain']);
        }
        if (\array_key_exists('enterprise_id', $data)) {
            $object->setEnterpriseId($data['enterprise_id']);
        }
        if (\array_key_exists('enterprise_name', $data)) {
            $object->setEnterpriseName($data['enterprise_name']);
        }
        if (\array_key_exists('has_compliance_export', $data)) {
            $object->setHasComplianceExport($data['has_compliance_export']);
        }
        if (\array_key_exists('icon', $data)) {
            $object->setIcon($this->denormalizer->denormalize($data['icon'], 'Comicat\\Slack\\Api\\Model\\ObjsIcon', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_assigned', $data)) {
            $object->setIsAssigned($data['is_assigned']);
        }
        if (\array_key_exists('is_enterprise', $data)) {
            $object->setIsEnterprise($data['is_enterprise']);
        }
        if (\array_key_exists('limit_ts', $data)) {
            $object->setLimitTs($data['limit_ts']);
        }
        if (\array_key_exists('messages_count', $data)) {
            $object->setMessagesCount($data['messages_count']);
        }
        if (\array_key_exists('msg_edit_window_mins', $data)) {
            $object->setMsgEditWindowMins($data['msg_edit_window_mins']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('over_integrations_limit', $data)) {
            $object->setOverIntegrationsLimit($data['over_integrations_limit']);
        }
        if (\array_key_exists('over_storage_limit', $data)) {
            $object->setOverStorageLimit($data['over_storage_limit']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($data['plan']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArchived()) {
            $data['archived'] = $object->getArchived();
        }
        if (null !== $object->getAvatarBaseUrl()) {
            $data['avatar_base_url'] = $object->getAvatarBaseUrl();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getDateCreate()) {
            $data['date_create'] = $object->getDateCreate();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDiscoverable()) {
            $data['discoverable'] = $object->getDiscoverable();
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getEmailDomain()) {
            $data['email_domain'] = $object->getEmailDomain();
        }
        if (null !== $object->getEnterpriseId()) {
            $data['enterprise_id'] = $object->getEnterpriseId();
        }
        if (null !== $object->getEnterpriseName()) {
            $data['enterprise_name'] = $object->getEnterpriseName();
        }
        if (null !== $object->getHasComplianceExport()) {
            $data['has_compliance_export'] = $object->getHasComplianceExport();
        }
        if (null !== $object->getIcon()) {
            $data['icon'] = $this->normalizer->normalize($object->getIcon(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsAssigned()) {
            $data['is_assigned'] = $object->getIsAssigned();
        }
        if (null !== $object->getIsEnterprise()) {
            $data['is_enterprise'] = $object->getIsEnterprise();
        }
        if (null !== $object->getLimitTs()) {
            $data['limit_ts'] = $object->getLimitTs();
        }
        if (null !== $object->getMessagesCount()) {
            $data['messages_count'] = $object->getMessagesCount();
        }
        if (null !== $object->getMsgEditWindowMins()) {
            $data['msg_edit_window_mins'] = $object->getMsgEditWindowMins();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOverIntegrationsLimit()) {
            $data['over_integrations_limit'] = $object->getOverIntegrationsLimit();
        }
        if (null !== $object->getOverStorageLimit()) {
            $data['over_storage_limit'] = $object->getOverStorageLimit();
        }
        if (null !== $object->getPlan()) {
            $data['plan'] = $object->getPlan();
        }
        return $data;
    }
}