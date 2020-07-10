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
class ImOpenPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ImOpenPostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ImOpenPostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ImOpenPostResponse200();
        if (\array_key_exists('already_open', $data)) {
            $object->setAlreadyOpen($data['already_open']);
        }
        if (\array_key_exists('channel', $data)) {
            $object->setChannel($this->denormalizer->denormalize($data['channel'], 'Comicat\\Slack\\Api\\Model\\ImOpenPostResponse200Channel', 'json', $context));
        }
        if (\array_key_exists('no_op', $data)) {
            $object->setNoOp($data['no_op']);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAlreadyOpen()) {
            $data['already_open'] = $object->getAlreadyOpen();
        }
        if (null !== $object->getChannel()) {
            $data['channel'] = $this->normalizer->normalize($object->getChannel(), 'json', $context);
        }
        if (null !== $object->getNoOp()) {
            $data['no_op'] = $object->getNoOp();
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        return $data;
    }
}