<?php

//第一种引入方式
//require_once "common/function.php";
//echo md_sha("lzc")."\n";

//第二种 改变composer.json 引入单个文件
//require_once "vendor/autoload.php";
//echo md_sha("lzc")."\n";


//第三种 改变composer.json 引入文件夹
require_once "vendor/autoload.php";

\App\Home\indexController::index();
\App\Home\userController::index();
