<?php

namespace fall1600\Package\Newebpay\Constants\Period;

class VersionType
{
    /**
     * 帶入 1.1 版本,則[背面末三碼]將為非必填
     */
    public const V1_1 = '1.1';

    /**
     * 帶入 1.0 版本,則[背面末三碼]將為必填欄位
     */
    public const V1_0 = '1.0';

    public const V1_5 = '1.5';

    public const V2_0 = '2.0';
}
