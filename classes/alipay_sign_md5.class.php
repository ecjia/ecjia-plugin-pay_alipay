<?php
/**
 * MD5加密
 */
RC_Loader::load_plugin_class('alipay_sign_interface', 'pay_alipay', false);
class alipay_sign_md5 implements alipay_sign_interface {
    
    public function sign($prestr, $key) {
        $prestr = $prestr . $key;
        return md5($prestr);
    }
    
    
    public function verify($prestr, $sign, $key) {
        $prestr = $prestr . $key;
        $mysgin = md5($prestr);
        
        if ($mysgin == $sign) {
            return true;
        } else {
            return false;
        }
    }
}

// end