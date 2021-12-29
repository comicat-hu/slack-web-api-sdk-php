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
class ObjsExternalOrgMigrationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\ObjsExternalOrgMigrations';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\ObjsExternalOrgMigrations';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\ObjsExternalOrgMigrations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current', $data)) {
            $values = array();
            foreach ($data['current'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Comicat\\Slack\\Api\\Model\\ObjsExternalOrgMigrationsCurrentItem', 'json', $context);
            }
            $object->setCurrent($values);
        }
        if (\array_key_exists('date_updated', $data)) {
            $object->setDateUpdated($data['date_updated']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getCurrent() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['current'] = $values;
        $data['date_updated'] = $object->getDateUpdated();
        return $data;
    }
}