<?php

namespace Abnermouke\PaymentsBuilder\Channels\Tencent\Platforms;


/**
 * 微信公众号支付
 * Class Mp
 * @package Abnermouke\PaymentsBuilder\Channels\Tencent\Platforms
 */
class Mp extends BasePlatform
{

    public function __construct($open_id, $channel)
    {
        dd($open_id, $channel);
    }

}
