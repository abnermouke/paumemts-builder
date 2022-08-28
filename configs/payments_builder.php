<?php

/**
 * Power by abnermouke/payments-builder.
 * User: Abnermouke <abnermouke@outlook.com>
 * Originate in YunniTec.
 */

return [

    //腾讯
    'tencent' => [

        //默认配置
        'default' => [

            // 公众号 APP_ID
            'mp_app_id' => '',

            // 小程序 APP_ID
            'mini_app_id' => '',

            // APP APP_ID
            'app_id' => '',

            // 微信支付分配的微信商户号
            'mch_id' => '',

            // 微信支付异步通知地址
            'notify_url' => '',

            // 微信支付签名秘钥
            'key' => '',

            // 客户端证书路径，退款、红包等需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
            'cert_client' => '',

            // 客户端秘钥路径，退款、红包等需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
            'cert_key' => '',

            // optional，默认 info；日志路径为：'/storage/logs/logger/payments_builder::wechat_office_account::logs/{date}.log'
            'log_alias' => 'payments_builder::wechat_office_account::logs',

        ],

        //分区支付，可配置全国7大区使用不同商户主体进行支付，无匹配区域使用默认配置，内部配置内容与default保持一致
//
//            //华东：山东、江苏、浙江、安徽、江西、福建、台湾、上海
//            'east' => ['app_id' => '', 'mch_id' => '', 'notify_url' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'login_alias' => 'payments_builder::wechat_office_account::logs'],
//
//            //华南：广东、广西、海南、香港、澳门
//            'south' => ['app_id' => '', 'mch_id' => '', 'notify_url' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'login_alias' => 'payments_builder::wechat_office_account::logs'],
//
//            //华中：湖南、湖北、河南
//            'central' => ['app_id' => '', 'mch_id' => '', 'notify_url' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'login_alias' => 'payments_builder::wechat_office_account::logs'],
//
//            //华北：河北、山西、内蒙古、北京、天津
//            'north' => ['app_id' => '', 'mch_id' => '', 'notify_url' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'login_alias' => 'payments_builder::wechat_office_account::logs'],
//
//            //东北：辽宁、吉林、黑龙江
//            'northeast' => ['app_id' => '', 'mch_id' => '', 'notify_url' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'login_alias' => 'payments_builder::wechat_office_account::logs'],
//
//            //西北：甘肃、陕西、宁夏、青海、新疆
//            'northwest' => ['app_id' => '', 'mch_id' => '', 'notify_url' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'login_alias' => 'payments_builder::wechat_office_account::logs'],
//
//            //西南：四川、重庆、贵州、云南、西藏
//            'southwest' => ['app_id' => '', 'mch_id' => '', 'notify_url' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'login_alias' => 'payments_builder::wechat_office_account::logs'],

    ],

    //银联商务
    'chinaums' => [

        // 授权APPID
        'app_id' => '',

        //授权密钥
        'app_key' => '',

        //支付分配来源（msgSrcId）
        'source_alias' => '12E8',

        //消息来源（msgSrc）
        'message_source' => '',

        // 商户号
        'mch_id' => '',

        // 终端号
        't_id' => '',

        // md5密钥
        'md5_secret' => '',

        //业务类型（instMid）
        'instMid' => '',

        // optional，默认 info；日志路径为：'/storage/logs/logger/payments_builder::wechat_office_account::logs/{date}.log'
        'log_alias' => 'payments_builder::chinaums::logs',
    ],





];
