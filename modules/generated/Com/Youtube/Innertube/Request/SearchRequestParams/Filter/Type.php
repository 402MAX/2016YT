<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: innertube/request/search_request_params.proto

namespace Com\Youtube\Innertube\Request\SearchRequestParams\Filter;

use UnexpectedValueException;

/**
 * Protobuf type <code>com.youtube.innertube.request.SearchRequestParams.Filter.Type</code>
 */
class Type
{
    /**
     * Should not be used in place of video (1)
     *
     * Generated from protobuf enum <code>DEFAULT_TYPE = 0;</code>
     */
    const DEFAULT_TYPE = 0;
    /**
     * Generated from protobuf enum <code>VIDEO = 1;</code>
     */
    const VIDEO = 1;
    /**
     * Generated from protobuf enum <code>CHANNEL = 2;</code>
     */
    const CHANNEL = 2;
    /**
     * Generated from protobuf enum <code>PLAYLIST = 3;</code>
     */
    const PLAYLIST = 3;
    /**
     * Generated from protobuf enum <code>MOVIE = 4;</code>
     */
    const MOVIE = 4;

    private static $valueToName = [
        self::DEFAULT_TYPE => 'DEFAULT_TYPE',
        self::VIDEO => 'VIDEO',
        self::CHANNEL => 'CHANNEL',
        self::PLAYLIST => 'PLAYLIST',
        self::MOVIE => 'MOVIE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Com\Youtube\Innertube\Request\SearchRequestParams_Filter_Type::class);
