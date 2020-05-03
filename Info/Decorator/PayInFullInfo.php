<?php

namespace fall1600\Package\Newebpay\Info\Decorator;

use fall1600\Package\Newebpay\Info\Info;

class PayInFullInfo extends Info
{
    /** @var Info */
    protected $info;

    /**
     * 設定是否啟用信用卡一次付清支付方式
     * @var bool
     */
    protected $isEnable;

    public function __construct(Info $info, bool $isEnable = true)
    {
        $this->info = $info;

        $this->isEnable = $isEnable;
    }

    public function getInfo()
    {
        return $this->info->getInfo() +
            [
                'CREDIT' => $this->isEnable? 1: 0,
            ];
    }
}
