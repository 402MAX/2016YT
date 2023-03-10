<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: innertube/request/search_request_params.proto

namespace Com\Youtube\Innertube\Request\SearchRequestParams;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.youtube.innertube.request.SearchRequestParams.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.UploadDate upload_date = 1;</code>
     */
    protected $upload_date = null;
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.Type type = 2;</code>
     */
    protected $type = null;
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.Duration duration = 3;</code>
     */
    protected $duration = null;
    /**
     * Generated from protobuf field <code>optional bool hd = 4;</code>
     */
    protected $hd = null;
    /**
     * Generated from protobuf field <code>optional bool subtitles = 5;</code>
     */
    protected $subtitles = null;
    /**
     * Generated from protobuf field <code>optional bool creative_commons = 6;</code>
     */
    protected $creative_commons = null;
    /**
     * Generated from protobuf field <code>optional bool three_d = 7;</code>
     */
    protected $three_d = null;
    /**
     * Generated from protobuf field <code>optional bool live = 8;</code>
     */
    protected $live = null;
    /**
     * Generated from protobuf field <code>optional bool purchased = 9;</code>
     */
    protected $purchased = null;
    /**
     * Generated from protobuf field <code>optional bool four_k = 14;</code>
     */
    protected $four_k = null;
    /**
     * Generated from protobuf field <code>optional bool three_sixty_degrees = 15;</code>
     */
    protected $three_sixty_degrees = null;
    /**
     * Generated from protobuf field <code>optional bool location = 23;</code>
     */
    protected $location = null;
    /**
     * Generated from protobuf field <code>optional bool hdr = 25;</code>
     */
    protected $hdr = null;
    /**
     * Generated from protobuf field <code>optional bool vr180 = 26;</code>
     */
    protected $vr180 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $upload_date
     *     @type int $type
     *     @type int $duration
     *     @type bool $hd
     *     @type bool $subtitles
     *     @type bool $creative_commons
     *     @type bool $three_d
     *     @type bool $live
     *     @type bool $purchased
     *     @type bool $four_k
     *     @type bool $three_sixty_degrees
     *     @type bool $location
     *     @type bool $hdr
     *     @type bool $vr180
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Innertube\Request\SearchRequestParams::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.UploadDate upload_date = 1;</code>
     * @return int
     */
    public function getUploadDate()
    {
        return isset($this->upload_date) ? $this->upload_date : 0;
    }

    public function hasUploadDate()
    {
        return isset($this->upload_date);
    }

    public function clearUploadDate()
    {
        unset($this->upload_date);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.UploadDate upload_date = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUploadDate($var)
    {
        GPBUtil::checkEnum($var, \Com\Youtube\Innertube\Request\SearchRequestParams\Filter\UploadDate::class);
        $this->upload_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Com\Youtube\Innertube\Request\SearchRequestParams\Filter\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.Duration duration = 3;</code>
     * @return int
     */
    public function getDuration()
    {
        return isset($this->duration) ? $this->duration : 0;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter.Duration duration = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkEnum($var, \Com\Youtube\Innertube\Request\SearchRequestParams\Filter\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool hd = 4;</code>
     * @return bool
     */
    public function getHd()
    {
        return isset($this->hd) ? $this->hd : false;
    }

    public function hasHd()
    {
        return isset($this->hd);
    }

    public function clearHd()
    {
        unset($this->hd);
    }

    /**
     * Generated from protobuf field <code>optional bool hd = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setHd($var)
    {
        GPBUtil::checkBool($var);
        $this->hd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool subtitles = 5;</code>
     * @return bool
     */
    public function getSubtitles()
    {
        return isset($this->subtitles) ? $this->subtitles : false;
    }

    public function hasSubtitles()
    {
        return isset($this->subtitles);
    }

    public function clearSubtitles()
    {
        unset($this->subtitles);
    }

    /**
     * Generated from protobuf field <code>optional bool subtitles = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSubtitles($var)
    {
        GPBUtil::checkBool($var);
        $this->subtitles = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool creative_commons = 6;</code>
     * @return bool
     */
    public function getCreativeCommons()
    {
        return isset($this->creative_commons) ? $this->creative_commons : false;
    }

    public function hasCreativeCommons()
    {
        return isset($this->creative_commons);
    }

    public function clearCreativeCommons()
    {
        unset($this->creative_commons);
    }

    /**
     * Generated from protobuf field <code>optional bool creative_commons = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCreativeCommons($var)
    {
        GPBUtil::checkBool($var);
        $this->creative_commons = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool three_d = 7;</code>
     * @return bool
     */
    public function getThreeD()
    {
        return isset($this->three_d) ? $this->three_d : false;
    }

    public function hasThreeD()
    {
        return isset($this->three_d);
    }

    public function clearThreeD()
    {
        unset($this->three_d);
    }

    /**
     * Generated from protobuf field <code>optional bool three_d = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setThreeD($var)
    {
        GPBUtil::checkBool($var);
        $this->three_d = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool live = 8;</code>
     * @return bool
     */
    public function getLive()
    {
        return isset($this->live) ? $this->live : false;
    }

    public function hasLive()
    {
        return isset($this->live);
    }

    public function clearLive()
    {
        unset($this->live);
    }

    /**
     * Generated from protobuf field <code>optional bool live = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setLive($var)
    {
        GPBUtil::checkBool($var);
        $this->live = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool purchased = 9;</code>
     * @return bool
     */
    public function getPurchased()
    {
        return isset($this->purchased) ? $this->purchased : false;
    }

    public function hasPurchased()
    {
        return isset($this->purchased);
    }

    public function clearPurchased()
    {
        unset($this->purchased);
    }

    /**
     * Generated from protobuf field <code>optional bool purchased = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setPurchased($var)
    {
        GPBUtil::checkBool($var);
        $this->purchased = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool four_k = 14;</code>
     * @return bool
     */
    public function getFourK()
    {
        return isset($this->four_k) ? $this->four_k : false;
    }

    public function hasFourK()
    {
        return isset($this->four_k);
    }

    public function clearFourK()
    {
        unset($this->four_k);
    }

    /**
     * Generated from protobuf field <code>optional bool four_k = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setFourK($var)
    {
        GPBUtil::checkBool($var);
        $this->four_k = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool three_sixty_degrees = 15;</code>
     * @return bool
     */
    public function getThreeSixtyDegrees()
    {
        return isset($this->three_sixty_degrees) ? $this->three_sixty_degrees : false;
    }

    public function hasThreeSixtyDegrees()
    {
        return isset($this->three_sixty_degrees);
    }

    public function clearThreeSixtyDegrees()
    {
        unset($this->three_sixty_degrees);
    }

    /**
     * Generated from protobuf field <code>optional bool three_sixty_degrees = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setThreeSixtyDegrees($var)
    {
        GPBUtil::checkBool($var);
        $this->three_sixty_degrees = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool location = 23;</code>
     * @return bool
     */
    public function getLocation()
    {
        return isset($this->location) ? $this->location : false;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Generated from protobuf field <code>optional bool location = 23;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkBool($var);
        $this->location = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool hdr = 25;</code>
     * @return bool
     */
    public function getHdr()
    {
        return isset($this->hdr) ? $this->hdr : false;
    }

    public function hasHdr()
    {
        return isset($this->hdr);
    }

    public function clearHdr()
    {
        unset($this->hdr);
    }

    /**
     * Generated from protobuf field <code>optional bool hdr = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setHdr($var)
    {
        GPBUtil::checkBool($var);
        $this->hdr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool vr180 = 26;</code>
     * @return bool
     */
    public function getVr180()
    {
        return isset($this->vr180) ? $this->vr180 : false;
    }

    public function hasVr180()
    {
        return isset($this->vr180);
    }

    public function clearVr180()
    {
        unset($this->vr180);
    }

    /**
     * Generated from protobuf field <code>optional bool vr180 = 26;</code>
     * @param bool $var
     * @return $this
     */
    public function setVr180($var)
    {
        GPBUtil::checkBool($var);
        $this->vr180 = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Com\Youtube\Innertube\Request\SearchRequestParams_Filter::class);

