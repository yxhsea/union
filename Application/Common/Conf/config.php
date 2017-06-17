<?php
return array(
    //'配置项'=>'配置值'
    //站点配置信息
    'system_title'      => '湘潭大学工会管理系统',

    //数据库配置信息
    'DB_TYPE'    => 'mysql',      //数据库类型
    'DB_HOST'    => 'localhost',  //服务器地址
    'DB_NAME'    => 'union',      //数据库名称
    'DB_USER'    => 'root',       //数据库用户名
    'DB_PWD'     => '1234',       //数据库密码
    'DB_PORT'    => '3306',       //数据库端口
    'DB_CHARSET' => 'utf8',       //字符集
    'DB_PREFIX'  => 'union_',     //数据库表前缀
    'DB_DEBUG'   =>  TRUE,        //数据库调试模式,开启后可以记录SQL日志

    'DB_PATH_NAME'=> 'Data',        //备份目录名称,主要是为了创建备份目录
    'DB_PATH'     => './Data/',     //数据库备份路径必须以 / 结尾；
    'DB_PART'     => '20971520',  //该值用于限制压缩后的分卷最大长度。单位：B；建议设置20M
    'DB_COMPRESS' => '1',         //压缩备份文件需要PHP环境支持gzopen,gzwrite函数        0:不压缩 1:启用压缩
    'DB_LEVEL'    => '9',         //压缩级别   1:普通   4:一般   9:最高

);