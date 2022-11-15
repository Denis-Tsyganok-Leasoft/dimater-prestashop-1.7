<?php
namespace Lib\components;


class GingerBankConfig
{

    const GINGER_BANK_LABELS = [
        'dimater' => 'Library',
        'klarna-pay-later' => 'Klarna Pay Later',
        'klarna-pay-now' => 'Klarna Pay Now',
        'paynow' => 'Pay Now',
        'apple-pay' => 'Apple Pay',
        'ideal' => 'iDEAL',
        'afterpay' => 'Afterpay',
        'amex' => 'American Express',
        'bancontact' => 'Bancontact',
        'bank-transfer' => 'Bank Transfer',
        'credit-card' => 'Credit Card',
        'paypal' => 'PayPal',
        'wechat' => 'WeChat',
        'payconiq' => 'Payconiq',
        'tikkie-payment-request' => 'Tikkie Payment Request',
        'sofort' => 'Sofort',
        'klarna-direct-debit' => 'Klarna Direct Debit',
        'google-pay' => 'Google Pay'
    ];

    const PLUGIN_NAME = 'dimater-prestashop-1.7';
    const BANK_LABEL = 'Dimater Payments';
    const BANK_PREFIX = 'dimater';
    const GINGER_BANK_ENDPOINT = 'https://api.paygate.dipaygo.cloud/';

}