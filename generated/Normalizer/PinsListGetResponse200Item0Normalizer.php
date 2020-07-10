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
class PinsListGetResponse200Item0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\PinsListGetResponse200Item0';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\PinsListGetResponse200Item0';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\PinsListGetResponse200Item0();
        if (\array_key_exists('items', $data)) {
            $value = $data['items'];
            if (is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values = array();
                foreach ($data['items'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, 'Comicat\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem0', 'json', $context);
                }
                $value = $values;
            } elseif (is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values_1 = array();
                foreach ($data['items'] as $value_2) {
                    $values_1[] = $this->denormalizer->denormalize($value_2, 'Comicat\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem1', 'json', $context);
                }
                $value = $values_1;
            }
            $object->setItems($value);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getItems()) {
            $value = $object->getItems();
            if (is_array($object->getItems())) {
                $values = array();
                foreach ($object->getItems() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (is_array($object->getItems())) {
                $values_1 = array();
                foreach ($object->getItems() as $value_2) {
                    $values_1[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value = $values_1;
            }
            $data['items'] = $value;
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        return $data;
    }
}