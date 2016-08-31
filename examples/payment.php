<b>请直接查看payment.php 文件</b>

<?php

require_once "../src/weixin_pay.class.php";

$parameter=array(
	'appid'=>'', //微信ID
    'appsecret'=>'', //微信密钥
    'mch_id'=>'', //微信商户ID
    'paykey'=>'', //微信商户密钥
	'debug'=>true, //是否开启调试模式。关闭调试模式后 报错 会输出到weixin_log.txt
);

$wxpay=new weixin_payment($parameter);

//企业付款
//$re=$wxpay->transfers('oY8X0s9aYANqYI3ETXPnlKYcDS4o','20150712100',1,'提取现金');
//print_r($re);


//企业付款查询
//$re=$wxpay->gettransferinfo('20150712100');
//print_r($re);