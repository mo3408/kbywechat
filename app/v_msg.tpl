<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>系统提示_{$site ?: '快帮云建站'}</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
{if isset($url) && $url}<meta http-equiv="refresh" content="3;url='{$url|raw}'">{/if}
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<style>
#main{margin:50px auto 20px auto;width:600px;border:1px solid #f6f6f6;background:#fafafa;margin:100px auto;padding:10px;}
@media screen and (max-width:768px){#main{width:90%;}}
#main dl{background:#fff;border:1px solid #f0f0f0;margin:0;padding:10px;color:#999;}
#main dl dt{font:1rem/2rem 'Microsoft YaHei';border-bottom:1px solid #e8e8e8;;margin:0 auto;}
#main dl dd.msg{font:.9rem/3rem 'Microsoft YaHei';margin:10px 0 0 2rem; padding:0;}
#main dl dd.c{font:.8rem/2rem 'Microsoft YaHei';text-align:right;color:#999;}
</style>
</head>
<body>
<div id="main"><dl>
<dt>系统提示</dt>
<dd class="msg">{$msg}</dd>
<dd class="c">{$site ?: '快帮云建站'}</dd>
</dl>
</div>
</body>
</html>