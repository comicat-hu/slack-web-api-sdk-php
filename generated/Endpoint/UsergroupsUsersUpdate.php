<?php

namespace Comicat\Slack\Api\Endpoint;

class UsergroupsUsersUpdate extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Update the list of users for a User Group
     *
     * @param array $formParameters {
     *     @var bool $include_count Include the number of users in the User Group.
     *     @var string $usergroup The encoded ID of the User Group to update.
     *     @var string $users A comma separated string of encoded user IDs that represent the entire list of users for the User Group.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
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
        return '/usergroups.users.update';
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
        $optionsResolver->setDefined(array('include_count', 'usergroup', 'users'));
        $optionsResolver->setRequired(array('usergroup', 'users'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include_count', array('bool'));
        $optionsResolver->setAllowedTypes('usergroup', array('string'));
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
     * @return null|\Comicat\Slack\Api\Model\UsergroupsUsersUpdatePostResponse200|\Comicat\Slack\Api\Model\UsergroupsUsersUpdatePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\UsergroupsUsersUpdatePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\UsergroupsUsersUpdatePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}