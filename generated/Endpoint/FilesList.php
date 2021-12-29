<?php

namespace Comicat\Slack\Api\Endpoint;

class FilesList extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * List for a team, in a channel, or from a user with applied filters.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `files:read`
     *     @var string $user Filter files created by a single user.
     *     @var string $channel Filter files appearing in a specific channel, indicated by its ID.
     *     @var float $ts_from Filter files created after this timestamp (inclusive).
     *     @var float $ts_to Filter files created before this timestamp (inclusive).
     *     @var string $types Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.
     *     @var string $count 
     *     @var string $page 
     *     @var bool $show_files_hidden_by_limit Show truncated file info for files hidden due to being too old, and the team who owns the file being over the file limit.
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
        return '/files.list';
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
        $optionsResolver->setDefined(array('token', 'user', 'channel', 'ts_from', 'ts_to', 'types', 'count', 'page', 'show_files_hidden_by_limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('user', array('string'));
        $optionsResolver->setAllowedTypes('channel', array('string'));
        $optionsResolver->setAllowedTypes('ts_from', array('float'));
        $optionsResolver->setAllowedTypes('ts_to', array('float'));
        $optionsResolver->setAllowedTypes('types', array('string'));
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('page', array('string'));
        $optionsResolver->setAllowedTypes('show_files_hidden_by_limit', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\FilesListGetResponse200|\Comicat\Slack\Api\Model\FilesListGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\FilesListGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\FilesListGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}