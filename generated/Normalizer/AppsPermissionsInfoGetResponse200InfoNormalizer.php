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
class AppsPermissionsInfoGetResponse200InfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200Info';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200Info';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Comicat\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('app_home', $data)) {
            $object->setAppHome($this->denormalizer->denormalize($data['app_home'], 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoAppHome', 'json', $context));
        }
        if (\array_key_exists('channel', $data)) {
            $object->setChannel($this->denormalizer->denormalize($data['channel'], 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoChannel', 'json', $context));
        }
        if (\array_key_exists('group', $data)) {
            $object->setGroup($this->denormalizer->denormalize($data['group'], 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoGroup', 'json', $context));
        }
        if (\array_key_exists('im', $data)) {
            $object->setIm($this->denormalizer->denormalize($data['im'], 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoIm', 'json', $context));
        }
        if (\array_key_exists('mpim', $data)) {
            $object->setMpim($this->denormalizer->denormalize($data['mpim'], 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoMpim', 'json', $context));
        }
        if (\array_key_exists('team', $data)) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], 'Comicat\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoTeam', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['app_home'] = $this->normalizer->normalize($object->getAppHome(), 'json', $context);
        $data['channel'] = $this->normalizer->normalize($object->getChannel(), 'json', $context);
        $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
        $data['im'] = $this->normalizer->normalize($object->getIm(), 'json', $context);
        $data['mpim'] = $this->normalizer->normalize($object->getMpim(), 'json', $context);
        $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        return $data;
    }
}