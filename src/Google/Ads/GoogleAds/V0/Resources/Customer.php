<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/customer.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.Customer</code>
 */
class Customer extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     */
    private $descriptive_name = null;
    /**
     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     */
    private $currency_code = null;
    /**
     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     */
    private $time_zone = null;
    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     */
    private $tracking_url_template = null;
    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     */
    private $final_url_suffix = null;
    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     */
    private $auto_tagging_enabled = null;
    /**
     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     */
    private $has_partners_badge = null;
    /**
     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     */
    private $manager = null;
    /**
     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     */
    private $test_account = null;
    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.CallReportingSetting call_reporting_setting = 10;</code>
     */
    private $call_reporting_setting = null;
    /**
     * Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.ConversionTrackingSetting conversion_tracking_setting = 14;</code>
     */
    private $conversion_tracking_setting = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the customer.
     *           Customer resource names have the form:
     *           `customers/{customer_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the customer.
     *     @type \Google\Protobuf\StringValue $descriptive_name
     *           Optional, non-unique descriptive name of the customer.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           The currency in which the account operates.
     *           A subset of the currency codes from the ISO 4217 standard is
     *           supported.
     *     @type \Google\Protobuf\StringValue $time_zone
     *           The local timezone ID of the customer.
     *     @type \Google\Protobuf\StringValue $tracking_url_template
     *           The URL template for constructing a tracking URL out of parameters.
     *     @type \Google\Protobuf\StringValue $final_url_suffix
     *           The URL template for appending params to the final URL
     *     @type \Google\Protobuf\BoolValue $auto_tagging_enabled
     *           Whether auto-tagging is enabled for the customer.
     *     @type \Google\Protobuf\BoolValue $has_partners_badge
     *           Whether the Customer has a Partners program badge. If the Customer is not
     *           associated with the Partners program, this will be false. For more
     *           information, see https://support.google.com/partners/answer/3125774.
     *     @type \Google\Protobuf\BoolValue $manager
     *           Whether the customer is a manager.
     *     @type \Google\Protobuf\BoolValue $test_account
     *           Whether the customer is a test account.
     *     @type \Google\Ads\GoogleAds\V0\Resources\CallReportingSetting $call_reporting_setting
     *           Call reporting setting for a customer.
     *     @type \Google\Ads\GoogleAds\V0\Resources\ConversionTrackingSetting $conversion_tracking_setting
     *           Conversion tracking setting for a customer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescriptiveName()
    {
        return $this->descriptive_name;
    }

    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescriptiveName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->descriptive_name = $var;

        return $this;
    }

    /**
     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return $this->tracking_url_template;
    }

    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFinalUrlSuffix()
    {
        return $this->final_url_suffix;
    }

    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->final_url_suffix = $var;

        return $this;
    }

    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getAutoTaggingEnabled()
    {
        return $this->auto_tagging_enabled;
    }

    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAutoTaggingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->auto_tagging_enabled = $var;

        return $this;
    }

    /**
     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHasPartnersBadge()
    {
        return $this->has_partners_badge;
    }

    /**
     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHasPartnersBadge($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->has_partners_badge = $var;

        return $this;
    }

    /**
     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setManager($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->manager = $var;

        return $this;
    }

    /**
     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getTestAccount()
    {
        return $this->test_account;
    }

    /**
     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setTestAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->test_account = $var;

        return $this;
    }

    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.CallReportingSetting call_reporting_setting = 10;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\CallReportingSetting
     */
    public function getCallReportingSetting()
    {
        return $this->call_reporting_setting;
    }

    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.CallReportingSetting call_reporting_setting = 10;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\CallReportingSetting $var
     * @return $this
     */
    public function setCallReportingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\CallReportingSetting::class);
        $this->call_reporting_setting = $var;

        return $this;
    }

    /**
     * Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.ConversionTrackingSetting conversion_tracking_setting = 14;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\ConversionTrackingSetting
     */
    public function getConversionTrackingSetting()
    {
        return $this->conversion_tracking_setting;
    }

    /**
     * Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.ConversionTrackingSetting conversion_tracking_setting = 14;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\ConversionTrackingSetting $var
     * @return $this
     */
    public function setConversionTrackingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\ConversionTrackingSetting::class);
        $this->conversion_tracking_setting = $var;

        return $this;
    }

}

