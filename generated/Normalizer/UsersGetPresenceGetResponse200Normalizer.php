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
class UsersGetPresenceGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\UsersGetPresenceGetResponse200();
        if (\array_key_exists('auto_away', $data)) {
            $object->setAutoAway($data['auto_away']);
            unset($data['auto_away']);
        }
        if (\array_key_exists('connection_count', $data)) {
            $object->setConnectionCount($data['connection_count']);
            unset($data['connection_count']);
        }
        if (\array_key_exists('last_activity', $data)) {
            $object->setLastActivity($data['last_activity']);
            unset($data['last_activity']);
        }
        if (\array_key_exists('manual_away', $data)) {
            $object->setManualAway($data['manual_away']);
            unset($data['manual_away']);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        }
        if (\array_key_exists('online', $data)) {
            $object->setOnline($data['online']);
            unset($data['online']);
        }
        if (\array_key_exists('presence', $data)) {
            $object->setPresence($data['presence']);
            unset($data['presence']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAutoAway()) {
            $data['auto_away'] = $object->getAutoAway();
        }
        if (null !== $object->getConnectionCount()) {
            $data['connection_count'] = $object->getConnectionCount();
        }
        if (null !== $object->getLastActivity()) {
            $data['last_activity'] = $object->getLastActivity();
        }
        if (null !== $object->getManualAway()) {
            $data['manual_away'] = $object->getManualAway();
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        if (null !== $object->getOnline()) {
            $data['online'] = $object->getOnline();
        }
        if (null !== $object->getPresence()) {
            $data['presence'] = $object->getPresence();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}