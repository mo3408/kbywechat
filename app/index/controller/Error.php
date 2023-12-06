<?php
/**
 * ===========================================================================
 * 快帮云建站
 * Author: wangchao@kbyun.com
 * Copyright (c)2019-2023 www.kbyun.cn All rights reserved.
 * Licensed: 这不是一个自由软件，不允许对程序代码以任何形式任何目的的再发行
 * ---------------------------------------------------------------------------
 */
namespace app\index\controller;

use think\Response;
use think\exception\HttpResponseException;

/**
 * 控制器抽象基类
 */
class Error
{
    /**
     * 空方法
     */ 
    public function __call($method, $args){
        $re = Response::create(app()->getRootPath().'app/v_msg.tpl','view')->assign(['msg'=>'Controller does not exist!','site'=>vconfig('site_title')])->header();
        throw new HttpResponseException($re);
    }

}