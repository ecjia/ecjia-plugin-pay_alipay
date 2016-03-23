<?php

RC_Loader::load_plugin_class('alipay_request', 'pay_alipay', false);
class alipay_request_web extends alipay_request {
    protected $alipay_gateway_new = 'https://mapi.alipay.com/gateway.do?';
    
    
    
}

// end