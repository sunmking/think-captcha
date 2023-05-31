<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace Sunmking\Captcha;

use Psr\SimpleCache\InvalidArgumentException;
use think\Response;

class CaptchaController
{
    /**
     * @throws InvalidArgumentException
     */
    public function index(Captcha $captcha, $config = null): Response
    {
        return $captcha->create($config);
    }

    /**
     * @throws InvalidArgumentException
     */
    public function api(Captcha $captcha, $config = null): Response
    {
        return $captcha->create($config,true);
    }
}
