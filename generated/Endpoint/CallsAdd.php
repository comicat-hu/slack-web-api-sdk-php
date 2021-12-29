<?php

namespace Comicat\Slack\Api\Endpoint;

class CallsAdd extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Registers a new Call.
     *
     * @param array $formParameters {
     *     @var string $external_unique_id An ID supplied by the 3rd-party Call provider. It must be unique across all Calls from that service.
     *     @var string $external_display_id An optional, human-readable ID supplied by the 3rd-party Call provider. If supplied, this ID will be displayed in the Call object.
     *     @var string $join_url The URL required for a client to join the Call.
     *     @var string $desktop_app_join_url When supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL.
     *     @var int $date_start Call start time in UTC UNIX timestamp format
     *     @var string $title The name of the Call.
     *     @var string $created_by The valid Slack user ID of the user who created this Call. When this method is called with a user token, the `created_by` field is optional and defaults to the authed user of the token. Otherwise, the field is required.
     *     @var string $users The list of users to register as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `calls:write`
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
        return '/calls.add';
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
        $optionsResolver->setDefined(array('external_unique_id', 'external_display_id', 'join_url', 'desktop_app_join_url', 'date_start', 'title', 'created_by', 'users'));
        $optionsResolver->setRequired(array('external_unique_id', 'join_url'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('external_unique_id', array('string'));
        $optionsResolver->setAllowedTypes('external_display_id', array('string'));
        $optionsResolver->setAllowedTypes('join_url', array('string'));
        $optionsResolver->setAllowedTypes('desktop_app_join_url', array('string'));
        $optionsResolver->setAllowedTypes('date_start', array('int'));
        $optionsResolver->setAllowedTypes('title', array('string'));
        $optionsResolver->setAllowedTypes('created_by', array('string'));
        $optionsResolver->setAllowedTypes('users', array('string'));
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
     * @return null|\Comicat\Slack\Api\Model\CallsAddPostResponse200|\Comicat\Slack\Api\Model\CallsAddPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\CallsAddPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\CallsAddPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}