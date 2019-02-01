<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/billing_setup.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A billing setup across Ads and Payments systems; an association between a
 * Payments account and an advertiser. A billing setup is specific to one
 * advertiser.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.BillingSetup</code>
 */
class BillingSetup extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the billing setup.
     * BillingSetup resource names have the form:
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    private $id = null;
    /**
     * The status of the billing setup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BillingSetupStatusEnum.BillingSetupStatus status = 3;</code>
     */
    private $status = 0;
    /**
     * The resource name of the Payments account associated with this billing
     * setup. Payments resource names have the form:
     * `customers/{customer_id}/paymentsAccounts/{payments_account_id}`
     * When setting up billing, this is used to signup with an existing Payments
     * account (and then payments_account_info should not be set).
     * When getting a billing setup, this and payments_account_info will be
     * populated.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account = 11;</code>
     */
    private $payments_account = null;
    /**
     * The Payments account information associated with this billing setup.
     * When setting up billing, this is used to signup with a new Payments account
     * (and then payments_account should not be set).
     * When getting a billing setup, this and payments_account will be
     * populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.BillingSetup.PaymentsAccountInfo payments_account_info = 12;</code>
     */
    private $payments_account_info = null;
    protected $start_time;
    protected $end_time;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the billing setup.
     *           BillingSetup resource names have the form:
     *           `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the billing setup.
     *     @type int $status
     *           The status of the billing setup.
     *     @type \Google\Protobuf\StringValue $payments_account
     *           The resource name of the Payments account associated with this billing
     *           setup. Payments resource names have the form:
     *           `customers/{customer_id}/paymentsAccounts/{payments_account_id}`
     *           When setting up billing, this is used to signup with an existing Payments
     *           account (and then payments_account_info should not be set).
     *           When getting a billing setup, this and payments_account_info will be
     *           populated.
     *     @type \Google\Ads\GoogleAds\V0\Resources\BillingSetup\PaymentsAccountInfo $payments_account_info
     *           The Payments account information associated with this billing setup.
     *           When setting up billing, this is used to signup with a new Payments account
     *           (and then payments_account should not be set).
     *           When getting a billing setup, this and payments_account will be
     *           populated.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           The start date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format. Only a
     *           future time is allowed.
     *     @type int $start_time_type
     *           The start time as a type. Only NOW is allowed.
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           The end date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
     *     @type int $end_time_type
     *           The end time as a type.  The only possible value is FOREVER.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\BillingSetup::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the billing setup.
     * BillingSetup resource names have the form:
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the billing setup.
     * BillingSetup resource names have the form:
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
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
     * The ID of the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
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
     * The status of the billing setup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BillingSetupStatusEnum.BillingSetupStatus status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the billing setup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BillingSetupStatusEnum.BillingSetupStatus status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\BillingSetupStatusEnum_BillingSetupStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The resource name of the Payments account associated with this billing
     * setup. Payments resource names have the form:
     * `customers/{customer_id}/paymentsAccounts/{payments_account_id}`
     * When setting up billing, this is used to signup with an existing Payments
     * account (and then payments_account_info should not be set).
     * When getting a billing setup, this and payments_account_info will be
     * populated.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsAccount()
    {
        return $this->payments_account;
    }

    /**
     * The resource name of the Payments account associated with this billing
     * setup. Payments resource names have the form:
     * `customers/{customer_id}/paymentsAccounts/{payments_account_id}`
     * When setting up billing, this is used to signup with an existing Payments
     * account (and then payments_account_info should not be set).
     * When getting a billing setup, this and payments_account_info will be
     * populated.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_account = $var;

        return $this;
    }

    /**
     * The Payments account information associated with this billing setup.
     * When setting up billing, this is used to signup with a new Payments account
     * (and then payments_account should not be set).
     * When getting a billing setup, this and payments_account will be
     * populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.BillingSetup.PaymentsAccountInfo payments_account_info = 12;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\BillingSetup\PaymentsAccountInfo
     */
    public function getPaymentsAccountInfo()
    {
        return $this->payments_account_info;
    }

    /**
     * The Payments account information associated with this billing setup.
     * When setting up billing, this is used to signup with a new Payments account
     * (and then payments_account should not be set).
     * When getting a billing setup, this and payments_account will be
     * populated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.BillingSetup.PaymentsAccountInfo payments_account_info = 12;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\BillingSetup\PaymentsAccountInfo $var
     * @return $this
     */
    public function setPaymentsAccountInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\BillingSetup_PaymentsAccountInfo::class);
        $this->payments_account_info = $var;

        return $this;
    }

    /**
     * The start date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format. Only a
     * future time is allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDateTime()
    {
        return $this->readOneof(9);
    }

    /**
     * The start date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format. Only a
     * future time is allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The start time as a type. Only NOW is allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.TimeTypeEnum.TimeType start_time_type = 10;</code>
     * @return int
     */
    public function getStartTimeType()
    {
        return $this->readOneof(10);
    }

    /**
     * The start time as a type. Only NOW is allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.TimeTypeEnum.TimeType start_time_type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStartTimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\TimeTypeEnum_TimeType::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The end date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 13;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDateTime()
    {
        return $this->readOneof(13);
    }

    /**
     * The end date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 13;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * The end time as a type.  The only possible value is FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.TimeTypeEnum.TimeType end_time_type = 14;</code>
     * @return int
     */
    public function getEndTimeType()
    {
        return $this->readOneof(14);
    }

    /**
     * The end time as a type.  The only possible value is FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.TimeTypeEnum.TimeType end_time_type = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\TimeTypeEnum_TimeType::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->whichOneof("start_time");
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->whichOneof("end_time");
    }

}

