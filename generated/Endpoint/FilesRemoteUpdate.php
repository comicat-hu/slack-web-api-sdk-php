<?php

namespace Comicat\Slack\Api\Endpoint;

class FilesRemoteUpdate extends \Comicat\Slack\Api\Runtime\Client\BaseEndpoint implements \Comicat\Slack\Api\Runtime\Client\Endpoint
{
    /**
     * Updates an existing remote file.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
     *     @var string $file Specify a file by providing its ID.
     *     @var string $external_id Creator defined GUID for the file.
     *     @var string $title Title of the file being shared.
     *     @var string $filetype type of file
     *     @var string $external_url URL of the remote file.
     *     @var string $preview_image Preview of the document via `multipart/form-data`.
     *     @var string $indexable_file_contents File containing contents that can be used to improve searchability for the remote file.
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
        return '/files.remote.update';
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
        $optionsResolver->setDefined(array('token', 'file', 'external_id', 'title', 'filetype', 'external_url', 'preview_image', 'indexable_file_contents'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('file', array('string'));
        $optionsResolver->setAllowedTypes('external_id', array('string'));
        $optionsResolver->setAllowedTypes('title', array('string'));
        $optionsResolver->setAllowedTypes('filetype', array('string'));
        $optionsResolver->setAllowedTypes('external_url', array('string'));
        $optionsResolver->setAllowedTypes('preview_image', array('string'));
        $optionsResolver->setAllowedTypes('indexable_file_contents', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRemoteUpdatePostResponse200|\Comicat\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\FilesRemoteUpdatePostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\FilesRemoteUpdatePostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}