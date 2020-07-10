<?php

namespace Comicat\Slack\Api\Endpoint;

class UsersSetPhoto extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Set the user profile photo
     *
     * @param array $formParameters {
     *     @var string $image File contents via `multipart/form-data`.
     *     @var int $crop_w Width/height of crop box (always square)
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     *     @var int $crop_y Y coordinate of top-left corner of crop box
     *     @var int $crop_x X coordinate of top-left corner of crop box
     * }
     */
    public function __construct(array $formParameters = array())
    {
        $this->formParameters = $formParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
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
        $optionsResolver->setDefined(array('image', 'crop_w', 'token', 'crop_y', 'crop_x'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('image', array('string'));
        $optionsResolver->setAllowedTypes('crop_w', array('int'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('crop_y', array('int'));
        $optionsResolver->setAllowedTypes('crop_x', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\UsersSetPhotoPostResponse200|\Comicat\Slack\Api\Model\UsersSetPhotoPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
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