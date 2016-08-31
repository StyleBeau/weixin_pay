<b>请直接查看app.php 文件</b>

<?php

require_once "../src/weixin_pay.class.php";

$parameter=array(
	'appid'=>'', //微信ID
    'appsecret'=>'', //微信密钥
    'mch_id'=>'', //微信商户ID
    'paykey'=>'', //微信商户密钥
	'debug'=>true, //是否开启调试模式。关闭调试模式后 报错 会输出到weixin_log.txt
);

$wxpay=new weixin_app_pay($parameter);

//统一下单   (使用微信SDK调起支付 )
//$re=$wxpay->unifiedorder('20150704100','测试app下单','0.01','http://xxxx.com/wap/notify/wx_notify');
//print_r($re);

//查询订单
//$re=$wxpay->orderquery(array('out_trade_no'=>'20150704100'));
//print_r($re);

//关闭订单
//$re=$wxpay->closeorder(array('out_trade_no'=>'20150704100'));
//print_r($re);


//申请退款
//$re=$wxpay->refund('20150701201','0.01','0.01',array('out_trade_no'=>'20150702100'));
//print_r($re);

//查询退款
//$re=$wxpay->refundquery(array('out_trade_no'=>'20150702100'));
//print_r($re);

//微信对账单
//$re=$wxpay->downloadbill('20160705');
//print_r($re);