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
class ChatUpdatePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ChatUpdatePostResponse200Message();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachments', $data)) {
            $values = array();
            foreach ($data['attachments'] as $value) {
                $values[] = $value;
            }
            $object->setAttachments($values);
        }
        if (\array_key_exists('blocks', $data)) {
            $object->setBlocks($data['blocks']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttachments()) {
            $values = array();
            foreach ($object->getAttachments() as $value) {
                $values[] = $value;
            }
            $data['attachments'] = $values;
        }
        if (null !== $object->getBlocks()) {
            $data['blocks'] = $object->getBlocks();
        }
        $data['text'] = $object->getText();
        return $data;
    }
}