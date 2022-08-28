<?php

namespace Abnermouke\PaymentsBuilder\Channels\Tencent;

use Abnermouke\LaravelBuilder\Library\Currency\AmapLibrary;
use Abnermouke\PaymentsBuilder\Channels\BaseChannel;
use Abnermouke\PaymentsBuilder\Channels\Tencent\Platforms\Mp;

/**
 * 腾讯基础通道
 * Class Channel
 * @package Abnermouke\PaymentsBuilder\Channels\Tencent
 */
class Channel extends BaseChannel
{

    //支付配置（payments_builder）
    protected $configs = [];

    //设备IP
    protected $client_ip = '';

    /**
     * 构造函数
     * Channel constructor.
     * @param array $configs
     * @param string $ip
     */
    public function __construct($configs = [], $ip = '')
    {
        //设置设备IP
        $this->client_ip = $ip ? $ip : request()->getClientIp();
        //设置默认配置
        $this->configs = $configs ? $configs : $this->getConfigs();
    }

    /**
     * 动态获取配置信息
     * @Author Abnermouke <abnermouke@outlook.com>
     * @Originate in Abnermouke's MBP
     * @Time 2022-08-29 01:29:43
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    private function getConfigs()
    {
        //获取是否设置高的地图web服务API KEY
        $amap_web_server_api_key = config('project.amap_web_server_api_key', '');
        //整理默认配置
        $configs = config('payments_builder.tencent.default', []);
        //判断地址地区
        if ($amap_web_server_api_key && ($area_code_form_ip = (new AmapLibrary())->ip($this>$this->client_ip, $amap_web_server_api_key))) {
            //初始化行政区域
            $area_eight_regions = [
                'east' => [370000, 320000, 330000, 340000, 360000, 350000, 710000, 310000],     //华东：山东、江苏、浙江、安徽、江西、福建、台湾、上海
                'south' => [440000, 450000, 460000, 810000, 820000],                            //华南：广东、广西、海南、香港、澳门
                'central' => [410000, 420000, 430000],                                          //华中：湖南、湖北、河南
                'north' => [130000, 140000, 150000, 110000, 120000],                            //华北：河北、山西、内蒙古、北京、天津
                'northeast' => [210000, 220000, 230000],                                        //东北：辽宁、吉林、黑龙江
                'northwest' => [610000, 620000, 630000, 640000, 650000],                        //西北：甘肃、陕西、宁夏、青海、新疆
                'southwest' => [500000, 510000, 520000, 530000, 540000],                        //西南：四川、重庆、贵州、云南、西藏
            ];
            //循环各大区域
            foreach ($area_eight_regions as $region => $area_codes) {
                //判断是否在指定区域
                if (in_array((int)$area_code_form_ip, $area_codes)) {
                    //设置配置
                    $configs = config('payments_builder.tencent.'.$region, $configs);
                    //跳出循环
                    break;
                }
            }
        }
        //返回配置
        return $configs;
    }

    /**
     * 构建微信公众号支付实例
     * @Author Abnermouke <abnermouke@outlook.com>
     * @Originate in Abnermouke's MBP
     * @Time 2022-08-29 01:34:09
     * @param $open_id
     * @return Mp
     */
    public function mp($open_id)
    {
        //返回操作实例
        return new Mp($open_id, $this);
    }

    public function mini_program($open_id)
    {

    }

    public function app($open_id)
    {

    }


}
