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
class TeamIntegrationLogsGetResponse200LogsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem();
        if (\array_key_exists('admin_app_id', $data)) {
            $object->setAdminAppId($data['admin_app_id']);
        }
        if (\array_key_exists('app_id', $data)) {
            $object->setAppId($data['app_id']);
        }
        if (\array_key_exists('app_type', $data)) {
            $object->setAppType($data['app_type']);
        }
        if (\array_key_exists('change_type', $data)) {
            $object->setChangeType($data['change_type']);
        }
        if (\array_key_exists('channel', $data)) {
            $object->setChannel($data['channel']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
        }
        if (\array_key_exists('service_id', $data)) {
            $object->setServiceId($data['service_id']);
        }
        if (\array_key_exists('service_type', $data)) {
            $object->setServiceType($data['service_type']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
        }
        if (\array_key_exists('user_name', $data)) {
            $object->setUserName($data['user_name']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdminAppId()) {
            $data['admin_app_id'] = $object->getAdminAppId();
        }
        if (null !== $object->getAppId()) {
            $data['app_id'] = $object->getAppId();
        }
        if (null !== $object->getAppType()) {
            $data['app_type'] = $object->getAppType();
        }
        if (null !== $object->getChangeType()) {
            $data['change_type'] = $object->getChangeType();
        }
        if (null !== $object->getChannel()) {
            $data['channel'] = $object->getChannel();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        if (null !== $object->getServiceId()) {
            $data['service_id'] = $object->getServiceId();
        }
        if (null !== $object->getServiceType()) {
            $data['service_type'] = $object->getServiceType();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data['user_name'] = $object->getUserName();
        }
        return $data;
    }
}