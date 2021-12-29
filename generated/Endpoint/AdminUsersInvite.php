<?php

namespace Comicat\Slack\Api\Endpoint;

class AdminUsersInvite extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Invite a user to a workspace.
     *
     * @param array $formParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $email The email address of the person to invite.
     *     @var string $channel_ids A comma-separated list of `channel_id`s for this user to join. At least one channel is required.
     *     @var string $custom_message An optional message to send to the user in the invite email.
     *     @var string $real_name Full name of the user.
     *     @var bool $resend Allow this invite to be resent in the future if a user has not signed up yet. (default: false)
     *     @var bool $is_restricted Is this user a multi-channel guest user? (default: false)
     *     @var bool $is_ultra_restricted Is this user a single channel guest user? (default: false)
     *     @var string $guest_expiration_ts Timestamp when guest account should be disabled. Only include this timestamp if you are inviting a guest user and you want their account to expire on a certain date.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
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
        return '/admin.users.invite';
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
        $optionsResolver->setDefined(array('team_id', 'email', 'channel_ids', 'custom_message', 'real_name', 'resend', 'is_restricted', 'is_ultra_restricted', 'guest_expiration_ts'));
        $optionsResolver->setRequired(array('team_id', 'email', 'channel_ids'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('team_id', array('string'));
        $optionsResolver->setAllowedTypes('email', array('string'));
        $optionsResolver->setAllowedTypes('channel_ids', array('string'));
        $optionsResolver->setAllowedTypes('custom_message', array('string'));
        $optionsResolver->setAllowedTypes('real_name', array('string'));
        $optionsResolver->setAllowedTypes('resend', array('bool'));
        $optionsResolver->setAllowedTypes('is_restricted', array('bool'));
        $optionsResolver->setAllowedTypes('is_ultra_restricted', array('bool'));
        $optionsResolver->setAllowedTypes('guest_expiration_ts', array('string'));
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
     * @return null|\Comicat\Slack\Api\Model\AdminUsersInvitePostResponse200|\Comicat\Slack\Api\Model\AdminUsersInvitePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminUsersInvitePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminUsersInvitePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}