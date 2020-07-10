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
class DndEndSnoozePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\DndEndSnoozePostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\DndEndSnoozePostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\DndEndSnoozePostResponse200();
        if (\array_key_exists('dnd_enabled', $data)) {
            $object->setDndEnabled($data['dnd_enabled']);
        }
        if (\array_key_exists('next_dnd_end_ts', $data)) {
            $object->setNextDndEndTs($data['next_dnd_end_ts']);
        }
        if (\array_key_exists('next_dnd_start_ts', $data)) {
            $object->setNextDndStartTs($data['next_dnd_start_ts']);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('snooze_enabled', $data)) {
            $object->setSnoozeEnabled($data['snooze_enabled']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDndEnabled()) {
            $data['dnd_enabled'] = $object->getDndEnabled();
        }
        if (null !== $object->getNextDndEndTs()) {
            $data['next_dnd_end_ts'] = $object->getNextDndEndTs();
        }
        if (null !== $object->getNextDndStartTs()) {
            $data['next_dnd_start_ts'] = $object->getNextDndStartTs();
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        if (null !== $object->getSnoozeEnabled()) {
            $data['snooze_enabled'] = $object->getSnoozeEnabled();
        }
        return $data;
    }
}