<?php
/**
 * ===========================================================================
 * 快帮云建站
 * Author: wangchao@kbyun.com
 * Copyright (c)2019-2023 www.kbyun.cn All rights reserved.
 * Licensed: 这不是一个自由软件，不允许对程序代码以任何形式任何目的的再发行
 * ---------------------------------------------------------------------------
 */

if (is_file($_SERVER["DOCUMENT_ROOT"] . $_SERVER["SCRIPT_NAME"])) {
    return false;
} else {
    $_SERVER["SCRIPT_FILENAME"] = __DIR__ . '/index.php';

    require __DIR__ . "/index.php";
}
