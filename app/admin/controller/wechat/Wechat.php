<?php
/**
 * ===========================================================================
 * 快帮云建站
 * Author: wangchao@kbyun.com
 * Copyright (c)2019-2023 www.kbyun.cn All rights reserved.
 * Licensed: 这不是一个自由软件，不允许对程序代码以任何形式任何目的的再发行
 * ---------------------------------------------------------------------------
 */
namespace app\admin\controller\wechat;

use app\admin\controller\AdminBase;
use app\model\wechat\Wechat as WX;
use think\facade\Db;
/**
 * 微信小程序
 */
class Wechat extends AdminBase
{
	// 配置项
	public function index(){ 
		 if (request()->isPost()){
			 $data=input('post.');
			 $data['create_time']=time();
			 $data['user_id']=1;
			 $where['name']=$data['name'];
			 $where['appid']=$data['appid'];
			 $info=Db::name('miniapp')->where(['user_id'=>1])->update($data);
		    if($info){
				 return 1;
			 }else{
				 return 0;
			 } 
		 }
		 $havainfo=Db::name('miniapp')->where(['user_id'=>1])->find();
		 $this->assign('wxinfo',$havainfo);
		 return $this->fetch();
	}
	
}