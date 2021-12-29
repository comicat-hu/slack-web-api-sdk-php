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
class TeamAccessLogsGetResponse200LoginsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200LoginsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200LoginsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
        }
        if (\array_key_exists('country', $data)) {
            $value = $data['country'];
            if (is_string($data['country'])) {
                $value = $data['country'];
            }
            $object->setCountry($value);
        }
        if (\array_key_exists('date_first', $data)) {
            $object->setDateFirst($data['date_first']);
        }
        if (\array_key_exists('date_last', $data)) {
            $object->setDateLast($data['date_last']);
        }
        if (\array_key_exists('ip', $data)) {
            $value_1 = $data['ip'];
            if (is_string($data['ip'])) {
                $value_1 = $data['ip'];
            }
            $object->setIp($value_1);
        }
        if (\array_key_exists('isp', $data)) {
            $value_2 = $data['isp'];
            if (is_string($data['isp'])) {
                $value_2 = $data['isp'];
            }
            $object->setIsp($value_2);
        }
        if (\array_key_exists('region', $data)) {
            $value_3 = $data['region'];
            if (is_string($data['region'])) {
                $value_3 = $data['region'];
            }
            $object->setRegion($value_3);
        }
        if (\array_key_exists('user_agent', $data)) {
            $object->setUserAgent($data['user_agent']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['count'] = $object->getCount();
        $value = $object->getCountry();
        if (is_string($object->getCountry())) {
            $value = $object->getCountry();
        }
        $data['country'] = $value;
        $data['date_first'] = $object->getDateFirst();
        $data['date_last'] = $object->getDateLast();
        $value_1 = $object->getIp();
        if (is_string($object->getIp())) {
            $value_1 = $object->getIp();
        }
        $data['ip'] = $value_1;
        $value_2 = $object->getIsp();
        if (is_string($object->getIsp())) {
            $value_2 = $object->getIsp();
        }
        $data['isp'] = $value_2;
        $value_3 = $object->getRegion();
        if (is_string($object->getRegion())) {
            $value_3 = $object->getRegion();
        }
        $data['region'] = $value_3;
        $data['user_agent'] = $object->getUserAgent();
        $data['user_id'] = $object->getUserId();
        $data['username'] = $object->getUsername();
        return $data;
    }
}