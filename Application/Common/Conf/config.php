<?php

$config =  array(

    //开发阶段 关闭字段缓存
    'DB_FIELDS_CACHE'       =>  false,

    // 开启字段类型验证
    'DB_FIELDTYPE_CHECK'=>true,
    'LOG_RECORD' => false,
    // 默认模块
    'MODULE_ALLOW_LIST' => array ('Ljq'),
    'DEFAULT_MODULE' => 'Ljq'


);


return $config;