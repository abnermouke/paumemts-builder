<?php

namespace Abnermouke\PaymentsBuilder;

use Illuminate\Support\Str;

/**
 * 统一支付类
 * Class Payments
 * @method static \Abnermouke\PaymentsBuilder\Channels\Alibaba\Channel       alibaba(array $config, string $ip)
 * @method static \Abnermouke\PaymentsBuilder\Channels\Tencent\Channel       tencent(array $config, string $ip)
 * @method static \Abnermouke\PaymentsBuilder\Channels\Chinaums\Channel      chinaums(array $config, string $ip)
 * @method static \Abnermouke\PaymentsBuilder\Channels\Cmbchina\Channel      cmbchina(array $config, string $ip)
 * @package Abnermouke\PaymentsBuilder
 */
class Payments
{

    /**
     * 创建通道对象
     * @Author Abnermouke <abnermouke@outlook.com>
     * @Originate in Abnermouke's MBP
     * @Time 2022-08-29 00:27:59
     * @param $name string 支付通道（alibaba，tencent, chinaums，cmbchina）
     * @param array $config 支付参数
     * @return mixed
     */
    public static function make($name, array $config, string $ip)
    {
        //整理命名空间
        $namespace = Str::studly($name);
        //整理通道信息
        $channel = "\\Abnermouke\\Channels\\{$namespace}\\Channel";
        //创建对象
        return new $channel($config, $ip);
    }

}
