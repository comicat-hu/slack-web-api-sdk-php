<?php

namespace Comicat\Slack\Api\Endpoint;

class AdminConversationsSetTeams extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Set the workspaces in an Enterprise grid org that connect to a public or private channel.
     *
     * @param array $formParameters {
     *     @var string $channel_id The encoded `channel_id` to add or remove to workspaces.
     *     @var string $team_id The workspace to which the channel belongs. Omit this argument if the channel is a cross-workspace shared channel.
     *     @var string $target_team_ids A comma-separated list of workspaces to which the channel should be shared. Not required if the channel is being shared org-wide.
     *     @var bool $org_channel True if channel has to be converted to an org channel
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
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
        return '/admin.conversations.setTeams';
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
        $optionsResolver->setDefined(array('channel_id', 'team_id', 'target_team_ids', 'org_channel'));
        $optionsResolver->setRequired(array('channel_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channel_id', array('string'));
        $optionsResolver->setAllowedTypes('team_id', array('string'));
        $optionsResolver->setAllowedTypes('target_team_ids', array('string'));
        $optionsResolver->setAllowedTypes('org_channel', array('bool'));
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
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200|\Comicat\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminConversationsSetTeamsPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminConversationsSetTeamsPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}