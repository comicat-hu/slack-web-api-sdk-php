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
class ObjsEnterpriseUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsEnterpriseUser';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsEnterpriseUser';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsEnterpriseUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enterprise_id', $data)) {
            $object->setEnterpriseId($data['enterprise_id']);
        }
        if (\array_key_exists('enterprise_name', $data)) {
            $object->setEnterpriseName($data['enterprise_name']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_admin', $data)) {
            $object->setIsAdmin($data['is_admin']);
        }
        if (\array_key_exists('is_owner', $data)) {
            $object->setIsOwner($data['is_owner']);
        }
        if (\array_key_exists('teams', $data)) {
            $values = array();
            foreach ($data['teams'] as $value) {
                $values[] = $value;
            }
            $object->setTeams($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['enterprise_id'] = $object->getEnterpriseId();
        $data['enterprise_name'] = $object->getEnterpriseName();
        $data['id'] = $object->getId();
        $data['is_admin'] = $object->getIsAdmin();
        $data['is_owner'] = $object->getIsOwner();
        $values = array();
        foreach ($object->getTeams() as $value) {
            $values[] = $value;
        }
        $data['teams'] = $values;
        return $data;
    }
}