<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/bidding_strategy_status.proto

namespace Google\Ads\GoogleAds\V6\Enums\BiddingStrategyStatusEnum;

use UnexpectedValueException;

/**
 * The possible statuses of a BiddingStrategy.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.BiddingStrategyStatusEnum.BiddingStrategyStatus</code>
 */
class BiddingStrategyStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The bidding strategy is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * The bidding strategy is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    const REMOVED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
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
class_alias(BiddingStrategyStatus::class, \Google\Ads\GoogleAds\V6\Enums\BiddingStrategyStatusEnum_BiddingStrategyStatus::class);
