<?php

namespace Abnermouke\PaymentsBuilder\Commands;

use Illuminate\Console\Command;

/**
 * Payments to build
 * Class PaymentsBuildCommand
 * @package Abnermouke\PaymentsBuilder\Commands
 */
class PaymentsBuildCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'builder:payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Payments Builder power by Abnermouke';


    /**
     * Payments to build
     * @Author Abnermouke <abnermouke@outlook.com>
     * @Originate in Abnermouke's MBP
     * @Time 2022-03-12 17:03:56
     * @return bool
     */
    public function handle()
    {
        //返回成功
        return true;
    }

}
