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
class FilesInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\FilesInfoGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\FilesInfoGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\FilesInfoGetResponse200();
        if (\array_key_exists('comments', $data)) {
            $value = $data['comments'];
            $object->setComments($value);
        }
        if (\array_key_exists('content_html', $data)) {
            $object->setContentHtml($data['content_html']);
        }
        if (\array_key_exists('editor', $data)) {
            $object->setEditor($data['editor']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'Comicat\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('paging', $data)) {
            $object->setPaging($this->denormalizer->denormalize($data['paging'], 'Comicat\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
        }
        if (\array_key_exists('response_metadata', $data)) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'Comicat\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getComments()) {
            $value = $object->getComments();
            $data['comments'] = $value;
        }
        if (null !== $object->getContentHtml()) {
            $data['content_html'] = $object->getContentHtml();
        }
        if (null !== $object->getEditor()) {
            $data['editor'] = $object->getEditor();
        }
        if (null !== $object->getFile()) {
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        if (null !== $object->getPaging()) {
            $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);
        }
        if (null !== $object->getResponseMetadata()) {
            $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        }
        return $data;
    }
}