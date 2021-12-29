<?php

namespace Comicat\Slack\Api\Endpoint;

class SearchMessages extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Searches for messages matching a query.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `search:read`
     *     @var int $count Pass the number of results you want per "page". Maximum of `100`.
     *     @var bool $highlight Pass a value of `true` to enable query highlight markers (see below).
     *     @var int $page 
     *     @var string $query Search query.
     *     @var string $sort Return matches sorted by either `score` or `timestamp`.
     *     @var string $sort_dir Change sort direction to ascending (`asc`) or descending (`desc`).
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
        $optionsResolver->setDefined(array('token', 'count', 'highlight', 'page', 'query', 'sort', 'sort_dir'));
        $optionsResolver->setRequired(array('token', 'query'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('count', array('int'));
        $optionsResolver->setAllowedTypes('highlight', array('bool'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('query', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('sort_dir', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\SearchMessagesGetResponse200|\Comicat\Slack\Api\Model\SearchMessagesGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
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