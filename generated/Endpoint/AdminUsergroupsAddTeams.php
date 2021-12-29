<?php

namespace Comicat\Slack\Api\Endpoint;

class AdminUsergroupsAddTeams extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Associate one or more default workspaces with an organization-wide IDP group.
     *
     * @param array $formParameters {
     *     @var string $usergroup_id An encoded usergroup (IDP Group) ID.
     *     @var string $team_ids A comma separated list of encoded team (workspace) IDs. Each workspace *MUST* belong to the organization associated with the token.
     *     @var bool $auto_provision When `true`, this method automatically creates new workspace accounts for the IDP group members.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
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
        return '/admin.usergroups.addTeams';
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
        $optionsResolver->setDefined(array('usergroup_id', 'team_ids', 'auto_provision'));
        $optionsResolver->setRequired(array('usergroup_id', 'team_ids'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('usergroup_id', array('string'));
        $optionsResolver->setAllowedTypes('team_ids', array('string'));
        $optionsResolver->setAllowedTypes('auto_provision', array('bool'));
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
     * @return null|\Comicat\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponse200|\Comicat\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminUsergroupsAddTeamsPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminUsergroupsAddTeamsPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}