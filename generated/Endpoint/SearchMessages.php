<?php

namespace Comicat\Slack\Api\Endpoint;

class SearchMessages extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Searches for messages matching a query.
     *
     * @param array $queryParameters {
     *     @var string $sort_dir Change sort direction to ascending (`asc`) or descending (`desc`).
     *     @var string $query Search query.
     *     @var string $sort Return matches sorted by either `score` or `timestamp`.
     *     @var int $count Pass the number of results you want per "page". Maximum of `100`.
     *     @var string $token Authentication token. Requires scope: `search:read`
     *     @var bool $highlight Pass a value of `true` to enable query highlight markers (see below).
     *     @var int $page 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/search.messages';
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
        $optionsResolver->setDefined(array('sort_dir', 'query', 'sort', 'count', 'token', 'highlight', 'page'));
        $optionsResolver->setRequired(array('query', 'token'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('sort_dir', array('string'));
        $optionsResolver->setAllowedTypes('query', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('count', array('int'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('highlight', array('bool'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\SearchMessagesGetResponse200|\Comicat\Slack\Api\Model\SearchMessagesGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\SearchMessagesGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\SearchMessagesGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}