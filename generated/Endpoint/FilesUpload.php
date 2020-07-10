<?php

namespace Comicat\Slack\Api\Endpoint;

class FilesUpload extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Uploads or creates a file.
     *
     * @param array $formParameters {
     *     @var string $channels Comma-separated list of channel names or IDs where the file will be shared.
     *     @var string $title Title of file.
     *     @var string $initial_comment The message text introducing the file in specified `channels`.
     *     @var string $filetype A [file type](/types/file#file_types) identifier.
     *     @var string $filename Filename of file.
     *     @var string $content File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     *     @var string $file File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *     @var float $thread_ts Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     * }
     */
    public function __construct(array $formParameters = array())
    {
        $this->formParameters = $formParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/files.upload';
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
        $optionsResolver->setDefined(array('channels', 'title', 'initial_comment', 'filetype', 'filename', 'content', 'token', 'file', 'thread_ts'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('channels', array('string'));
        $optionsResolver->setAllowedTypes('title', array('string'));
        $optionsResolver->setAllowedTypes('initial_comment', array('string'));
        $optionsResolver->setAllowedTypes('filetype', array('string'));
        $optionsResolver->setAllowedTypes('filename', array('string'));
        $optionsResolver->setAllowedTypes('content', array('string'));
        $optionsResolver->setAllowedTypes('token', array('string'));
        $optionsResolver->setAllowedTypes('file', array('string'));
        $optionsResolver->setAllowedTypes('thread_ts', array('float'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Comicat\Slack\Api\Model\FilesUploadPostResponse200|\Comicat\Slack\Api\Model\FilesUploadPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\FilesUploadPostResponse200', 'json');
        }
        return $serializer->deserialize($body, 'Comicat\\Slack\\Api\\Model\\FilesUploadPostResponsedefault', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('slackAuth');
    }
}