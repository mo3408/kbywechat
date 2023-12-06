<?php
/**
 * ===========================================================================
 * 快帮云建站
 * Author: wangchao@kbyun.com
 * Copyright (c)2019-2023 www.kbyun.cn All rights reserved.
 * Licensed: 这不是一个自由软件，不允许对程序代码以任何形式任何目的的再发行
 * ---------------------------------------------------------------------------
 */
namespace app\model\system;

use app\model\Base;

/**
 *【组织机构模型】
 */
class Organ extends Base
{
    /**
     * 获取所有子类ID串
     * @param  int   $id   ID
     * @return string
     */
    public static function getChild($id=0)
    {
        $id = abs($id);
        if($id>0){
            $rs = self::where("FIND_IN_SET($id,arrparentid)")->column('id');
            $rs[] = $id;
            $id = implode(',', $rs);
        }
        return $id;
    }

}