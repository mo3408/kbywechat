<?php
// +----------------------------------------------------------------------
// | Captcha配置文件
// +----------------------------------------------------------------------

return [
    //验证码位数
    'length'   => 5,
    // 验证码字符集合
    'codeSet'  => '2345678abcdefhijkmnpqrstuvwxy',
    // 验证码过期时间
    'expire'   => 1800,
    // 是否使用中文验证码
    'useZh'    => false,
    // 是否使用算术验证码
    'math'     => false,
    // 是否使用背景图
    'useImgBg' => false,
    //验证码字符大小
    'fontSize' => 25,
    // 是否使用混淆曲线
    'useCurve' => true,
    //是否添加杂点
    'useNoise' => true,
    // 验证码字体 不设置则随机
    'fontttf'  => '',
    //背景颜色
    'bg'       => [243, 251, 254],
    // 验证码图片高度
    'imageH'   => 0,
    // 验证码图片宽度
    'imageW'   => 0,
    // 添加后台登录验证码设置
    'admin' => [
		'length'   => 5,
		'useCurve' => false,
		'codeSet'  => '123588689856823982698952818900358565866688228',
		'fontttf'  => '5.ttf',
    ],
    // 添加前台会员验证码设置
    'index' => [
		'length'   => 5,
		'useCurve' => true,
		'useZh'    => false,
		'codeSet'  => '12358868985682398269800281890035856586658228',
		'fontttf'  => '2.ttf',
    ],
];