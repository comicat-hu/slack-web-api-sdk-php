<?php

namespace Comicat\Slack\Api\Endpoint;

class UsersSetPhoto extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Set the user profile photo
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     *     @var string $crop_w Width/height of crop box (always square)
     *     @var string $crop_x X coordinate of top-left corner of crop box
     *     @var string $crop_y Y coordinate of top-left corner of crop box
     *     @var string $image File contents via `multipart/form-data`.
     * }
     */
    public function __construct(array $formParameters = array())
    {
        $this->formParameters = $formParameters;
    }
    use \Comicat\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/users.setPhoto';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getFormBody();
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getFormOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(array('token', 'crop_w', 'crop_x', 'crop_y', 'image'));
        $optionsResolver->setRequired(array('token'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('crop_w', array('string'));
        $optionsResolver->setAllowedTypes('crop_x', array('string'));
        $optionsResolver->setAllowedTypes('crop_y', array('string'));
        $optionsResolver->setAllowedTypes('image', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\UsersSetPhotoPostResponse200|\Comicat\Slack\Api\Model\UsersSetPhotoPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\UsersSetPhotoPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}