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
class TeamIntegrationLogsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\TeamIntegrationLogsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('logs', $data)) {
            $values = array();
            foreach ($data['logs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Comicat\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem', 'json', $context);
            }
            $object->setLogs($values);
        }
        if (\array_key_exists('ok', $data)) {
            $object->setOk($data['ok']);
        }
        if (\array_key_exists('paging', $data)) {
            $object->setPaging($this->denormalizer->denormalize($data['paging'], 'Comicat\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getLogs() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['logs'] = $values;
        $data['ok'] = $object->getOk();
        $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);
        return $data;
    }
}