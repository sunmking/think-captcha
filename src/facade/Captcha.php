<?php

namespace sunmking\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package sunmking\captcha\facade
 * @mixin \sunmking\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \sunmking\captcha\Captcha::class;
    }
}
