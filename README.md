# composer

## composer init 
- 配置解释 https://docs.phpcomposer.com/04-schema.html

## composer自动加载
- 原来的加载文件的方式：require、include、require_once、include_once、__autoload、spl_autoload_register

### 重点看autoload_namespaces.php、autoload_psr4.php

# 自动类引入单个文件
`

    "autoload": {
        "files":["common/function.php"]
    }
    
    composer dump
    
    require_once "vendor/autoload.php";

`

# 自动类引入文件夹
`

    "autoload": {
        "psr-4": {
                    "Lzc\\Demo\\": "src/",
                    "App\\Home\\": "app/home/"
                },
    }
    
    composer dump
    
    require_once "vendor/autoload.php";
    
    \App\Home\indexController::index();

`