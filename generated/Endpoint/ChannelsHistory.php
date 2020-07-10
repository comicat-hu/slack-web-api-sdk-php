<?php

namespace Comicat\Slack\Api\Endpoint;

class ChannelsHistory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Fetches history of messages and events from a channel.
     *
     * @param array $queryParameters {
     *     @var int $count Number of messages to return, between 1 and 1000.
     *     @var bool $unreads Include `unread_count_display` in the output?
     *     @var bool $inclusive Include messages with latest or oldest timestamp in results.
     *     @var string $token Authentication token. Requires scope: `channels:history`
     *     @var float $oldest Start of time range of messages to include in results.
     *     @var string $channel Channel to fetch history for.
     *     @var float $latest End of time range of messages to include in results.
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
        return '/channels.history';
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
        $optionsResolver->setDefined(array('count', 'unreads', 'inclusive', 'token', 'oldest', 'channel', 'latest'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('int'));
        $optionsResolver->setAllowedTypes('unreads', array('bool'));
        $optionsResolver->setAllowedTypes('inclusive', array('bool'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('oldest', array('float'));
        $optionsResolver->setAllowedTypes('channel', array('string'));
        $optionsResolver->setAllowedTypes('latest', array('float'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\ChannelsHistoryGetResponse200|\Comicat\Slack\Api\Model\ChannelsHistoryGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ChannelsHistoryGetResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ChannelsHistoryGetResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}