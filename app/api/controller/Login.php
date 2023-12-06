<?php
/**
 * ===========================================================================
 * 快帮云建站
 * Author: wangchao@kbyun.com
 * Copyright (c)2019-2023 www.kbyun.cn All rights reserved.
 * Licensed: 这不是一个自由软件，不允许对程序代码以任何形式任何目的的再发行
 * ---------------------------------------------------------------------------
 */
namespace app\api\controller;
use app\api\controller\Base;
use think\Response;
use EasyWeChat\MiniApp\Application;
use think\exception\HttpResponseException;
/**
 * 登录控制器抽象基类
 */
class Login extends Base
{
    public function index(){
	$info=$this->wechat();
	$config = [
	    'app_id' => $info['appid'],
	    'secret' => $info['appsecret'],
	    'token' => 'easywechat',
	    'aes_key' => '......',
	
	    /**
	     * 接口请求相关配置，超时时间等，具体可用参数请参考：
	     * https://github.com/symfony/symfony/blob/5.3/src/Symfony/Contracts/HttpClient/HttpClientInterface.php
	     */
	    'http' => [
	        'throw'  => true, // 状态码非 200、300 时是否抛出异常，默认为开启
	        'timeout' => 5.0,
	        // 'base_uri' => 'https://api.weixin.qq.com/', // 如果你在国外想要覆盖默认的 url 的时候才使用，根据不同的模块配置不同的 uri
	
	        'retry' => true, // 使用默认重试配置
	        //  'retry' => [
	        //      // 仅以下状态码重试
	        //      'http_codes' => [429, 500]
	        //       // 最大重试次数
	        //      'max_retries' => 3,
	        //      // 请求间隔 (毫秒)
	        //      'delay' => 1000,
	        //      // 如果设置，每次重试的等待时间都会增加这个系数
	        //      // (例如. 首次:1000ms; 第二次: 3 * 1000ms; etc.)
	        //      'multiplier' => 3
	        //  ],
	    ],
	];
	
	$app = new Application($config);
	$accessToken = $app->getAccessToken();
	$accessToken->getToken(); // string
	var_dump($accessToken);
	}

}