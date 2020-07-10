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
class ObjsImNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsIm';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsIm';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsIm();
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_app_home', $data)) {
            $object->setIsAppHome($data['is_app_home']);
        }
        if (\array_key_exists('is_archived', $data)) {
            $object->setIsArchived($data['is_archived']);
        }
        if (\array_key_exists('is_ext_shared', $data)) {
            $object->setIsExtShared($data['is_ext_shared']);
        }
        if (\array_key_exists('is_frozen', $data)) {
            $object->setIsFrozen($data['is_frozen']);
        }
        if (\array_key_exists('is_im', $data)) {
            $object->setIsIm($data['is_im']);
        }
        if (\array_key_exists('is_org_shared', $data)) {
            $object->setIsOrgShared($data['is_org_shared']);
        }
        if (\array_key_exists('is_shared', $data)) {
            $object->setIsShared($data['is_shared']);
        }
        if (\array_key_exists('is_user_deleted', $data)) {
            $object->setIsUserDeleted($data['is_user_deleted']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsAppHome()) {
            $data['is_app_home'] = $object->getIsAppHome();
        }
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        }
        if (null !== $object->getIsExtShared()) {
            $data['is_ext_shared'] = $object->getIsExtShared();
        }
        if (null !== $object->getIsFrozen()) {
            $data['is_frozen'] = $object->getIsFrozen();
        }
        if (null !== $object->getIsIm()) {
            $data['is_im'] = $object->getIsIm();
        }
        if (null !== $object->getIsOrgShared()) {
            $data['is_org_shared'] = $object->getIsOrgShared();
        }
        if (null !== $object->getIsShared()) {
            $data['is_shared'] = $object->getIsShared();
        }
        if (null !== $object->getIsUserDeleted()) {
            $data['is_user_deleted'] = $object->getIsUserDeleted();
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        return $data;
    }
}