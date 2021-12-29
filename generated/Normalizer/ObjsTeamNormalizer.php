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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
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
            $value = $data['description'];
            if (is_string($data['description'])) {
                $value = $data['description'];
            }
            $object->setDescription($value);
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
        if (\array_key_exists('external_org_migrations', $data)) {
            $object->setExternalOrgMigrations($this->denormalizer->denormalize($data['external_org_migrations'], 'Comicat\\Slack\\Api\\Model\\ObjsExternalOrgMigrations', 'json', $context));
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
        if (\array_key_exists('is_over_storage_limit', $data)) {
            $object->setIsOverStorageLimit($data['is_over_storage_limit']);
        }
        if (\array_key_exists('limit_ts', $data)) {
            $object->setLimitTs($data['limit_ts']);
        }
        if (\array_key_exists('locale', $data)) {
            $object->setLocale($data['locale']);
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
        if (\array_key_exists('pay_prod_cur', $data)) {
            $object->setPayProdCur($data['pay_prod_cur']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($data['plan']);
        }
        if (\array_key_exists('primary_owner', $data)) {
            $object->setPrimaryOwner($this->denormalizer->denormalize($data['primary_owner'], 'Comicat\\Slack\\Api\\Model\\ObjsPrimaryOwner', 'json', $context));
        }
        if (\array_key_exists('sso_provider', $data)) {
            $object->setSsoProvider($this->denormalizer->denormalize($data['sso_provider'], 'Comicat\\Slack\\Api\\Model\\ObjsTeamSsoProvider', 'json', $context));
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
            $value = $object->getDescription();
            if (is_string($object->getDescription())) {
                $value = $object->getDescription();
            }
            $data['description'] = $value;
        }
        if (null !== $object->getDiscoverable()) {
            $data['discoverable'] = $object->getDiscoverable();
        }
        $data['domain'] = $object->getDomain();
        $data['email_domain'] = $object->getEmailDomain();
        if (null !== $object->getEnterpriseId()) {
            $data['enterprise_id'] = $object->getEnterpriseId();
        }
        if (null !== $object->getEnterpriseName()) {
            $data['enterprise_name'] = $object->getEnterpriseName();
        }
        if (null !== $object->getExternalOrgMigrations()) {
            $data['external_org_migrations'] = $this->normalizer->normalize($object->getExternalOrgMigrations(), 'json', $context);
        }
        if (null !== $object->getHasComplianceExport()) {
            $data['has_compliance_export'] = $object->getHasComplianceExport();
        }
        $data['icon'] = $this->normalizer->normalize($object->getIcon(), 'json', $context);
        $data['id'] = $object->getId();
        if (null !== $object->getIsAssigned()) {
            $data['is_assigned'] = $object->getIsAssigned();
        }
        if (null !== $object->getIsEnterprise()) {
            $data['is_enterprise'] = $object->getIsEnterprise();
        }
        if (null !== $object->getIsOverStorageLimit()) {
            $data['is_over_storage_limit'] = $object->getIsOverStorageLimit();
        }
        if (null !== $object->getLimitTs()) {
            $data['limit_ts'] = $object->getLimitTs();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        if (null !== $object->getMessagesCount()) {
            $data['messages_count'] = $object->getMessagesCount();
        }
        if (null !== $object->getMsgEditWindowMins()) {
            $data['msg_edit_window_mins'] = $object->getMsgEditWindowMins();
        }
        $data['name'] = $object->getName();
        if (null !== $object->getOverIntegrationsLimit()) {
            $data['over_integrations_limit'] = $object->getOverIntegrationsLimit();
        }
        if (null !== $object->getOverStorageLimit()) {
            $data['over_storage_limit'] = $object->getOverStorageLimit();
        }
        if (null !== $object->getPayProdCur()) {
            $data['pay_prod_cur'] = $object->getPayProdCur();
        }
        if (null !== $object->getPlan()) {
            $data['plan'] = $object->getPlan();
        }
        if (null !== $object->getPrimaryOwner()) {
            $data['primary_owner'] = $this->normalizer->normalize($object->getPrimaryOwner(), 'json', $context);
        }
        if (null !== $object->getSsoProvider()) {
            $data['sso_provider'] = $this->normalizer->normalize($object->getSsoProvider(), 'json', $context);
        }
        return $data;
    }
}