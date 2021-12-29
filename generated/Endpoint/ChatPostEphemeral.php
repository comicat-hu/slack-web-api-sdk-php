<?php

namespace Comicat\Slack\Api\Endpoint;

class ChatPostEphemeral extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Sends an ephemeral message to a user in a channel.
     *
     * @param array $formParameters {
     *     @var bool $as_user Pass true to post the message as the authed user. Defaults to true if the chat:write:bot scope is not included. Otherwise, defaults to false.
     *     @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string.
     *     @var string $blocks A JSON-based array of structured blocks, presented as a URL-encoded string.
     *     @var string $channel Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name.
     *     @var string $icon_emoji Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *     @var string $icon_url URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *     @var bool $link_names Find and link channel names and usernames.
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $thread_ts Provide another message's `ts` value to post this message in a thread. Avoid using a reply's `ts` value; use its parent's value instead. Ephemeral messages in threads are only shown if there is already an active thread.
     *     @var string $user `id` of the user who will receive the ephemeral message. The user should be in the channel specified by the `channel` argument.
     *     @var string $username Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
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
        return '/chat.postEphemeral';
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
        $optionsResolver->setDefined(array('as_user', 'attachments', 'blocks', 'channel', 'icon_emoji', 'icon_url', 'link_names', 'parse', 'text', 'thread_ts', 'user', 'username'));
        $optionsResolver->setRequired(array('channel', 'user'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('as_user', array('bool'));
        $optionsResolver->setAllowedTypes('attachments', array('string'));
        $optionsResolver->setAllowedTypes('blocks', array('string'));
        $optionsResolver->setAllowedTypes('channel', array('string'));
        $optionsResolver->setAllowedTypes('icon_emoji', array('string'));
        $optionsResolver->setAllowedTypes('icon_url', array('string'));
        $optionsResolver->setAllowedTypes('link_names', array('bool'));
        $optionsResolver->setAllowedTypes('parse', array('string'));
        $optionsResolver->setAllowedTypes('text', array('string'));
        $optionsResolver->setAllowedTypes('thread_ts', array('string'));
        $optionsResolver->setAllowedTypes('user', array('string'));
        $optionsResolver->setAllowedTypes('username', array('string'));
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
     * @return null|\Comicat\Slack\Api\Model\ChatPostEphemeralPostResponse200|\Comicat\Slack\Api\Model\ChatPostEphemeralPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ChatPostEphemeralPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\ChatPostEphemeralPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}