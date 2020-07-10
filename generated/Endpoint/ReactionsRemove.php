<?php

namespace Comicat\Slack\Api\Endpoint;

class ReactionsRemove extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Removes a reaction from an item.
     *
     * @param array $formParameters {
     *     @var string $name Reaction (emoji) name.
     *     @var string $file_comment File comment to remove reaction from.
     *     @var string $timestamp Timestamp of the message to remove reaction from.
     *     @var string $file File to remove reaction from.
     *     @var string $channel Channel where the message to remove reaction from was posted.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `reactions:write`
     * }
     */
    public function __construct(array $formParameters = array(), array $headerParameters = array())
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/reactions.remove';
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
        $optionsResolver->setDefined(array('name', 'file_comment', 'timestamp', 'file', 'channel'));
        $optionsResolver->setRequired(array('name'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('file_comment', array('string'));
        $optionsResolver->setAllowedTypes('timestamp', array('string'));
        $optionsResolver->setAllowedTypes('file', array('string'));
        $optionsResolver->setAllowedTypes('channel', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('token'));
        $optionsResolver->setRequired(array('token'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\ReactionsRemovePostResponse200|\Comicat\Slack\Api\Model\ReactionsRemovePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ReactionsRemovePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ReactionsRemovePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}