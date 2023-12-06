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
use think\facade\Db;
use think\Response;
use think\exception\HttpResponseException;
/**
 * 登录控制器抽象基类
 */
class Base
{
    /**
     * 空方法
     */ 
    // 初始化
    protected function wechat()
    {
		$data=Db::name('miniapp')->where(['user_id'=>1])->find();
	    return $data;
		
	}
}