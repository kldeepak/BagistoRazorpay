<?php

namespace ramlashkar\BagistoRazorpay\Payment;

use Webkul\Payment\Payment\Payment;

class BagistoRazorpay extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'bagistorazorpay';

    public function getRedirectUrl()
    {
        
    }
}