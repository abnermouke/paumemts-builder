<?php

namespace Abnermouke\PaymentsBuilder;

use Abnermouke\PaymentsBuilder\Commands\PaymentsBuildCommand;
use Illuminate\Support\ServiceProvider;

class PaymentsServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //引入配置
        $this->app->singleton('command.builder.payments', function () {
            //返回实例
            return new PaymentsBuildCommand();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //发布配置文件
        $this->publishes([
            __DIR__.'../configs/payments_builder.php' => config_path('payments_builder.php'),
        ]);
        //注册配置
        $this->commands('command.builder.payments');
    }

}
