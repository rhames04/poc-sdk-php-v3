<?php

namespace MercadoPago\Resources\Payment;

use MercadoPago\Net\MPResource;

class Payment extends MPResource
{
    public $id;

    public $acquirer;

    public $acquirer_reconciliation;

    public $site_id;

    public $sponsor_id;

    public $operation_type;

    public $order_id;

    public $order;

    public $binary_mode;

    public $external_reference;

    public $status;

    public $status_detail;

    public $store_id;

    public $taxes_amount;

    public $payment_type;

    public $date_created;

    public $last_modified;

    public $live_mode;

    public $date_last_updated;

    public $date_of_expiration;

    public $deduction_schema;

    public $date_approved;

    public $money_release_date;

    public $money_release_schema;

    public $currency_id;

    public $transaction_amount;

    public $transaction_amount_refunded;

    public $shipping_cost;

    public $total_paid_amount;

    public $finance_charge;

    public $net_received_amount;

    public $marketplace;

    public $marketplace_fee;

    public $reason;

    public $payer;

    public $collector;

    public $collector_id;

    public $counter_currency;

    public $payment_method_id;

    public $payment_type_id;

    public $pos_id;

    public $transaction_details;

    public $fee_details;

    public $differential_pricing_id;

    public $application_fee;

    public $authorization_code;

    public $capture;

    public $captured;

    public $card;

    public $call_for_authorize_id;

    public $statement_descriptor;

    public $refunds;

    public $shipping_amount;

    public $additional_info;

    public $campaign_id;

    public $coupon_amount;

    public $installments;

    public $token;

    public $description;

    public $notification_url;

    public $issuer_id;

    public $processing_mode;

    public $merchant_account_id;

    public $merchant_number;

    public $metadata;

    public $callback_url;

    public $amount_refunded;

    public $coupon_code;

    public $barcode;

    public $marketplace_owner;

    public $integrator_id;

    public $corporation_id;

    public $platform_id;

    public $charges_details;

    public $taxes;

    public $net_amount;

    public $point_of_interaction;

    public $payment_method_option_id;

    public $merchant_services;
}
