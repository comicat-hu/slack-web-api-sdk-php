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
class DndInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\DndInfoGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\DndInfoGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\DndInfoGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
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
        if (\array_key_exists('snooze_endtime', $data)) {
            $object->setSnoozeEndtime($data['snooze_endtime']);
        }
        if (\array_key_exists('snooze_remaining', $data)) {
            $object->setSnoozeRemaining($data['snooze_remaining']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['dnd_enabled'] = $object->getDndEnabled();
        $data['next_dnd_end_ts'] = $object->getNextDndEndTs();
        $data['next_dnd_start_ts'] = $object->getNextDndStartTs();
        $data['ok'] = $object->getOk();
        if (null !== $object->getSnoozeEnabled()) {
            $data['snooze_enabled'] = $object->getSnoozeEnabled();
        }
        if (null !== $object->getSnoozeEndtime()) {
            $data['snooze_endtime'] = $object->getSnoozeEndtime();
        }
        if (null !== $object->getSnoozeRemaining()) {
            $data['snooze_remaining'] = $object->getSnoozeRemaining();
        }
        return $data;
    }
}