# think-captcha

thinkphp6 验证码类库

> 基于官方修改  支持 redis、file、memcached、memcache、wincache 需要在 config/cache.php 里添加相应的配置

## 安装
> composer require sunmking/think-captcha



## 使用

### 在控制器中输出验证码

在控制器的操作方法中使用

~~~
public function captcha($id = '')
{
	return captcha($id);
}
~~~
然后注册对应的路由来输出验证码


### 模板里输出验证码

无需在路由文件里注册路由规则，安装完成后会自动注册 2 个验证码路由规则。

~~~
\think\facade\Route::get('captcha/apis/[:config]', "\\Sunmking\\Captcha\\CaptchaController@index");
\think\facade\Route::get('captcha/[:config]', "\\Sunmking\\Captcha\\CaptchaController@index");
~~~

可以执行以下命令查看

~~~
 php think route:list
~~~


然后就可以在模板文件中使用
~~~
<div>{:captcha_img()}</div>
~~~
或者
~~~
<div><img src="{:captcha_src()}" alt="captcha" /></div>
~~~
> 上面两种的最终效果是一样的


### 控制器里验证

使用TP的内置验证功能即可
~~~
$this->validate($data,[
    'captcha|验证码'=>'require|captcha'
]);
~~~
或者手动验证
~~~
if(!captcha_check($captcha)){
 //验证失败
};
~~~

## 前后端分离使用

### 配置

1、需要在 config/cache.php 里添加相应的配置
2、需要在 config/captcha.php 里添加相应的驱动

~~~
// session 默认
//redis、file、memcached、memcache、wincache
'driver' => 'session'
~~~

### 获取

请求以下接口获取 base64 图片和 uuid

~~~
\think\facade\Route::get('captcha/apis/[:config]', "\\Sunmking\\Captcha\\CaptchaController@index");
~~~


### 验证

if(!captcha_check($captcha,$uuid)){
//验证失败
};

> 如果驱动为 session uuid也可以不传

