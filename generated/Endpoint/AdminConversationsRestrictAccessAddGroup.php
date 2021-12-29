<?php

namespace Comicat\Slack\Api\Endpoint;

class AdminConversationsRestrictAccessAddGroup extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Add an allowlist of IDP groups for accessing a channel
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $group_id The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to be an allowlist for the private channel.
     *     @var string $channel_id The channel to link this group to.
     * }
     */
    public function __construct(array $formParameters = array())
    {
        $this->formParameters = $formParameters;
    }
    use \Comicat\Slack\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/admin.conversations.restrictAccess.addGroup';
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
        $optionsResolver->setDefined(array('token', 'team_id', 'group_id', 'channel_id'));
        $optionsResolver->setRequired(array('token', 'group_id', 'channel_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('team_id', array('string'));
        $optionsResolver->setAllowedTypes('group_id', array('string'));
        $optionsResolver->setAllowedTypes('channel_id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponse200|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminConversationsRestrictAccessAddGroupPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminConversationsRestrictAccessAddGroupPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}