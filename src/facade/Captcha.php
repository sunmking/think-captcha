<?php

namespace Sunmking\Captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package sunmking\captcha\facade
 * @mixin \Sunmking\Captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \Sunmking\Captcha\Captcha::class;
    }
}
