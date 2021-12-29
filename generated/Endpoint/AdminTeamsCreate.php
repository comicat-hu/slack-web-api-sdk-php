<?php

namespace Comicat\Slack\Api\Endpoint;

class AdminTeamsCreate extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Create an Enterprise team.
     *
     * @param array $formParameters {
     *     @var string $team_domain Team domain (for example, slacksoftballteam).
     *     @var string $team_name Team name (for example, Slack Softball Team).
     *     @var string $team_description Description for the team.
     *     @var string $team_discoverability Who can join the team. A team's discoverability can be `open`, `closed`, `invite_only`, or `unlisted`.
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
        return '/admin.teams.create';
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
        $optionsResolver->setDefined(array('team_domain', 'team_name', 'team_description', 'team_discoverability'));
        $optionsResolver->setRequired(array('team_domain', 'team_name'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('team_domain', array('string'));
        $optionsResolver->setAllowedTypes('team_name', array('string'));
        $optionsResolver->setAllowedTypes('team_description', array('string'));
        $optionsResolver->setAllowedTypes('team_discoverability', array('string'));
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
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsCreatePostResponse200|\Comicat\Slack\Api\Model\AdminTeamsCreatePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminTeamsCreatePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\AdminTeamsCreatePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}