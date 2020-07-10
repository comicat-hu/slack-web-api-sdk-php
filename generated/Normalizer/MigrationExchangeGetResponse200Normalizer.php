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
class MigrationExchangeGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\MigrationExchangeGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\MigrationExchangeGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\MigrationExchangeGetResponse200();
        if (\array_key_exists('enterprise_id', $data)) {
            $object->setEnterpriseId($data['enterprise_id']);
            unset($data['enterprise_id']);
        }
        if (\array_key_exists('invalid_user_ids', $data)) {
            $values = array();
            foreach ($data['invalid_user_ids'] as $value) {
                $values[] = $value;
            }
            $object->setInvalidUserIds($values);
            unset($data['invalid_user_ids']);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        }
        if (\array_key_exists('team_id', $data)) {
            $object->setTeamId($data['team_id']);
            unset($data['team_id']);
        }
        if (\array_key_exists('user_id_map', $data)) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['user_id_map'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setUserIdMap($values_1);
            unset($data['user_id_map']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEnterpriseId()) {
            $data['enterprise_id'] = $object->getEnterpriseId();
        }
        if (null !== $object->getInvalidUserIds()) {
            $values = array();
            foreach ($object->getInvalidUserIds() as $value) {
                $values[] = $value;
            }
            $data['invalid_user_ids'] = $values;
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        if (null !== $object->getTeamId()) {
            $data['team_id'] = $object->getTeamId();
        }
        if (null !== $object->getUserIdMap()) {
            $values_1 = array();
            foreach ($object->getUserIdMap() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['user_id_map'] = $values_1;
        }
        foreach ($object as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_2;
            }
        }
        return $data;
    }
}