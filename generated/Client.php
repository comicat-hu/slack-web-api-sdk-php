<?php

namespace Comicat\Slack\Api;

class Client extends \Comicat\Slack\Api\Runtime\Client\Client
{
    /**
     * Approve an app for installation on a workspace.
     *
     * @param array $formParameters {
     *     @var string $app_id The id of the app to approve.
     *     @var string $request_id The id of the request to approve.
     *     @var string $team_id 
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.apps:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminAppsApprovePostResponse200|\Comicat\Slack\Api\Model\AdminAppsApprovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminAppsApprove(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminAppsApprove($formParameters, $headerParameters), $fetch);
    }
    /**
     * List approved apps for an org or workspace.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.apps:read`
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var string $team_id 
     *     @var string $enterprise_id 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminAppsApprovedListGetResponse200|\Comicat\Slack\Api\Model\AdminAppsApprovedListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminAppsApprovedList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminAppsApprovedList($queryParameters), $fetch);
    }
    /**
     * List app requests for a team/workspace.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.apps:read`
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var string $team_id 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminAppsRequestsListGetResponse200|\Comicat\Slack\Api\Model\AdminAppsRequestsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminAppsRequestsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminAppsRequestsList($queryParameters), $fetch);
    }
    /**
     * Restrict an app for installation on a workspace.
     *
     * @param array $formParameters {
     *     @var string $app_id The id of the app to restrict.
     *     @var string $request_id The id of the request to restrict.
     *     @var string $team_id 
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.apps:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminAppsRestrictPostResponse200|\Comicat\Slack\Api\Model\AdminAppsRestrictPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminAppsRestrict(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminAppsRestrict($formParameters, $headerParameters), $fetch);
    }
    /**
     * List restricted apps for an org or workspace.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.apps:read`
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var string $team_id 
     *     @var string $enterprise_id 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminAppsRestrictedListGetResponse200|\Comicat\Slack\Api\Model\AdminAppsRestrictedListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminAppsRestrictedList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminAppsRestrictedList($queryParameters), $fetch);
    }
    /**
     * Archive a public or private channel.
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to archive.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsArchivePostResponse200|\Comicat\Slack\Api\Model\AdminConversationsArchivePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsArchive(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsArchive($formParameters, $headerParameters), $fetch);
    }
    /**
     * Convert a public channel to a private channel.
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to convert to private.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponse200|\Comicat\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsConvertToPrivate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsConvertToPrivate($formParameters, $headerParameters), $fetch);
    }
    /**
     * Create a public or private channel-based conversation.
     *
     * @param array $formParameters {
     *     @var string $name Name of the public or private channel to create.
     *     @var string $description Description of the public or private channel to create.
     *     @var bool $is_private When `true`, creates a private channel instead of a public channel
     *     @var bool $org_wide When `true`, the channel will be available org-wide. Note: if the channel is not `org_wide=true`, you must specify a `team_id` for this channel
     *     @var string $team_id The workspace to create the channel in. Note: this argument is required unless you set `org_wide=true`.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsCreatePostResponse200|\Comicat\Slack\Api\Model\AdminConversationsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsCreate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsCreate($formParameters, $headerParameters), $fetch);
    }
    /**
     * Delete a public or private channel.
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to delete.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsDeletePostResponse200|\Comicat\Slack\Api\Model\AdminConversationsDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsDelete(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsDelete($formParameters, $headerParameters), $fetch);
    }
    /**
     * Disconnect a connected channel from one or more workspaces.
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to be disconnected from some workspaces.
     *     @var string $leaving_team_ids The team to be removed from the channel. Currently only a single team id can be specified.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponse200|\Comicat\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsDisconnectShared(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsDisconnectShared($formParameters, $headerParameters), $fetch);
    }
    /**
     * List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     *     @var string $channel_ids A comma-separated list of channels to filter to.
     *     @var string $team_ids A comma-separated list of the workspaces to which the channels you would like returned belong.
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200|\Comicat\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsEkmListOriginalConnectedChannelInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsEkmListOriginalConnectedChannelInfo($queryParameters), $fetch);
    }
    /**
     * Get conversation preferences for a public or private channel.
     *
     * @param array $queryParameters {
     *     @var string $channel_id The channel to get preferences for.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200|\Comicat\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsGetConversationPrefs(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsGetConversationPrefs($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get all the workspaces a given public or private channel is connected to within this Enterprise org.
     *
     * @param array $queryParameters {
     *     @var string $channel_id The channel to determine connected workspaces within the organization for.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200|\Comicat\Slack\Api\Model\AdminConversationsGetTeamsGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsGetTeams(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsGetTeams($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Invite a user to a public or private channel.
     *
     * @param array $formParameters {
     *     @var string $user_ids The users to invite.
     *     @var string $channel_id The channel that the users will be invited to.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsInvitePostResponse200|\Comicat\Slack\Api\Model\AdminConversationsInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsInvite(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsInvite($formParameters, $headerParameters), $fetch);
    }
    /**
     * Rename a public or private channel.
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to rename.
     *     @var string $name 
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsRenamePostResponse200|\Comicat\Slack\Api\Model\AdminConversationsRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsRename(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsRename($formParameters, $headerParameters), $fetch);
    }
    /**
     * Add an allowlist of IDP groups for accessing a channel
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $group_id The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to be an allowlist for the private channel.
     *     @var string $channel_id The channel to link this group to.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponse200|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsRestrictAccessAddGroup(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsRestrictAccessAddGroup($formParameters), $fetch);
    }
    /**
     * List all IDP Groups linked to a channel
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     *     @var string $channel_id 
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponse200|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsRestrictAccessListGroups(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsRestrictAccessListGroups($queryParameters), $fetch);
    }
    /**
     * Remove a linked IDP group linked from a private channel
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $group_id The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to remove from the private channel.
     *     @var string $channel_id The channel to remove the linked group from.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponse200|\Comicat\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsRestrictAccessRemoveGroup(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsRestrictAccessRemoveGroup($formParameters), $fetch);
    }
    /**
     * Search for public or private channels in an Enterprise organization.
     *
     * @param array $queryParameters {
     *     @var string $team_ids Comma separated string of team IDs, signifying the workspaces to search through.
     *     @var string $query Name of the the channel to query by.
     *     @var int $limit Maximum number of items to be returned. Must be between 1 - 20 both inclusive. Default is 10.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *     @var string $search_channel_types The type of channel to include or exclude in the search. For example `private` will search private channels, while `private_exclude` will exclude them. For a full list of types, check the [Types section](#types).
     *     @var string $sort Possible values are `relevant` (search ranking based on what we think is closest), `name` (alphabetical), `member_count` (number of users in the channel), and `created` (date channel was created). You can optionally pair this with the `sort_dir` arg to change how it is sorted 
     *     @var string $sort_dir Sort direction. Possible values are `asc` for ascending order like (1, 2, 3) or (a, b, c), and `desc` for descending order like (3, 2, 1) or (c, b, a)
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsSearchGetResponse200|\Comicat\Slack\Api\Model\AdminConversationsSearchGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsSearch(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsSearch($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Set the posting permissions for a public or private channel.
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to set the prefs for
     *     @var string $prefs The prefs for this channel in a stringified JSON format.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponse200|\Comicat\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsSetConversationPrefs(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsSetConversationPrefs($formParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200|\Comicat\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsSetTeams(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsSetTeams($formParameters, $headerParameters), $fetch);
    }
    /**
     * Unarchive a public or private channel.
     *
     * @param array $formParameters {
     *     @var string $channel_id The channel to unarchive.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminConversationsUnarchivePostResponse200|\Comicat\Slack\Api\Model\AdminConversationsUnarchivePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminConversationsUnarchive(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminConversationsUnarchive($formParameters, $headerParameters), $fetch);
    }
    /**
     * Add an emoji.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $name The name of the emoji to be removed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $url The URL of a file to use as an image for the emoji. Square images under 128KB and with transparent backgrounds work best.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminEmojiAddPostResponse200|\Comicat\Slack\Api\Model\AdminEmojiAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminEmojiAdd(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminEmojiAdd($formParameters), $fetch);
    }
    /**
     * Add an emoji alias.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $name The name of the emoji to be aliased. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $alias_for The alias of the emoji.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminEmojiAddAliasPostResponse200|\Comicat\Slack\Api\Model\AdminEmojiAddAliasPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminEmojiAddAlias(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminEmojiAddAlias($formParameters), $fetch);
    }
    /**
     * List emoji for an Enterprise Grid organization.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminEmojiListGetResponse200|\Comicat\Slack\Api\Model\AdminEmojiListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminEmojiList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminEmojiList($queryParameters), $fetch);
    }
    /**
     * Remove an emoji across an Enterprise Grid organization
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $name The name of the emoji to be removed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminEmojiRemovePostResponse200|\Comicat\Slack\Api\Model\AdminEmojiRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminEmojiRemove(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminEmojiRemove($formParameters), $fetch);
    }
    /**
     * Rename an emoji.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $name The name of the emoji to be renamed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $new_name The new name of the emoji.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminEmojiRenamePostResponse200|\Comicat\Slack\Api\Model\AdminEmojiRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminEmojiRename(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminEmojiRename($formParameters), $fetch);
    }
    /**
     * Approve a workspace invite request.
     *
     * @param array $formParameters {
     *     @var string $team_id ID for the workspace where the invite request was made.
     *     @var string $invite_request_id ID of the request to invite.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.invites:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminInviteRequestsApprovePostResponse200|\Comicat\Slack\Api\Model\AdminInviteRequestsApprovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminInviteRequestsApprove(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminInviteRequestsApprove($formParameters, $headerParameters), $fetch);
    }
    /**
     * List all approved workspace invite requests.
     *
     * @param array $queryParameters {
     *     @var string $team_id ID for the workspace where the invite requests were made.
     *     @var string $cursor Value of the `next_cursor` field sent as part of the previous API response
     *     @var int $limit The number of results that will be returned by the API on each invocation. Must be between 1 - 1000, both inclusive
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.invites:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponse200|\Comicat\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminInviteRequestsApprovedList(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminInviteRequestsApprovedList($queryParameters, $headerParameters), $fetch);
    }
    /**
     * List all denied workspace invite requests.
     *
     * @param array $queryParameters {
     *     @var string $team_id ID for the workspace where the invite requests were made.
     *     @var string $cursor Value of the `next_cursor` field sent as part of the previous api response
     *     @var int $limit The number of results that will be returned by the API on each invocation. Must be between 1 - 1000 both inclusive
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.invites:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponse200|\Comicat\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminInviteRequestsDeniedList(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminInviteRequestsDeniedList($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Deny a workspace invite request.
     *
     * @param array $formParameters {
     *     @var string $team_id ID for the workspace where the invite request was made.
     *     @var string $invite_request_id ID of the request to invite.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.invites:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminInviteRequestsDenyPostResponse200|\Comicat\Slack\Api\Model\AdminInviteRequestsDenyPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminInviteRequestsDeny(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminInviteRequestsDeny($formParameters, $headerParameters), $fetch);
    }
    /**
     * List all pending workspace invite requests.
     *
     * @param array $queryParameters {
     *     @var string $team_id ID for the workspace where the invite requests were made.
     *     @var string $cursor Value of the `next_cursor` field sent as part of the previous API response
     *     @var int $limit The number of results that will be returned by the API on each invocation. Must be between 1 - 1000, both inclusive
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.invites:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminInviteRequestsListGetResponse200|\Comicat\Slack\Api\Model\AdminInviteRequestsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminInviteRequestsList(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminInviteRequestsList($queryParameters, $headerParameters), $fetch);
    }
    /**
     * List all of the admins on a given workspace.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     *     @var int $limit The maximum number of items to return.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *     @var string $team_id 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsAdminsListGetResponse200|\Comicat\Slack\Api\Model\AdminTeamsAdminsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsAdminsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsAdminsList($queryParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsCreatePostResponse200|\Comicat\Slack\Api\Model\AdminTeamsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsCreate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsCreate($formParameters, $headerParameters), $fetch);
    }
    /**
     * List all teams on an Enterprise organization
     *
     * @param array $queryParameters {
     *     @var int $limit The maximum number of items to return. Must be between 1 - 100 both inclusive.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsListGetResponse200|\Comicat\Slack\Api\Model\AdminTeamsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsList(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsList($queryParameters, $headerParameters), $fetch);
    }
    /**
     * List all of the owners on a given workspace.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     *     @var string $team_id 
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsOwnersListGetResponse200|\Comicat\Slack\Api\Model\AdminTeamsOwnersListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsOwnersList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsOwnersList($queryParameters), $fetch);
    }
    /**
     * Fetch information about settings in a workspace
     *
     * @param array $queryParameters {
     *     @var string $team_id 
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsSettingsInfoGetResponse200|\Comicat\Slack\Api\Model\AdminTeamsSettingsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsSettingsInfo(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsSettingsInfo($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Set the default channels of a workspace.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $team_id ID for the workspace to set the default channel for.
     *     @var string $channel_ids An array of channel IDs.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponse200|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsSettingsSetDefaultChannels(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsSettingsSetDefaultChannels($formParameters), $fetch);
    }
    /**
     * Set the description of a given workspace.
     *
     * @param array $formParameters {
     *     @var string $team_id ID for the workspace to set the description for.
     *     @var string $description The new description for the workspace.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponse200|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsSettingsSetDescription(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsSettingsSetDescription($formParameters, $headerParameters), $fetch);
    }
    /**
     * An API method that allows admins to set the discoverability of a given workspace
     *
     * @param array $formParameters {
     *     @var string $team_id The ID of the workspace to set discoverability on.
     *     @var string $discoverability This workspace's discovery setting. It must be set to one of `open`, `invite_only`, `closed`, or `unlisted`.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponse200|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsSettingsSetDiscoverability(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsSettingsSetDiscoverability($formParameters, $headerParameters), $fetch);
    }
    /**
     * Sets the icon of a workspace.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $image_url Image URL for the icon
     *     @var string $team_id ID for the workspace to set the icon for.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponse200|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsSettingsSetIcon(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsSettingsSetIcon($formParameters), $fetch);
    }
    /**
     * Set the name of a given workspace.
     *
     * @param array $formParameters {
     *     @var string $team_id ID for the workspace to set the name for.
     *     @var string $name The new name of the workspace.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponse200|\Comicat\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminTeamsSettingsSetName(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminTeamsSettingsSetName($formParameters, $headerParameters), $fetch);
    }
    /**
     * Add one or more default channels to an IDP group.
     *
     * @param array $formParameters {
     *     @var string $usergroup_id ID of the IDP group to add default channels for.
     *     @var string $team_id The workspace to add default channels in.
     *     @var string $channel_ids Comma separated string of channel IDs.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.usergroups:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponse200|\Comicat\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsergroupsAddChannels(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsergroupsAddChannels($formParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponse200|\Comicat\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsergroupsAddTeams(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsergroupsAddTeams($formParameters, $headerParameters), $fetch);
    }
    /**
     * List the channels linked to an org-level IDP group (user group).
     *
     * @param array $queryParameters {
     *     @var string $usergroup_id ID of the IDP group to list default channels for.
     *     @var string $team_id ID of the the workspace.
     *     @var bool $include_num_members Flag to include or exclude the count of members per channel.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.usergroups:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsergroupsListChannelsGetResponse200|\Comicat\Slack\Api\Model\AdminUsergroupsListChannelsGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsergroupsListChannels(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsergroupsListChannels($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Remove one or more default channels from an org-level IDP group (user group).
     *
     * @param array $formParameters {
     *     @var string $usergroup_id ID of the IDP Group
     *     @var string $channel_ids Comma-separated string of channel IDs
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.usergroups:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponse200|\Comicat\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsergroupsRemoveChannels(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsergroupsRemoveChannels($formParameters, $headerParameters), $fetch);
    }
    /**
     * Add an Enterprise user to a workspace.
     *
     * @param array $formParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $user_id The ID of the user to add to the workspace.
     *     @var bool $is_restricted True if user should be added to the workspace as a guest.
     *     @var bool $is_ultra_restricted True if user should be added to the workspace as a single-channel guest.
     *     @var string $channel_ids Comma separated values of channel IDs to add user in the new workspace.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersAssignPostResponse200|\Comicat\Slack\Api\Model\AdminUsersAssignPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersAssign(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersAssign($formParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersInvitePostResponse200|\Comicat\Slack\Api\Model\AdminUsersInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersInvite(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersInvite($formParameters, $headerParameters), $fetch);
    }
    /**
     * List users on a workspace
     *
     * @param array $queryParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *     @var int $limit Limit for how many users to be retrieved per page
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersListGetResponse200|\Comicat\Slack\Api\Model\AdminUsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersList(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersList($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Remove a user from a workspace.
     *
     * @param array $formParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $user_id The ID of the user to remove.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersRemovePostResponse200|\Comicat\Slack\Api\Model\AdminUsersRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersRemove(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersRemove($formParameters, $headerParameters), $fetch);
    }
    /**
     * Invalidate a single session for a user by session_id
     *
     * @param array $formParameters {
     *     @var string $team_id ID of the team that the session belongs to
     *     @var int $session_id 
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersSessionInvalidatePostResponse200|\Comicat\Slack\Api\Model\AdminUsersSessionInvalidatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersSessionInvalidate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersSessionInvalidate($formParameters, $headerParameters), $fetch);
    }
    /**
     * Wipes all valid sessions on all devices for a given user
     *
     * @param array $formParameters {
     *     @var string $user_id The ID of the user to wipe sessions for
     *     @var bool $mobile_only Only expire mobile sessions (default: false)
     *     @var bool $web_only Only expire web sessions (default: false)
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersSessionResetPostResponse200|\Comicat\Slack\Api\Model\AdminUsersSessionResetPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersSessionReset(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersSessionReset($formParameters, $headerParameters), $fetch);
    }
    /**
     * Set an existing guest, regular user, or owner to be an admin user.
     *
     * @param array $formParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $user_id The ID of the user to designate as an admin.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersSetAdminPostResponse200|\Comicat\Slack\Api\Model\AdminUsersSetAdminPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersSetAdmin(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersSetAdmin($formParameters, $headerParameters), $fetch);
    }
    /**
     * Set an expiration for a guest user
     *
     * @param array $formParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $user_id The ID of the user to set an expiration for.
     *     @var int $expiration_ts Timestamp when guest account should be disabled.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersSetExpirationPostResponse200|\Comicat\Slack\Api\Model\AdminUsersSetExpirationPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersSetExpiration(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersSetExpiration($formParameters, $headerParameters), $fetch);
    }
    /**
     * Set an existing guest, regular user, or admin user to be a workspace owner.
     *
     * @param array $formParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $user_id Id of the user to promote to owner.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersSetOwnerPostResponse200|\Comicat\Slack\Api\Model\AdminUsersSetOwnerPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersSetOwner(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersSetOwner($formParameters, $headerParameters), $fetch);
    }
    /**
     * Set an existing guest user, admin user, or owner to be a regular user.
     *
     * @param array $formParameters {
     *     @var string $team_id The ID (`T1234`) of the workspace.
     *     @var string $user_id The ID of the user to designate as a regular user.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AdminUsersSetRegularPostResponse200|\Comicat\Slack\Api\Model\AdminUsersSetRegularPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function adminUsersSetRegular(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AdminUsersSetRegular($formParameters, $headerParameters), $fetch);
    }
    /**
     * Checks API calling code.
     *
     * @param array $queryParameters {
     *     @var string $error Error response to return
     *     @var string $foo example property to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ApiTestGetResponse200|\Comicat\Slack\Api\Model\ApiTestGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function apiTest(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ApiTest($queryParameters), $fetch);
    }
    /**
     * Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.
     *
     * @param array $queryParameters {
     *     @var string $event_context 
     *     @var string $cursor 
     *     @var int $limit 
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `authorizations:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AppsEventAuthorizationsListGetResponse200|\Comicat\Slack\Api\Model\AppsEventAuthorizationsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function appsEventAuthorizationsList(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AppsEventAuthorizationsList($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns list of permissions this app has on a team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AppsPermissionsInfoGetResponse200|\Comicat\Slack\Api\Model\AppsPermissionsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function appsPermissionsInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AppsPermissionsInfo($queryParameters), $fetch);
    }
    /**
     * Allows an app to request additional scopes
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $scopes A comma separated list of scopes to request for
     *     @var string $trigger_id Token used to trigger the permissions API
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AppsPermissionsRequestGetResponse200|\Comicat\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function appsPermissionsRequest(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AppsPermissionsRequest($queryParameters), $fetch);
    }
    /**
     * Returns list of resource grants this app has on a team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var int $limit The maximum number of items to return.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200|\Comicat\Slack\Api\Model\AppsPermissionsResourcesListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function appsPermissionsResourcesList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AppsPermissionsResourcesList($queryParameters), $fetch);
    }
    /**
     * Returns list of scopes this app has on a team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AppsPermissionsScopesListGetResponse200|\Comicat\Slack\Api\Model\AppsPermissionsScopesListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function appsPermissionsScopesList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AppsPermissionsScopesList($queryParameters), $fetch);
    }
    /**
     * Uninstalls your app from a workspace.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $client_id Issued when you created your application.
     *     @var string $client_secret Issued when you created your application.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AppsUninstallGetResponse200|\Comicat\Slack\Api\Model\AppsUninstallGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function appsUninstall(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AppsUninstall($queryParameters), $fetch);
    }
    /**
     * Revokes a token.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var bool $test Setting this parameter to `1` triggers a _testing mode_ where the specified token will not actually be revoked.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AuthRevokeGetResponse200|\Comicat\Slack\Api\Model\AuthRevokeGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function authRevoke(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AuthRevoke($queryParameters), $fetch);
    }
    /**
     * Checks authentication & identity.
     *
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\AuthTestGetResponse200|\Comicat\Slack\Api\Model\AuthTestGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function authTest(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\AuthTest($headerParameters), $fetch);
    }
    /**
     * Gets information about a bot user.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var string $bot Bot user to get info on
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\BotsInfoGetResponse200|\Comicat\Slack\Api\Model\BotsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function botsInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\BotsInfo($queryParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\CallsAddPostResponse200|\Comicat\Slack\Api\Model\CallsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function callsAdd(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\CallsAdd($formParameters, $headerParameters), $fetch);
    }
    /**
     * Ends a Call.
     *
     * @param array $formParameters {
     *     @var string $id `id` returned when registering the call using the [`calls.add`](/methods/calls.add) method.
     *     @var int $duration Call duration in seconds
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\CallsEndPostResponse200|\Comicat\Slack\Api\Model\CallsEndPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function callsEnd(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\CallsEnd($formParameters, $headerParameters), $fetch);
    }
    /**
     * Returns information about a Call.
     *
     * @param array $queryParameters {
     *     @var string $id `id` of the Call returned by the [`calls.add`](/methods/calls.add) method.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `calls:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\CallsInfoGetResponse200|\Comicat\Slack\Api\Model\CallsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function callsInfo(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\CallsInfo($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Registers new participants added to a Call.
     *
     * @param array $formParameters {
     *     @var string $id `id` returned by the [`calls.add`](/methods/calls.add) method.
     *     @var string $users The list of users to add as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\CallsParticipantsAddPostResponse200|\Comicat\Slack\Api\Model\CallsParticipantsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function callsParticipantsAdd(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\CallsParticipantsAdd($formParameters, $headerParameters), $fetch);
    }
    /**
     * Registers participants removed from a Call.
     *
     * @param array $formParameters {
     *     @var string $id `id` returned by the [`calls.add`](/methods/calls.add) method.
     *     @var string $users The list of users to remove as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\CallsParticipantsRemovePostResponse200|\Comicat\Slack\Api\Model\CallsParticipantsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function callsParticipantsRemove(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\CallsParticipantsRemove($formParameters, $headerParameters), $fetch);
    }
    /**
     * Updates information about a Call.
     *
     * @param array $formParameters {
     *     @var string $id `id` returned by the [`calls.add`](/methods/calls.add) method.
     *     @var string $title The name of the Call.
     *     @var string $join_url The URL required for a client to join the Call.
     *     @var string $desktop_app_join_url When supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\CallsUpdatePostResponse200|\Comicat\Slack\Api\Model\CallsUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function callsUpdate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\CallsUpdate($formParameters, $headerParameters), $fetch);
    }
    /**
     * Deletes a message.
     *
     * @param array $formParameters {
     *     @var float $ts Timestamp of the message to be deleted.
     *     @var string $channel Channel containing the message to be deleted.
     *     @var bool $as_user Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatDeletePostResponse200|\Comicat\Slack\Api\Model\ChatDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatDelete(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatDelete($formParameters, $headerParameters), $fetch);
    }
    /**
     * Deletes a pending scheduled message from the queue.
     *
     * @param array $formParameters {
     *     @var bool $as_user Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     *     @var string $channel The channel the scheduled_message is posting to
     *     @var string $scheduled_message_id `scheduled_message_id` returned from call to chat.scheduleMessage
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatDeleteScheduledMessagePostResponse200|\Comicat\Slack\Api\Model\ChatDeleteScheduledMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatDeleteScheduledMessage(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatDeleteScheduledMessage($formParameters, $headerParameters), $fetch);
    }
    /**
     * Retrieve a permalink URL for a specific extant message
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $channel The ID of the conversation or channel containing the message
     *     @var string $message_ts A message's `ts` value, uniquely identifying it within a channel
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatGetPermalinkGetResponse200|\Comicat\Slack\Api\Model\ChatGetPermalinkGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatGetPermalink(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatGetPermalink($queryParameters), $fetch);
    }
    /**
     * Share a me message into a channel.
     *
     * @param array $formParameters {
     *     @var string $channel Channel to send message to. Can be a public channel, private group or IM channel. Can be an encoded ID, or a name.
     *     @var string $text Text of the message to send.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatMeMessagePostResponse200|\Comicat\Slack\Api\Model\ChatMeMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatMeMessage(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatMeMessage($formParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatPostEphemeralPostResponse200|\Comicat\Slack\Api\Model\ChatPostEphemeralPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatPostEphemeral(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatPostEphemeral($formParameters, $headerParameters), $fetch);
    }
    /**
     * Sends a message to a channel.
     *
     * @param array $formParameters {
     *     @var string $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
     *     @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string.
     *     @var string $blocks A JSON-based array of structured blocks, presented as a URL-encoded string.
     *     @var string $channel Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var string $icon_emoji Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *     @var string $icon_url URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *     @var bool $link_names Find and link channel names and usernames.
     *     @var bool $mrkdwn Disable Slack markup parsing by setting to `false`. Enabled by default.
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var bool $unfurl_links Pass true to enable unfurling of primarily text-based content.
     *     @var bool $unfurl_media Pass false to disable unfurling of media content.
     *     @var string $username Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatPostMessagePostResponse200|\Comicat\Slack\Api\Model\ChatPostMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatPostMessage(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatPostMessage($formParameters, $headerParameters), $fetch);
    }
    /**
     * Schedules a message to be sent to a channel.
     *
     * @param array $formParameters {
     *     @var string $channel Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $post_at Unix EPOCH timestamp of time in future to send the message.
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [chat.postMessage](chat.postMessage#formatting).
     *     @var bool $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [chat.postMessage](chat.postMessage#authorship).
     *     @var bool $link_names Find and link channel names and usernames.
     *     @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string.
     *     @var string $blocks A JSON-based array of structured blocks, presented as a URL-encoded string.
     *     @var bool $unfurl_links Pass true to enable unfurling of primarily text-based content.
     *     @var bool $unfurl_media Pass false to disable unfurling of media content.
     *     @var float $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatScheduleMessagePostResponse200|\Comicat\Slack\Api\Model\ChatScheduleMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatScheduleMessage(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatScheduleMessage($formParameters, $headerParameters), $fetch);
    }
    /**
     * Returns a list of scheduled messages.
     *
     * @param array $queryParameters {
     *     @var string $channel The channel of the scheduled messages
     *     @var float $latest A UNIX timestamp of the latest value in the time range
     *     @var float $oldest A UNIX timestamp of the oldest value in the time range
     *     @var int $limit Maximum number of original entries to return.
     *     @var string $cursor For pagination purposes, this is the `cursor` value returned from a previous call to `chat.scheduledmessages.list` indicating where you want to start this call from.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatScheduledMessagesListGetResponse200|\Comicat\Slack\Api\Model\ChatScheduledMessagesListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatScheduledMessagesList(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatScheduledMessagesList($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Provide custom unfurl behavior for user-posted URLs
     *
     * @param array $formParameters {
     *     @var string $channel Channel ID of the message
     *     @var string $ts Timestamp of the message to add unfurl behavior to.
     *     @var string $unfurls URL-encoded JSON map with keys set to URLs featured in the the message, pointing to their unfurl blocks or message attachments.
     *     @var string $user_auth_message Provide a simply-formatted string to send as an ephemeral message to the user as invitation to authenticate further and enable full unfurling behavior
     *     @var bool $user_auth_required Set to `true` or `1` to indicate the user must install your Slack app to trigger unfurls for this domain
     *     @var string $user_auth_url Send users to this custom URL where they will complete authentication in your app to fully trigger unfurling. Value should be properly URL-encoded.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `links:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatUnfurlPostResponse200|\Comicat\Slack\Api\Model\ChatUnfurlPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatUnfurl(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatUnfurl($formParameters, $headerParameters), $fetch);
    }
    /**
     * Updates a message.
     *
     * @param array $formParameters {
     *     @var string $as_user Pass true to update the message as the authed user. [Bot users](/bot-users) in this context are considered authed users.
     *     @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string. This field is required when not presenting `text`. If you don't include this field, the message's previous `attachments` will be retained. To remove previous `attachments`, include an empty array for this field.
     *     @var string $blocks A JSON-based array of [structured blocks](/block-kit/building), presented as a URL-encoded string. If you don't include this field, the message's previous `blocks` will be retained. To remove previous `blocks`, include an empty array for this field.
     *     @var string $channel Channel containing the message to be updated.
     *     @var string $link_names Find and link channel names and usernames. Defaults to `none`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `none`.
     *     @var string $parse Change how messages are treated. Defaults to `client`, unlike `chat.postMessage`. Accepts either `none` or `full`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `client`.
     *     @var string $text New text for the message, using the [default formatting rules](/reference/surfaces/formatting). It's not required when presenting `blocks` or `attachments`.
     *     @var string $ts Timestamp of the message to be updated.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ChatUpdatePostResponse200|\Comicat\Slack\Api\Model\ChatUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function chatUpdate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ChatUpdate($formParameters, $headerParameters), $fetch);
    }
    /**
     * Archives a conversation.
     *
     * @param array $formParameters {
     *     @var string $channel ID of conversation to archive
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsArchivePostResponse200|\Comicat\Slack\Api\Model\ConversationsArchivePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsArchive(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsArchive($formParameters, $headerParameters), $fetch);
    }
    /**
     * Closes a direct message or multi-person direct message.
     *
     * @param array $formParameters {
     *     @var string $channel Conversation to close.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsClosePostResponse200|\Comicat\Slack\Api\Model\ConversationsClosePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsClose(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsClose($formParameters, $headerParameters), $fetch);
    }
    /**
     * Initiates a public or private channel-based conversation
     *
     * @param array $formParameters {
     *     @var string $name Name of the public or private channel to create
     *     @var bool $is_private Create a private channel instead of a public one
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsCreatePostResponse200|\Comicat\Slack\Api\Model\ConversationsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsCreate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsCreate($formParameters, $headerParameters), $fetch);
    }
    /**
     * Fetches a conversation's history of messages and events.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:history`
     *     @var string $channel Conversation ID to fetch history for.
     *     @var float $latest End of time range of messages to include in results.
     *     @var float $oldest Start of time range of messages to include in results.
     *     @var bool $inclusive Include messages with latest or oldest timestamp in results only when either timestamp is specified.
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsHistoryGetResponse200|\Comicat\Slack\Api\Model\ConversationsHistoryGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsHistory(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsHistory($queryParameters), $fetch);
    }
    /**
     * Retrieve information about a conversation.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var string $channel Conversation ID to learn more about
     *     @var bool $include_locale Set this to `true` to receive the locale for this conversation. Defaults to `false`
     *     @var bool $include_num_members Set to `true` to include the member count for the specified conversation. Defaults to `false`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsInfoGetResponse200|\Comicat\Slack\Api\Model\ConversationsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsInfo($queryParameters), $fetch);
    }
    /**
     * Invites users to a channel.
     *
     * @param array $formParameters {
     *     @var string $channel The ID of the public or private channel to invite user(s) to.
     *     @var string $users A comma separated list of user IDs. Up to 1000 users may be listed.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsInvitePostResponse200|\Comicat\Slack\Api\Model\ConversationsInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsInvite(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsInvite($formParameters, $headerParameters), $fetch);
    }
    /**
     * Joins an existing conversation.
     *
     * @param array $formParameters {
     *     @var string $channel ID of conversation to join
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsJoinPostResponse200|\Comicat\Slack\Api\Model\ConversationsJoinPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsJoin(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsJoin($formParameters, $headerParameters), $fetch);
    }
    /**
     * Removes a user from a conversation.
     *
     * @param array $formParameters {
     *     @var string $channel ID of conversation to remove user from.
     *     @var string $user User ID to be removed.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsKickPostResponse200|\Comicat\Slack\Api\Model\ConversationsKickPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsKick(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsKick($formParameters, $headerParameters), $fetch);
    }
    /**
     * Leaves a conversation.
     *
     * @param array $formParameters {
     *     @var string $channel Conversation to leave
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsLeavePostResponse200|\Comicat\Slack\Api\Model\ConversationsLeavePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsLeave(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsLeave($formParameters, $headerParameters), $fetch);
    }
    /**
     * Lists all channels in a Slack team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var bool $exclude_archived Set to `true` to exclude archived channels from the list
     *     @var string $types Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsListGetResponse200|\Comicat\Slack\Api\Model\ConversationsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsList($queryParameters), $fetch);
    }
    /**
     * Sets the read cursor in a channel.
     *
     * @param array $formParameters {
     *     @var string $channel Channel or conversation to set the read cursor for.
     *     @var float $ts Unique identifier of message you want marked as most recently seen in this conversation.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsMarkPostResponse200|\Comicat\Slack\Api\Model\ConversationsMarkPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsMark(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsMark($formParameters, $headerParameters), $fetch);
    }
    /**
     * Retrieve members of a conversation.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var string $channel ID of the conversation to retrieve members for
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsMembersGetResponse200|\Comicat\Slack\Api\Model\ConversationsMembersGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsMembers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsMembers($queryParameters), $fetch);
    }
    /**
     * Opens or resumes a direct message or multi-person direct message.
     *
     * @param array $formParameters {
     *     @var string $channel Resume a conversation by supplying an `im` or `mpim`'s ID. Or provide the `users` field instead.
     *     @var string $users Comma separated lists of users. If only one user is included, this creates a 1:1 DM.  The ordering of the users is preserved whenever a multi-person direct message is returned. Supply a `channel` when not supplying `users`.
     *     @var bool $return_im Boolean, indicates you want the full IM channel definition in the response.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsOpenPostResponse200|\Comicat\Slack\Api\Model\ConversationsOpenPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsOpen(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsOpen($formParameters, $headerParameters), $fetch);
    }
    /**
     * Renames a conversation.
     *
     * @param array $formParameters {
     *     @var string $channel ID of conversation to rename
     *     @var string $name New name for conversation.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsRenamePostResponse200|\Comicat\Slack\Api\Model\ConversationsRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsRename(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsRename($formParameters, $headerParameters), $fetch);
    }
    /**
     * Retrieve a thread of messages posted to a conversation
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:history`
     *     @var string $channel Conversation ID to fetch thread from.
     *     @var float $ts Unique identifier of a thread's parent message. `ts` must be the timestamp of an existing message with 0 or more replies. If there are no replies then just the single message referenced by `ts` will return - it is just an ordinary, unthreaded message.
     *     @var float $latest End of time range of messages to include in results.
     *     @var float $oldest Start of time range of messages to include in results.
     *     @var bool $inclusive Include messages with latest or oldest timestamp in results only when either timestamp is specified.
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsRepliesGetResponse200|\Comicat\Slack\Api\Model\ConversationsRepliesGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsReplies(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsReplies($queryParameters), $fetch);
    }
    /**
     * Sets the purpose for a conversation.
     *
     * @param array $formParameters {
     *     @var string $channel Conversation to set the purpose of
     *     @var string $purpose A new, specialer purpose
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsSetPurposePostResponse200|\Comicat\Slack\Api\Model\ConversationsSetPurposePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsSetPurpose(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsSetPurpose($formParameters, $headerParameters), $fetch);
    }
    /**
     * Sets the topic for a conversation.
     *
     * @param array $formParameters {
     *     @var string $channel Conversation to set the topic of
     *     @var string $topic The new topic string. Does not support formatting or linkification.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsSetTopicPostResponse200|\Comicat\Slack\Api\Model\ConversationsSetTopicPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsSetTopic(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsSetTopic($formParameters, $headerParameters), $fetch);
    }
    /**
     * Reverses conversation archival.
     *
     * @param array $formParameters {
     *     @var string $channel ID of conversation to unarchive
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ConversationsUnarchivePostResponse200|\Comicat\Slack\Api\Model\ConversationsUnarchivePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function conversationsUnarchive(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ConversationsUnarchive($formParameters, $headerParameters), $fetch);
    }
    /**
     * Open a dialog with a user
     *
     * @param array $queryParameters {
     *     @var string $dialog The dialog definition. This must be a JSON-encoded string.
     *     @var string $trigger_id Exchange a trigger to post to the user.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\DialogOpenGetResponse200|\Comicat\Slack\Api\Model\DialogOpenGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function dialogOpen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\DialogOpen($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Ends the current user's Do Not Disturb session immediately.
     *
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `dnd:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\DndEndDndPostResponse200|\Comicat\Slack\Api\Model\DndEndDndPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function dndEndDnd(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\DndEndDnd($headerParameters), $fetch);
    }
    /**
     * Ends the current user's snooze mode immediately.
     *
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `dnd:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\DndEndSnoozePostResponse200|\Comicat\Slack\Api\Model\DndEndSnoozePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function dndEndSnooze(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\DndEndSnooze($headerParameters), $fetch);
    }
    /**
     * Retrieves a user's current Do Not Disturb status.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `dnd:read`
     *     @var string $user User to fetch status for (defaults to current user)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\DndInfoGetResponse200|\Comicat\Slack\Api\Model\DndInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function dndInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\DndInfo($queryParameters), $fetch);
    }
    /**
     * Turns on Do Not Disturb mode for the current user, or changes its duration.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `dnd:write`
     *     @var string $num_minutes Number of minutes, from now, to snooze until.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\DndSetSnoozePostResponse200|\Comicat\Slack\Api\Model\DndSetSnoozePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function dndSetSnooze(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\DndSetSnooze($formParameters), $fetch);
    }
    /**
     * Retrieves the Do Not Disturb status for up to 50 users on a team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `dnd:read`
     *     @var string $users Comma-separated list of users to fetch Do Not Disturb status for
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\DndTeamInfoGetResponse200|\Comicat\Slack\Api\Model\DndTeamInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function dndTeamInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\DndTeamInfo($queryParameters), $fetch);
    }
    /**
     * Lists custom emoji for a team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `emoji:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\EmojiListGetResponse200|\Comicat\Slack\Api\Model\EmojiListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function emojiList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\EmojiList($queryParameters), $fetch);
    }
    /**
     * Deletes an existing comment on a file.
     *
     * @param array $formParameters {
     *     @var string $file File to delete a comment from.
     *     @var string $id The comment to delete.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesCommentsDeletePostResponse200|\Comicat\Slack\Api\Model\FilesCommentsDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesCommentsDelete(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesCommentsDelete($formParameters, $headerParameters), $fetch);
    }
    /**
     * Deletes a file.
     *
     * @param array $formParameters {
     *     @var string $file ID of file to delete.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesDeletePostResponse200|\Comicat\Slack\Api\Model\FilesDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesDelete(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesDelete($formParameters, $headerParameters), $fetch);
    }
    /**
     * Gets information about a file.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `files:read`
     *     @var string $file Specify a file by providing its ID.
     *     @var string $count 
     *     @var string $page 
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *     @var string $cursor Parameter for pagination. File comments are paginated for a single file. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection of comments. See [pagination](/docs/pagination) for more details.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesInfoGetResponse200|\Comicat\Slack\Api\Model\FilesInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesInfo($queryParameters), $fetch);
    }
    /**
     * List for a team, in a channel, or from a user with applied filters.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `files:read`
     *     @var string $user Filter files created by a single user.
     *     @var string $channel Filter files appearing in a specific channel, indicated by its ID.
     *     @var float $ts_from Filter files created after this timestamp (inclusive).
     *     @var float $ts_to Filter files created before this timestamp (inclusive).
     *     @var string $types Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.
     *     @var string $count 
     *     @var string $page 
     *     @var bool $show_files_hidden_by_limit Show truncated file info for files hidden due to being too old, and the team who owns the file being over the file limit.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesListGetResponse200|\Comicat\Slack\Api\Model\FilesListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesList($queryParameters), $fetch);
    }
    /**
     * Adds a file from a remote service
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
     *     @var string $external_id Creator defined GUID for the file.
     *     @var string $title Title of the file being shared.
     *     @var string $filetype type of file
     *     @var string $external_url URL of the remote file.
     *     @var string $preview_image Preview of the document via `multipart/form-data`.
     *     @var string $indexable_file_contents A text file (txt, pdf, doc, etc.) containing textual search terms that are used to improve discovery of the remote file.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRemoteAddPostResponse200|\Comicat\Slack\Api\Model\FilesRemoteAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesRemoteAdd(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesRemoteAdd($formParameters), $fetch);
    }
    /**
     * Retrieve information about a remote file added to Slack
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `remote_files:read`
     *     @var string $file Specify a file by providing its ID.
     *     @var string $external_id Creator defined GUID for the file.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRemoteInfoGetResponse200|\Comicat\Slack\Api\Model\FilesRemoteInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesRemoteInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesRemoteInfo($queryParameters), $fetch);
    }
    /**
     * Retrieve information about a remote file added to Slack
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `remote_files:read`
     *     @var string $channel Filter files appearing in a specific channel, indicated by its ID.
     *     @var float $ts_from Filter files created after this timestamp (inclusive).
     *     @var float $ts_to Filter files created before this timestamp (inclusive).
     *     @var int $limit The maximum number of items to return.
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRemoteListGetResponse200|\Comicat\Slack\Api\Model\FilesRemoteListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesRemoteList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesRemoteList($queryParameters), $fetch);
    }
    /**
     * Remove a remote file.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
     *     @var string $file Specify a file by providing its ID.
     *     @var string $external_id Creator defined GUID for the file.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRemoteRemovePostResponse200|\Comicat\Slack\Api\Model\FilesRemoteRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesRemoteRemove(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesRemoteRemove($formParameters), $fetch);
    }
    /**
     * Share a remote file into a channel.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `remote_files:share`
     *     @var string $file Specify a file registered with Slack by providing its ID. Either this field or `external_id` or both are required.
     *     @var string $external_id The globally unique identifier (GUID) for the file, as set by the app registering the file with Slack.  Either this field or `file` or both are required.
     *     @var string $channels Comma-separated list of channel IDs where the file will be shared.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRemoteShareGetResponse200|\Comicat\Slack\Api\Model\FilesRemoteShareGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesRemoteShare(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesRemoteShare($queryParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRemoteUpdatePostResponse200|\Comicat\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesRemoteUpdate(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesRemoteUpdate($formParameters), $fetch);
    }
    /**
     * Revokes public/external sharing access for a file
     *
     * @param array $formParameters {
     *     @var string $file File to revoke
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesRevokePublicURLPostResponse200|\Comicat\Slack\Api\Model\FilesRevokePublicURLPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesRevokePublicURL(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesRevokePublicURL($formParameters, $headerParameters), $fetch);
    }
    /**
     * Enables a file for public/external sharing.
     *
     * @param array $formParameters {
     *     @var string $file File to share
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesSharedPublicURLPostResponse200|\Comicat\Slack\Api\Model\FilesSharedPublicURLPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesSharedPublicURL(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesSharedPublicURL($formParameters, $headerParameters), $fetch);
    }
    /**
     * Uploads or creates a file.
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     *     @var string $file File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *     @var string $content File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *     @var string $filetype A [file type](/types/file#file_types) identifier.
     *     @var string $filename Filename of file.
     *     @var string $title Title of file.
     *     @var string $initial_comment The message text introducing the file in specified `channels`.
     *     @var string $channels Comma-separated list of channel names or IDs where the file will be shared.
     *     @var float $thread_ts Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\FilesUploadPostResponse200|\Comicat\Slack\Api\Model\FilesUploadPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function filesUpload(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\FilesUpload($formParameters), $fetch);
    }
    /**
     * For Enterprise Grid workspaces, map local user IDs to global user IDs
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `tokens.basic`
     *     @var string $users A comma-separated list of user ids, up to 400 per request
     *     @var string $team_id Specify team_id starts with `T` in case of Org Token
     *     @var bool $to_old Specify `true` to convert `W` global user IDs to workspace-specific `U` IDs. Defaults to `false`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\MigrationExchangeGetResponse200|\Comicat\Slack\Api\Model\MigrationExchangeGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function migrationExchange(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\MigrationExchange($queryParameters), $fetch);
    }
    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Issued when you created your application.
     *     @var string $client_secret Issued when you created your application.
     *     @var string $code The `code` param returned via the OAuth callback.
     *     @var string $redirect_uri This must match the originally submitted URI (if one was sent).
     *     @var bool $single_channel Request the user to add your app only to a single channel. Only valid with a [legacy workspace app](https://api.slack.com/legacy-workspace-apps).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\OauthAccessGetResponse200|\Comicat\Slack\Api\Model\OauthAccessGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function oauthAccess(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\OauthAccess($queryParameters), $fetch);
    }
    /**
     * Exchanges a temporary OAuth verifier code for a workspace token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Issued when you created your application.
     *     @var string $client_secret Issued when you created your application.
     *     @var string $code The `code` param returned via the OAuth callback.
     *     @var string $redirect_uri This must match the originally submitted URI (if one was sent).
     *     @var bool $single_channel Request the user to add your app only to a single channel.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\OauthTokenGetResponse200|\Comicat\Slack\Api\Model\OauthTokenGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function oauthToken(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\OauthToken($queryParameters), $fetch);
    }
    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Issued when you created your application.
     *     @var string $client_secret Issued when you created your application.
     *     @var string $code The `code` param returned via the OAuth callback.
     *     @var string $redirect_uri This must match the originally submitted URI (if one was sent).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\OauthV2AccessGetResponse200|\Comicat\Slack\Api\Model\OauthV2AccessGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function oauthV2Access(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\OauthV2Access($queryParameters), $fetch);
    }
    /**
     * Pins an item to a channel.
     *
     * @param array $formParameters {
     *     @var string $channel Channel to pin the item in.
     *     @var string $timestamp Timestamp of the message to pin.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `pins:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\PinsAddPostResponse200|\Comicat\Slack\Api\Model\PinsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function pinsAdd(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\PinsAdd($formParameters, $headerParameters), $fetch);
    }
    /**
     * Lists items pinned to a channel.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `pins:read`
     *     @var string $channel Channel to get pinned items for.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\PinsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function pinsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\PinsList($queryParameters), $fetch);
    }
    /**
     * Un-pins an item from a channel.
     *
     * @param array $formParameters {
     *     @var string $channel Channel where the item is pinned to.
     *     @var string $timestamp Timestamp of the message to un-pin.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `pins:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\PinsRemovePostResponse200|\Comicat\Slack\Api\Model\PinsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function pinsRemove(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\PinsRemove($formParameters, $headerParameters), $fetch);
    }
    /**
     * Adds a reaction to an item.
     *
     * @param array $formParameters {
     *     @var string $channel Channel where the message to add reaction to was posted.
     *     @var string $name Reaction (emoji) name.
     *     @var string $timestamp Timestamp of the message to add reaction to.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `reactions:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ReactionsAddPostResponse200|\Comicat\Slack\Api\Model\ReactionsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsAdd(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ReactionsAdd($formParameters, $headerParameters), $fetch);
    }
    /**
     * Gets reactions for an item.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `reactions:read`
     *     @var string $channel Channel where the message to get reactions for was posted.
     *     @var string $file File to get reactions for.
     *     @var string $file_comment File comment to get reactions for.
     *     @var bool $full If true always return the complete reaction list.
     *     @var string $timestamp Timestamp of the message to get reactions for.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ReactionsGetGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ReactionsGet($queryParameters), $fetch);
    }
    /**
     * Lists reactions made by a user.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `reactions:read`
     *     @var string $user Show reactions made by this user. Defaults to the authed user.
     *     @var bool $full If true always return the complete reaction list.
     *     @var int $count 
     *     @var int $page 
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ReactionsListGetResponse200|\Comicat\Slack\Api\Model\ReactionsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ReactionsList($queryParameters), $fetch);
    }
    /**
     * Removes a reaction from an item.
     *
     * @param array $formParameters {
     *     @var string $name Reaction (emoji) name.
     *     @var string $file File to remove reaction from.
     *     @var string $file_comment File comment to remove reaction from.
     *     @var string $channel Channel where the message to remove reaction from was posted.
     *     @var string $timestamp Timestamp of the message to remove reaction from.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `reactions:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ReactionsRemovePostResponse200|\Comicat\Slack\Api\Model\ReactionsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsRemove(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ReactionsRemove($formParameters, $headerParameters), $fetch);
    }
    /**
     * Creates a reminder.
     *
     * @param array $formParameters {
     *     @var string $text The content of the reminder
     *     @var string $time When this reminder should happen: the Unix timestamp (up to five years from now), the number of seconds until the reminder (if within 24 hours), or a natural language description (Ex. "in 15 minutes," or "every Thursday")
     *     @var string $user The user who will receive the reminder. If no user is specified, the reminder will go to user who created it.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\RemindersAddPostResponse200|\Comicat\Slack\Api\Model\RemindersAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function remindersAdd(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\RemindersAdd($formParameters, $headerParameters), $fetch);
    }
    /**
     * Marks a reminder as complete.
     *
     * @param array $formParameters {
     *     @var string $reminder The ID of the reminder to be marked as complete
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\RemindersCompletePostResponse200|\Comicat\Slack\Api\Model\RemindersCompletePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function remindersComplete(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\RemindersComplete($formParameters, $headerParameters), $fetch);
    }
    /**
     * Deletes a reminder.
     *
     * @param array $formParameters {
     *     @var string $reminder The ID of the reminder
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\RemindersDeletePostResponse200|\Comicat\Slack\Api\Model\RemindersDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function remindersDelete(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\RemindersDelete($formParameters, $headerParameters), $fetch);
    }
    /**
     * Gets information about a reminder.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `reminders:read`
     *     @var string $reminder The ID of the reminder
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\RemindersInfoGetResponse200|\Comicat\Slack\Api\Model\RemindersInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function remindersInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\RemindersInfo($queryParameters), $fetch);
    }
    /**
     * Lists all reminders created by or for a given user.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `reminders:read`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\RemindersListGetResponse200|\Comicat\Slack\Api\Model\RemindersListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function remindersList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\RemindersList($queryParameters), $fetch);
    }
    /**
     * Starts a Real Time Messaging session.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `rtm:stream`
     *     @var bool $batch_presence_aware Batch presence deliveries via subscription. Enabling changes the shape of `presence_change` events. See [batch presence](/docs/presence-and-status#batching).
     *     @var bool $presence_sub Only deliver presence events when requested by subscription. See [presence subscriptions](/docs/presence-and-status#subscriptions).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\RtmConnectGetResponse200|\Comicat\Slack\Api\Model\RtmConnectGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function rtmConnect(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\RtmConnect($queryParameters), $fetch);
    }
    /**
     * Searches for messages matching a query.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `search:read`
     *     @var int $count Pass the number of results you want per "page". Maximum of `100`.
     *     @var bool $highlight Pass a value of `true` to enable query highlight markers (see below).
     *     @var int $page 
     *     @var string $query Search query.
     *     @var string $sort Return matches sorted by either `score` or `timestamp`.
     *     @var string $sort_dir Change sort direction to ascending (`asc`) or descending (`desc`).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\SearchMessagesGetResponse200|\Comicat\Slack\Api\Model\SearchMessagesGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function searchMessages(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\SearchMessages($queryParameters), $fetch);
    }
    /**
     * Adds a star to an item.
     *
     * @param array $formParameters {
     *     @var string $channel Channel to add star to, or channel where the message to add star to was posted (used with `timestamp`).
     *     @var string $file File to add star to.
     *     @var string $file_comment File comment to add star to.
     *     @var string $timestamp Timestamp of the message to add star to.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `stars:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\StarsAddPostResponse200|\Comicat\Slack\Api\Model\StarsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function starsAdd(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\StarsAdd($formParameters, $headerParameters), $fetch);
    }
    /**
     * Lists stars for a user.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `stars:read`
     *     @var string $count 
     *     @var string $page 
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\StarsListGetResponse200|\Comicat\Slack\Api\Model\StarsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function starsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\StarsList($queryParameters), $fetch);
    }
    /**
     * Removes a star from an item.
     *
     * @param array $formParameters {
     *     @var string $channel Channel to remove star from, or channel where the message to remove star from was posted (used with `timestamp`).
     *     @var string $file File to remove star from.
     *     @var string $file_comment File comment to remove star from.
     *     @var string $timestamp Timestamp of the message to remove star from.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `stars:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\StarsRemovePostResponse200|\Comicat\Slack\Api\Model\StarsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function starsRemove(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\StarsRemove($formParameters, $headerParameters), $fetch);
    }
    /**
     * Gets the access logs for the current team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $before End of time range of logs to include in results (inclusive).
     *     @var string $count 
     *     @var string $page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\TeamAccessLogsGetResponse200|\Comicat\Slack\Api\Model\TeamAccessLogsGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function teamAccessLogs(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\TeamAccessLogs($queryParameters), $fetch);
    }
    /**
     * Gets billable users information for the current team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $user A user to retrieve the billable information for. Defaults to all users.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\TeamBillableInfoGetResponse200|\Comicat\Slack\Api\Model\TeamBillableInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function teamBillableInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\TeamBillableInfo($queryParameters), $fetch);
    }
    /**
     * Gets information about the current team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `team:read`
     *     @var string $team Team to get info on, if omitted, will return information about the current team. Will only return team that the authenticated token is allowed to see through external shared channels
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\TeamInfoGetResponse200|\Comicat\Slack\Api\Model\TeamInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function teamInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\TeamInfo($queryParameters), $fetch);
    }
    /**
     * Gets the integration logs for the current team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $app_id Filter logs to this Slack app. Defaults to all logs.
     *     @var string $change_type Filter logs with this change type. Defaults to all logs.
     *     @var string $count 
     *     @var string $page 
     *     @var string $service_id Filter logs to this service. Defaults to all logs.
     *     @var string $user Filter logs generated by this user’s actions. Defaults to all logs.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\TeamIntegrationLogsGetResponse200|\Comicat\Slack\Api\Model\TeamIntegrationLogsGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function teamIntegrationLogs(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\TeamIntegrationLogs($queryParameters), $fetch);
    }
    /**
     * Retrieve a team's profile.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `users.profile:read`
     *     @var string $visibility Filter by visibility.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\TeamProfileGetGetResponse200|\Comicat\Slack\Api\Model\TeamProfileGetGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function teamProfileGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\TeamProfileGet($queryParameters), $fetch);
    }
    /**
     * Create a User Group
     *
     * @param array $formParameters {
     *     @var string $channels A comma separated string of encoded channel IDs for which the User Group uses as a default.
     *     @var string $description A short description of the User Group.
     *     @var string $handle A mention handle. Must be unique among channels, users and User Groups.
     *     @var bool $include_count Include the number of users in each User Group.
     *     @var string $name A name for the User Group. Must be unique among User Groups.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsergroupsCreatePostResponse200|\Comicat\Slack\Api\Model\UsergroupsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usergroupsCreate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsergroupsCreate($formParameters, $headerParameters), $fetch);
    }
    /**
     * Disable an existing User Group
     *
     * @param array $formParameters {
     *     @var bool $include_count Include the number of users in the User Group.
     *     @var string $usergroup The encoded ID of the User Group to disable.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsergroupsDisablePostResponse200|\Comicat\Slack\Api\Model\UsergroupsDisablePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usergroupsDisable(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsergroupsDisable($formParameters, $headerParameters), $fetch);
    }
    /**
     * Enable a User Group
     *
     * @param array $formParameters {
     *     @var bool $include_count Include the number of users in the User Group.
     *     @var string $usergroup The encoded ID of the User Group to enable.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsergroupsEnablePostResponse200|\Comicat\Slack\Api\Model\UsergroupsEnablePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usergroupsEnable(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsergroupsEnable($formParameters, $headerParameters), $fetch);
    }
    /**
     * List all User Groups for a team
     *
     * @param array $queryParameters {
     *     @var bool $include_users Include the list of users for each User Group.
     *     @var string $token Authentication token. Requires scope: `usergroups:read`
     *     @var bool $include_count Include the number of users in each User Group.
     *     @var bool $include_disabled Include disabled User Groups.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsergroupsListGetResponse200|\Comicat\Slack\Api\Model\UsergroupsListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usergroupsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsergroupsList($queryParameters), $fetch);
    }
    /**
     * Update an existing User Group
     *
     * @param array $formParameters {
     *     @var string $handle A mention handle. Must be unique among channels, users and User Groups.
     *     @var string $description A short description of the User Group.
     *     @var string $channels A comma separated string of encoded channel IDs for which the User Group uses as a default.
     *     @var bool $include_count Include the number of users in the User Group.
     *     @var string $usergroup The encoded ID of the User Group to update.
     *     @var string $name A name for the User Group. Must be unique among User Groups.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsergroupsUpdatePostResponse200|\Comicat\Slack\Api\Model\UsergroupsUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usergroupsUpdate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsergroupsUpdate($formParameters, $headerParameters), $fetch);
    }
    /**
     * List all users in a User Group
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `usergroups:read`
     *     @var bool $include_disabled Allow results that involve disabled User Groups.
     *     @var string $usergroup The encoded ID of the User Group to update.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsergroupsUsersListGetResponse200|\Comicat\Slack\Api\Model\UsergroupsUsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usergroupsUsersList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsergroupsUsersList($queryParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsergroupsUsersUpdatePostResponse200|\Comicat\Slack\Api\Model\UsergroupsUsersUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usergroupsUsersUpdate(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsergroupsUsersUpdate($formParameters, $headerParameters), $fetch);
    }
    /**
     * List conversations the calling user may access.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var string $user Browse conversations by a specific user ID's membership. Non-public channels are restricted to those where the calling user shares membership.
     *     @var string $types Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     *     @var bool $exclude_archived Set to `true` to exclude archived channels from the list
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersConversationsGetResponse200|\Comicat\Slack\Api\Model\UsersConversationsGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersConversations(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersConversations($queryParameters), $fetch);
    }
    /**
     * Delete the user profile photo
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersDeletePhotoPostResponse200|\Comicat\Slack\Api\Model\UsersDeletePhotoPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersDeletePhoto(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersDeletePhoto($formParameters), $fetch);
    }
    /**
     * Gets user presence information.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var string $user User to get presence info on. Defaults to the authed user.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersGetPresenceGetResponse200|\Comicat\Slack\Api\Model\UsersGetPresenceGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersGetPresence(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersGetPresence($queryParameters), $fetch);
    }
    /**
     * Get a user's identity.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `identity.basic`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersIdentityGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersIdentity(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersIdentity($queryParameters), $fetch);
    }
    /**
     * Gets information about a user.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var bool $include_locale Set this to `true` to receive the locale for this user. Defaults to `false`
     *     @var string $user User to get info on
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersInfoGetResponse200|\Comicat\Slack\Api\Model\UsersInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersInfo($queryParameters), $fetch);
    }
    /**
     * Lists all users in a Slack team.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached. Providing no `limit` value will result in Slack attempting to deliver you the entire result set. If the collection is too large you may experience `limit_required` or HTTP 500 errors.
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var bool $include_locale Set this to `true` to receive the locale for users. Defaults to `false`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersListGetResponse200|\Comicat\Slack\Api\Model\UsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersList($queryParameters), $fetch);
    }
    /**
     * Find a user with an email address.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `users:read.email`
     *     @var string $email An email address belonging to a user in the workspace
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersLookupByEmailGetResponse200|\Comicat\Slack\Api\Model\UsersLookupByEmailGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersLookupByEmail(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersLookupByEmail($queryParameters), $fetch);
    }
    /**
     * Retrieves a user's profile information.
     *
     * @param array $queryParameters {
     *     @var string $token Authentication token. Requires scope: `users.profile:read`
     *     @var bool $include_labels Include labels for each ID in custom profile fields
     *     @var string $user User to retrieve profile info for
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersProfileGetGetResponse200|\Comicat\Slack\Api\Model\UsersProfileGetGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersProfileGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersProfileGet($queryParameters), $fetch);
    }
    /**
     * Set the profile information for a user.
     *
     * @param array $formParameters {
     *     @var string $name Name of a single key to set. Usable only if `profile` is not passed.
     *     @var string $profile Collection of key:value pairs presented as a URL-encoded JSON hash. At most 50 fields may be set. Each field name is limited to 255 characters.
     *     @var string $user ID of user to change. This argument may only be specified by team admins on paid teams.
     *     @var string $value Value to set a single key to. Usable only if `profile` is not passed.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersProfileSetPostResponse200|\Comicat\Slack\Api\Model\UsersProfileSetPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersProfileSet(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersProfileSet($formParameters, $headerParameters), $fetch);
    }
    /**
     * Marked a user as active. Deprecated and non-functional.
     *
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersSetActivePostResponse200|\Comicat\Slack\Api\Model\UsersSetActivePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersSetActive(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersSetActive($headerParameters), $fetch);
    }
    /**
     * Set the user profile photo
     *
     * @param array $formParameters {
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     *     @var string $crop_w Width/height of crop box (always square)
     *     @var string $crop_x X coordinate of top-left corner of crop box
     *     @var string $crop_y Y coordinate of top-left corner of crop box
     *     @var string $image File contents via `multipart/form-data`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersSetPhotoPostResponse200|\Comicat\Slack\Api\Model\UsersSetPhotoPostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersSetPhoto(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersSetPhoto($formParameters), $fetch);
    }
    /**
     * Manually sets user presence.
     *
     * @param array $formParameters {
     *     @var string $presence Either `auto` or `away`
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `users:write`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\UsersSetPresencePostResponse200|\Comicat\Slack\Api\Model\UsersSetPresencePostResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function usersSetPresence(array $formParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\UsersSetPresence($formParameters, $headerParameters), $fetch);
    }
    /**
     * Open a view for a user.
     *
     * @param array $queryParameters {
     *     @var string $trigger_id Exchange a trigger to post to the user.
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ViewsOpenGetResponse200|\Comicat\Slack\Api\Model\ViewsOpenGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function viewsOpen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ViewsOpen($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Publish a static view for a User.
     *
     * @param array $queryParameters {
     *     @var string $user_id `id` of the user you want publish a view to.
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     *     @var string $hash A string that represents view state to protect against possible race conditions.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ViewsPublishGetResponse200|\Comicat\Slack\Api\Model\ViewsPublishGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPublish(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ViewsPublish($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Push a view onto the stack of a root view.
     *
     * @param array $queryParameters {
     *     @var string $trigger_id Exchange a trigger to post to the user.
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ViewsPushGetResponse200|\Comicat\Slack\Api\Model\ViewsPushGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPush(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ViewsPush($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Update an existing view.
     *
     * @param array $queryParameters {
     *     @var string $view_id A unique identifier of the view to be updated. Either `view_id` or `external_id` is required.
     *     @var string $external_id A unique identifier of the view set by the developer. Must be unique for all views on a team. Max length of 255 characters. Either `view_id` or `external_id` is required.
     *     @var string $view A [view object](/reference/surfaces/views). This must be a JSON-encoded string.
     *     @var string $hash A string that represents view state to protect against possible race conditions.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\ViewsUpdateGetResponse200|\Comicat\Slack\Api\Model\ViewsUpdateGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function viewsUpdate(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\ViewsUpdate($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Indicate that an app's step in a workflow completed execution.
     *
     * @param array $queryParameters {
     *     @var string $workflow_step_execute_id Context identifier that maps to the correct workflow step execution.
     *     @var string $outputs Key-value object of outputs from your step. Keys of this object reflect the configured `key` properties of your [`outputs`](/reference/workflows/workflow_step#output) array from your `workflow_step` object.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\WorkflowsStepCompletedGetResponse200|\Comicat\Slack\Api\Model\WorkflowsStepCompletedGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function workflowsStepCompleted(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\WorkflowsStepCompleted($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Indicate that an app's step in a workflow failed to execute.
     *
     * @param array $queryParameters {
     *     @var string $workflow_step_execute_id Context identifier that maps to the correct workflow step execution.
     *     @var string $error A JSON-based object with a `message` property that should contain a human readable error message.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\WorkflowsStepFailedGetResponse200|\Comicat\Slack\Api\Model\WorkflowsStepFailedGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function workflowsStepFailed(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\WorkflowsStepFailed($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Update the configuration for a workflow extension step.
     *
     * @param array $queryParameters {
     *     @var string $workflow_step_edit_id A context identifier provided with `view_submission` payloads used to call back to `workflows.updateStep`.
     *     @var string $inputs A JSON key-value map of inputs required from a user during configuration. This is the data your app expects to receive when the workflow step starts. **Please note**: the embedded variable format is set and replaced by the workflow system. You cannot create custom variables that will be replaced at runtime. [Read more about variables in workflow steps here](/workflows/steps#variables).
     *     @var string $outputs An JSON array of output objects used during step execution. This is the data your app agrees to provide when your workflow step was executed.
     *     @var string $step_name An optional field that can be used to override the step name that is shown in the Workflow Builder.
     *     @var string $step_image_url An optional field that can be used to override app image that is shown in the Workflow Builder.
     * }
     * @param array $headerParameters {
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Comicat\Slack\Api\Model\WorkflowsUpdateStepGetResponse200|\Comicat\Slack\Api\Model\WorkflowsUpdateStepGetResponsedefault|\Psr\Http\Message\ResponseInterface
     */
    public function workflowsUpdateStep(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Comicat\Slack\Api\Endpoint\WorkflowsUpdateStep($queryParameters, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://slack.com/api');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Comicat\Slack\Api\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}