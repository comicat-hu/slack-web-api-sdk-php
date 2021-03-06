<?php

namespace Comicat\Slack\Api\Endpoint;

class DndEndSnooze extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Ends the current user's snooze mode immediately.
     *
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `dnd:write`
     * }
     */
    public function __construct(array $headerParameters = array())
    {
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/dnd.endSnooze';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
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
     * @return null|\Comicat\Slack\Api\Model\DndEndSnoozePostResponse200|\Comicat\Slack\Api\Model\DndEndSnoozePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\DndEndSnoozePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\DndEndSnoozePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}