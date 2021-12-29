<?php

namespace Comicat\Slack\Api\Endpoint;

class AuthRevoke extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Revokes a token.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var bool $test Setting this parameter to `1` triggers a _testing mode_ where the specified token will not actually be revoked.
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
        return '/auth.revoke';
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
        $optionsResolver->setDefined(array('token', 'test'));
        $optionsResolver->setRequired(array('token'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('test', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\AuthRevokeGetResponse200|\Comicat\Slack\Api\Model\AuthRevokeGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AuthRevokeGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AuthRevokeGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}