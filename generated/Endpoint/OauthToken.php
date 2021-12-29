<?php

namespace Comicat\Slack\Api\Endpoint;

class OauthToken extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Exchanges a temporary OAuth verifier code for a workspace token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Issued when you created your application.
     *     @var string $client_secret Issued when you created your application.
     *     @var string $code The `code` param returned via the OAuth callback.
     *     @var string $redirect_uri This must match the originally submitted URI (if one was sent).
     *     @var bool $single_channel Request the user to add your app only to a single channel.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Comicat\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/oauth.token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('client_id', 'client_secret', 'code', 'redirect_uri', 'single_channel'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('client_id', array('string'));
        $optionsResolver->setAllowedTypes('client_secret', array('string'));
        $optionsResolver->setAllowedTypes('code', array('string'));
        $optionsResolver->setAllowedTypes('redirect_uri', array('string'));
        $optionsResolver->setAllowedTypes('single_channel', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\OauthTokenGetResponse200|\Comicat\Slack\Api\Model\OauthTokenGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\OauthTokenGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\OauthTokenGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}