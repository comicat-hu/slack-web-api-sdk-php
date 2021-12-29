<?php

namespace Comicat\Slack\Api\Endpoint;

class ChatUnfurl extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Provide custom unfurl behavior for user-posted URLs
     *
     * @param array $formParameters {
     *     @var string $channel Channel ID of the message
     *     @var string $ts Timestamp of the message to add unfurl behavior to.
     *     @var string $unfurls URL-encoded JSON map with keys set to URLs featured in the the message, pointing to their unfurl blocks or message attachments.
     *     @var string $user_auth_message Provide a simply-formatted string to send as an ephemeral message to the user as invitation to authenticate further and enable full unfurling behavior
     *     @var bool $user_auth_required Set to `true` or `1` to indicate the user must install your Slack app to trigger unfurls for this domain
     *     @var string $user_auth_url Send users to this custom URL where they will complete authentication in your app to fully trigger unfurling. Value should be properly URL-encoded.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `links:write`
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
        return '/chat.unfurl';
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
        $optionsResolver->setDefined(array('channel', 'ts', 'unfurls', 'user_auth_message', 'user_auth_required', 'user_auth_url'));
        $optionsResolver->setRequired(array('channel', 'ts'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel', array('string'));
        $optionsResolver->setAllowedTypes('ts', array('string'));
        $optionsResolver->setAllowedTypes('unfurls', array('string'));
        $optionsResolver->setAllowedTypes('user_auth_message', array('string'));
        $optionsResolver->setAllowedTypes('user_auth_required', array('bool'));
        $optionsResolver->setAllowedTypes('user_auth_url', array('string'));
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
     * @return null|\Comicat\Slack\Api\Model\ChatUnfurlPostResponse200|\Comicat\Slack\Api\Model\ChatUnfurlPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ChatUnfurlPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ChatUnfurlPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}