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
class AppsPermissionsScopesListGetResponse200ScopesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\AppsPermissionsScopesListGetResponse200Scopes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('app_home', $data)) {
            $values = array();
            foreach ($data['app_home'] as $value) {
                $values[] = $value;
            }
            $object->setAppHome($values);
            unset($data['app_home']);
        }
        if (\array_key_exists('channel', $data)) {
            $values_1 = array();
            foreach ($data['channel'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setChannel($values_1);
            unset($data['channel']);
        }
        if (\array_key_exists('group', $data)) {
            $values_2 = array();
            foreach ($data['group'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setGroup($values_2);
            unset($data['group']);
        }
        if (\array_key_exists('im', $data)) {
            $values_3 = array();
            foreach ($data['im'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setIm($values_3);
            unset($data['im']);
        }
        if (\array_key_exists('mpim', $data)) {
            $values_4 = array();
            foreach ($data['mpim'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setMpim($values_4);
            unset($data['mpim']);
        }
        if (\array_key_exists('team', $data)) {
            $values_5 = array();
            foreach ($data['team'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setTeam($values_5);
            unset($data['team']);
        }
        if (\array_key_exists('user', $data)) {
            $values_6 = array();
            foreach ($data['user'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setUser($values_6);
            unset($data['user']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAppHome()) {
            $values = array();
            foreach ($object->getAppHome() as $value) {
                $values[] = $value;
            }
            $data['app_home'] = $values;
        }
        if (null !== $object->getChannel()) {
            $values_1 = array();
            foreach ($object->getChannel() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['channel'] = $values_1;
        }
        if (null !== $object->getGroup()) {
            $values_2 = array();
            foreach ($object->getGroup() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['group'] = $values_2;
        }
        if (null !== $object->getIm()) {
            $values_3 = array();
            foreach ($object->getIm() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['im'] = $values_3;
        }
        if (null !== $object->getMpim()) {
            $values_4 = array();
            foreach ($object->getMpim() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['mpim'] = $values_4;
        }
        if (null !== $object->getTeam()) {
            $values_5 = array();
            foreach ($object->getTeam() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['team'] = $values_5;
        }
        if (null !== $object->getUser()) {
            $values_6 = array();
            foreach ($object->getUser() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['user'] = $values_6;
        }
        foreach ($object as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_7;
            }
        }
        return $data;
    }
}