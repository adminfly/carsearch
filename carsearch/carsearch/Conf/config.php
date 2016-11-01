<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'carsearchsmall',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PORT'               => '3307',        // 端口
//    'DB_PREFIX'             => 'carsearchsmall_',    // 数据库表前缀
	'DB_PREFIX'             => 'think_',    // 数据库表前缀
	//'HOST'                  => 'http://',          //服务器路径
	'LOAD_EXT_FILE'         => 'Tools',   //加载自定义的M
	'URL_MsODEL'             => 2,
    'URL_PATHINFO_DEPR'     => '/',       //pathinfo模式的连接符    
    'URL_HTML_SUFFIX'       => 'aspx',     //url伪静态
	'URL_CASE_INSENSITIVE'  => true,       //url大小写
);
?>