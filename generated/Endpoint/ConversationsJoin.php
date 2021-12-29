<?php

namespace Comicat\Slack\Api\Endpoint;

class ConversationsJoin extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Joins an existing conversation.
     *
     * @param array $formParameters {
     *     @var string $channel ID of conversation to join
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     */
    public function __construct(array $formParameters = array(), array $headerParameters = array())
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Comicat\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/conversations.join';
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
        $optionsResolver->setDefined(array('channel'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('token'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsJoinPostResponse200|\Comicat\Slack\Api\Model\ConversationsJoinPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ConversationsJoinPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ConversationsJoinPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}