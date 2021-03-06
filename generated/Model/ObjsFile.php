<?php

namespace Comicat\Slack\Api\Model;

class ObjsFile
{
    /**
     * 
     *
     * @var string[]
     */
    protected $channels;
    /**
     * 
     *
     * @var int
     */
    protected $commentsCount;
    /**
     * 
     *
     * @var int
     */
    protected $created;
    /**
     * 
     *
     * @var int
     */
    protected $dateDelete;
    /**
     * 
     *
     * @var bool
     */
    protected $displayAsBot;
    /**
     * 
     *
     * @var bool
     */
    protected $editable;
    /**
     * 
     *
     * @var string
     */
    protected $editor;
    /**
     * 
     *
     * @var string
     */
    protected $externalId;
    /**
     * 
     *
     * @var string
     */
    protected $externalType;
    /**
     * 
     *
     * @var string
     */
    protected $externalUrl;
    /**
     * 
     *
     * @var string
     */
    protected $filetype;
    /**
     * 
     *
     * @var string[]
     */
    protected $groups;
    /**
     * 
     *
     * @var bool
     */
    protected $hasRichPreview;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $imageExifRotation;
    /**
     * 
     *
     * @var string[]
     */
    protected $ims;
    /**
     * 
     *
     * @var bool
     */
    protected $isExternal;
    /**
     * 
     *
     * @var bool
     */
    protected $isPublic;
    /**
     * 
     *
     * @var bool
     */
    protected $isStarred;
    /**
     * 
     *
     * @var bool
     */
    protected $isTombstoned;
    /**
     * 
     *
     * @var string
     */
    protected $lastEditor;
    /**
     * 
     *
     * @var string
     */
    protected $mimetype;
    /**
     * 
     *
     * @var string
     */
    protected $mode;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $nonOwnerEditable;
    /**
     * 
     *
     * @var int
     */
    protected $numStars;
    /**
     * 
     *
     * @var int
     */
    protected $originalH;
    /**
     * 
     *
     * @var int
     */
    protected $originalW;
    /**
     * 
     *
     * @var string
     */
    protected $permalink;
    /**
     * 
     *
     * @var string
     */
    protected $permalinkPublic;
    /**
     * 
     *
     * @var mixed
     */
    protected $pinnedInfo;
    /**
     * 
     *
     * @var string[]
     */
    protected $pinnedTo;
    /**
     * 
     *
     * @var string
     */
    protected $prettyType;
    /**
     * 
     *
     * @var string
     */
    protected $preview;
    /**
     * 
     *
     * @var bool
     */
    protected $publicUrlShared;
    /**
     * 
     *
     * @var ObjsReaction[]
     */
    protected $reactions;
    /**
     * 
     *
     * @var ObjsFileShares
     */
    protected $shares;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @var string
     */
    protected $sourceTeam;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $thumb1024;
    /**
     * 
     *
     * @var int
     */
    protected $thumb1024H;
    /**
     * 
     *
     * @var int
     */
    protected $thumb1024W;
    /**
     * 
     *
     * @var string
     */
    protected $thumb160;
    /**
     * 
     *
     * @var string
     */
    protected $thumb360;
    /**
     * 
     *
     * @var int
     */
    protected $thumb360H;
    /**
     * 
     *
     * @var int
     */
    protected $thumb360W;
    /**
     * 
     *
     * @var string
     */
    protected $thumb480;
    /**
     * 
     *
     * @var int
     */
    protected $thumb480H;
    /**
     * 
     *
     * @var int
     */
    protected $thumb480W;
    /**
     * 
     *
     * @var string
     */
    protected $thumb64;
    /**
     * 
     *
     * @var string
     */
    protected $thumb720;
    /**
     * 
     *
     * @var int
     */
    protected $thumb720H;
    /**
     * 
     *
     * @var int
     */
    protected $thumb720W;
    /**
     * 
     *
     * @var string
     */
    protected $thumb80;
    /**
     * 
     *
     * @var string
     */
    protected $thumb800;
    /**
     * 
     *
     * @var int
     */
    protected $thumb800H;
    /**
     * 
     *
     * @var int
     */
    protected $thumb800W;
    /**
     * 
     *
     * @var string
     */
    protected $thumb960;
    /**
     * 
     *
     * @var int
     */
    protected $thumb960H;
    /**
     * 
     *
     * @var int
     */
    protected $thumb960W;
    /**
     * 
     *
     * @var string
     */
    protected $thumbTiny;
    /**
     * 
     *
     * @var int
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var int
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $urlPrivate;
    /**
     * 
     *
     * @var string
     */
    protected $urlPrivateDownload;
    /**
     * 
     *
     * @var string
     */
    protected $user;
    /**
     * 
     *
     * @var string
     */
    protected $userTeam;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @return string[]
     */
    public function getChannels() : array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param string[] $channels
     *
     * @return self
     */
    public function setChannels(array $channels) : self
    {
        $this->channels = $channels;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCommentsCount() : int
    {
        return $this->commentsCount;
    }
    /**
     * 
     *
     * @param int $commentsCount
     *
     * @return self
     */
    public function setCommentsCount(int $commentsCount) : self
    {
        $this->commentsCount = $commentsCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreated() : int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateDelete() : int
    {
        return $this->dateDelete;
    }
    /**
     * 
     *
     * @param int $dateDelete
     *
     * @return self
     */
    public function setDateDelete(int $dateDelete) : self
    {
        $this->dateDelete = $dateDelete;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisplayAsBot() : bool
    {
        return $this->displayAsBot;
    }
    /**
     * 
     *
     * @param bool $displayAsBot
     *
     * @return self
     */
    public function setDisplayAsBot(bool $displayAsBot) : self
    {
        $this->displayAsBot = $displayAsBot;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEditable() : bool
    {
        return $this->editable;
    }
    /**
     * 
     *
     * @param bool $editable
     *
     * @return self
     */
    public function setEditable(bool $editable) : self
    {
        $this->editable = $editable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEditor() : string
    {
        return $this->editor;
    }
    /**
     * 
     *
     * @param string $editor
     *
     * @return self
     */
    public function setEditor(string $editor) : self
    {
        $this->editor = $editor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalId() : string
    {
        return $this->externalId;
    }
    /**
     * 
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalType() : string
    {
        return $this->externalType;
    }
    /**
     * 
     *
     * @param string $externalType
     *
     * @return self
     */
    public function setExternalType(string $externalType) : self
    {
        $this->externalType = $externalType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalUrl() : string
    {
        return $this->externalUrl;
    }
    /**
     * 
     *
     * @param string $externalUrl
     *
     * @return self
     */
    public function setExternalUrl(string $externalUrl) : self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFiletype() : string
    {
        return $this->filetype;
    }
    /**
     * 
     *
     * @param string $filetype
     *
     * @return self
     */
    public function setFiletype(string $filetype) : self
    {
        $this->filetype = $filetype;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param string[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasRichPreview() : bool
    {
        return $this->hasRichPreview;
    }
    /**
     * 
     *
     * @param bool $hasRichPreview
     *
     * @return self
     */
    public function setHasRichPreview(bool $hasRichPreview) : self
    {
        $this->hasRichPreview = $hasRichPreview;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getImageExifRotation() : int
    {
        return $this->imageExifRotation;
    }
    /**
     * 
     *
     * @param int $imageExifRotation
     *
     * @return self
     */
    public function setImageExifRotation(int $imageExifRotation) : self
    {
        $this->imageExifRotation = $imageExifRotation;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getIms() : array
    {
        return $this->ims;
    }
    /**
     * 
     *
     * @param string[] $ims
     *
     * @return self
     */
    public function setIms(array $ims) : self
    {
        $this->ims = $ims;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsExternal() : bool
    {
        return $this->isExternal;
    }
    /**
     * 
     *
     * @param bool $isExternal
     *
     * @return self
     */
    public function setIsExternal(bool $isExternal) : self
    {
        $this->isExternal = $isExternal;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPublic() : bool
    {
        return $this->isPublic;
    }
    /**
     * 
     *
     * @param bool $isPublic
     *
     * @return self
     */
    public function setIsPublic(bool $isPublic) : self
    {
        $this->isPublic = $isPublic;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsStarred() : bool
    {
        return $this->isStarred;
    }
    /**
     * 
     *
     * @param bool $isStarred
     *
     * @return self
     */
    public function setIsStarred(bool $isStarred) : self
    {
        $this->isStarred = $isStarred;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsTombstoned() : bool
    {
        return $this->isTombstoned;
    }
    /**
     * 
     *
     * @param bool $isTombstoned
     *
     * @return self
     */
    public function setIsTombstoned(bool $isTombstoned) : self
    {
        $this->isTombstoned = $isTombstoned;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastEditor() : string
    {
        return $this->lastEditor;
    }
    /**
     * 
     *
     * @param string $lastEditor
     *
     * @return self
     */
    public function setLastEditor(string $lastEditor) : self
    {
        $this->lastEditor = $lastEditor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMimetype() : string
    {
        return $this->mimetype;
    }
    /**
     * 
     *
     * @param string $mimetype
     *
     * @return self
     */
    public function setMimetype(string $mimetype) : self
    {
        $this->mimetype = $mimetype;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMode() : string
    {
        return $this->mode;
    }
    /**
     * 
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNonOwnerEditable() : bool
    {
        return $this->nonOwnerEditable;
    }
    /**
     * 
     *
     * @param bool $nonOwnerEditable
     *
     * @return self
     */
    public function setNonOwnerEditable(bool $nonOwnerEditable) : self
    {
        $this->nonOwnerEditable = $nonOwnerEditable;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumStars() : int
    {
        return $this->numStars;
    }
    /**
     * 
     *
     * @param int $numStars
     *
     * @return self
     */
    public function setNumStars(int $numStars) : self
    {
        $this->numStars = $numStars;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOriginalH() : int
    {
        return $this->originalH;
    }
    /**
     * 
     *
     * @param int $originalH
     *
     * @return self
     */
    public function setOriginalH(int $originalH) : self
    {
        $this->originalH = $originalH;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOriginalW() : int
    {
        return $this->originalW;
    }
    /**
     * 
     *
     * @param int $originalW
     *
     * @return self
     */
    public function setOriginalW(int $originalW) : self
    {
        $this->originalW = $originalW;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermalink() : string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string $permalink
     *
     * @return self
     */
    public function setPermalink(string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermalinkPublic() : string
    {
        return $this->permalinkPublic;
    }
    /**
     * 
     *
     * @param string $permalinkPublic
     *
     * @return self
     */
    public function setPermalinkPublic(string $permalinkPublic) : self
    {
        $this->permalinkPublic = $permalinkPublic;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPinnedInfo()
    {
        return $this->pinnedInfo;
    }
    /**
     * 
     *
     * @param mixed $pinnedInfo
     *
     * @return self
     */
    public function setPinnedInfo($pinnedInfo) : self
    {
        $this->pinnedInfo = $pinnedInfo;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPinnedTo() : array
    {
        return $this->pinnedTo;
    }
    /**
     * 
     *
     * @param string[] $pinnedTo
     *
     * @return self
     */
    public function setPinnedTo(array $pinnedTo) : self
    {
        $this->pinnedTo = $pinnedTo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrettyType() : string
    {
        return $this->prettyType;
    }
    /**
     * 
     *
     * @param string $prettyType
     *
     * @return self
     */
    public function setPrettyType(string $prettyType) : self
    {
        $this->prettyType = $prettyType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreview() : string
    {
        return $this->preview;
    }
    /**
     * 
     *
     * @param string $preview
     *
     * @return self
     */
    public function setPreview(string $preview) : self
    {
        $this->preview = $preview;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPublicUrlShared() : bool
    {
        return $this->publicUrlShared;
    }
    /**
     * 
     *
     * @param bool $publicUrlShared
     *
     * @return self
     */
    public function setPublicUrlShared(bool $publicUrlShared) : self
    {
        $this->publicUrlShared = $publicUrlShared;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsReaction[]
     */
    public function getReactions() : array
    {
        return $this->reactions;
    }
    /**
     * 
     *
     * @param ObjsReaction[] $reactions
     *
     * @return self
     */
    public function setReactions(array $reactions) : self
    {
        $this->reactions = $reactions;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFileShares
     */
    public function getShares() : ObjsFileShares
    {
        return $this->shares;
    }
    /**
     * 
     *
     * @param ObjsFileShares $shares
     *
     * @return self
     */
    public function setShares(ObjsFileShares $shares) : self
    {
        $this->shares = $shares;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceTeam() : string
    {
        return $this->sourceTeam;
    }
    /**
     * 
     *
     * @param string $sourceTeam
     *
     * @return self
     */
    public function setSourceTeam(string $sourceTeam) : self
    {
        $this->sourceTeam = $sourceTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb1024() : string
    {
        return $this->thumb1024;
    }
    /**
     * 
     *
     * @param string $thumb1024
     *
     * @return self
     */
    public function setThumb1024(string $thumb1024) : self
    {
        $this->thumb1024 = $thumb1024;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb1024H() : int
    {
        return $this->thumb1024H;
    }
    /**
     * 
     *
     * @param int $thumb1024H
     *
     * @return self
     */
    public function setThumb1024H(int $thumb1024H) : self
    {
        $this->thumb1024H = $thumb1024H;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb1024W() : int
    {
        return $this->thumb1024W;
    }
    /**
     * 
     *
     * @param int $thumb1024W
     *
     * @return self
     */
    public function setThumb1024W(int $thumb1024W) : self
    {
        $this->thumb1024W = $thumb1024W;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb160() : string
    {
        return $this->thumb160;
    }
    /**
     * 
     *
     * @param string $thumb160
     *
     * @return self
     */
    public function setThumb160(string $thumb160) : self
    {
        $this->thumb160 = $thumb160;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb360() : string
    {
        return $this->thumb360;
    }
    /**
     * 
     *
     * @param string $thumb360
     *
     * @return self
     */
    public function setThumb360(string $thumb360) : self
    {
        $this->thumb360 = $thumb360;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb360H() : int
    {
        return $this->thumb360H;
    }
    /**
     * 
     *
     * @param int $thumb360H
     *
     * @return self
     */
    public function setThumb360H(int $thumb360H) : self
    {
        $this->thumb360H = $thumb360H;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb360W() : int
    {
        return $this->thumb360W;
    }
    /**
     * 
     *
     * @param int $thumb360W
     *
     * @return self
     */
    public function setThumb360W(int $thumb360W) : self
    {
        $this->thumb360W = $thumb360W;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb480() : string
    {
        return $this->thumb480;
    }
    /**
     * 
     *
     * @param string $thumb480
     *
     * @return self
     */
    public function setThumb480(string $thumb480) : self
    {
        $this->thumb480 = $thumb480;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb480H() : int
    {
        return $this->thumb480H;
    }
    /**
     * 
     *
     * @param int $thumb480H
     *
     * @return self
     */
    public function setThumb480H(int $thumb480H) : self
    {
        $this->thumb480H = $thumb480H;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb480W() : int
    {
        return $this->thumb480W;
    }
    /**
     * 
     *
     * @param int $thumb480W
     *
     * @return self
     */
    public function setThumb480W(int $thumb480W) : self
    {
        $this->thumb480W = $thumb480W;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb64() : string
    {
        return $this->thumb64;
    }
    /**
     * 
     *
     * @param string $thumb64
     *
     * @return self
     */
    public function setThumb64(string $thumb64) : self
    {
        $this->thumb64 = $thumb64;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb720() : string
    {
        return $this->thumb720;
    }
    /**
     * 
     *
     * @param string $thumb720
     *
     * @return self
     */
    public function setThumb720(string $thumb720) : self
    {
        $this->thumb720 = $thumb720;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb720H() : int
    {
        return $this->thumb720H;
    }
    /**
     * 
     *
     * @param int $thumb720H
     *
     * @return self
     */
    public function setThumb720H(int $thumb720H) : self
    {
        $this->thumb720H = $thumb720H;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb720W() : int
    {
        return $this->thumb720W;
    }
    /**
     * 
     *
     * @param int $thumb720W
     *
     * @return self
     */
    public function setThumb720W(int $thumb720W) : self
    {
        $this->thumb720W = $thumb720W;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb80() : string
    {
        return $this->thumb80;
    }
    /**
     * 
     *
     * @param string $thumb80
     *
     * @return self
     */
    public function setThumb80(string $thumb80) : self
    {
        $this->thumb80 = $thumb80;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb800() : string
    {
        return $this->thumb800;
    }
    /**
     * 
     *
     * @param string $thumb800
     *
     * @return self
     */
    public function setThumb800(string $thumb800) : self
    {
        $this->thumb800 = $thumb800;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb800H() : int
    {
        return $this->thumb800H;
    }
    /**
     * 
     *
     * @param int $thumb800H
     *
     * @return self
     */
    public function setThumb800H(int $thumb800H) : self
    {
        $this->thumb800H = $thumb800H;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb800W() : int
    {
        return $this->thumb800W;
    }
    /**
     * 
     *
     * @param int $thumb800W
     *
     * @return self
     */
    public function setThumb800W(int $thumb800W) : self
    {
        $this->thumb800W = $thumb800W;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumb960() : string
    {
        return $this->thumb960;
    }
    /**
     * 
     *
     * @param string $thumb960
     *
     * @return self
     */
    public function setThumb960(string $thumb960) : self
    {
        $this->thumb960 = $thumb960;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb960H() : int
    {
        return $this->thumb960H;
    }
    /**
     * 
     *
     * @param int $thumb960H
     *
     * @return self
     */
    public function setThumb960H(int $thumb960H) : self
    {
        $this->thumb960H = $thumb960H;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThumb960W() : int
    {
        return $this->thumb960W;
    }
    /**
     * 
     *
     * @param int $thumb960W
     *
     * @return self
     */
    public function setThumb960W(int $thumb960W) : self
    {
        $this->thumb960W = $thumb960W;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThumbTiny() : string
    {
        return $this->thumbTiny;
    }
    /**
     * 
     *
     * @param string $thumbTiny
     *
     * @return self
     */
    public function setThumbTiny(string $thumbTiny) : self
    {
        $this->thumbTiny = $thumbTiny;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimestamp() : int
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(int $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpdated() : int
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param int $updated
     *
     * @return self
     */
    public function setUpdated(int $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrlPrivate() : string
    {
        return $this->urlPrivate;
    }
    /**
     * 
     *
     * @param string $urlPrivate
     *
     * @return self
     */
    public function setUrlPrivate(string $urlPrivate) : self
    {
        $this->urlPrivate = $urlPrivate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrlPrivateDownload() : string
    {
        return $this->urlPrivateDownload;
    }
    /**
     * 
     *
     * @param string $urlPrivateDownload
     *
     * @return self
     */
    public function setUrlPrivateDownload(string $urlPrivateDownload) : self
    {
        $this->urlPrivateDownload = $urlPrivateDownload;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserTeam() : string
    {
        return $this->userTeam;
    }
    /**
     * 
     *
     * @param string $userTeam
     *
     * @return self
     */
    public function setUserTeam(string $userTeam) : self
    {
        $this->userTeam = $userTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}