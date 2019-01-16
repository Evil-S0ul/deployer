<?php
/**
 * Created by PhpStorm.
 * User: ttt
 * Date: 2018/12/21
 * Time: 15:10
 */

return [
    'title' => 'Deployer',    //部署系统标题

    'deployer_log_file' => dirname(__DIR__) . '/runtime/logs/deployer-deployer-' . date('Y-m-d') . '.log',    //日志路径
    'server_log_file' => dirname(__DIR__) . '/runtime/logs/deployer-server-' . date('Y-m-d') . '.log',    //日志路径

    'secret_key' => 'uJXQQeEY2UjWqcsczJDukQBDQhWrWTNM',       //加密密钥 上线请修改！！

    'projects' => [   //发布项目列表
        'hiapp' => '嗨效客',
    ],

    'project_paths' => [   //项目在目标机器上的路径
        'hiapp' => '/data/www/hiapp',
    ],

    'servers' => [    //目标机器列表
        'prod-1' => 'http://193.112.142.45:8081',  //如果部署机器和目标机器在同一内网，建议使用内网地址
    ],

    'server_users' => [    //目标机器上执行用来git命令的用户
        'prod-1' => 'www-data',
    ],

    'current_server'=>'prod-1', //在目标机器部署代码时，指定下当前机器

    'users' => [ //管理员账号
        //以下两个示例账户 上线请删除或者修改！！
        'ttt'=>'$2y$10$RiwmQMvC2EWe8VMyiZcnaekFF4L79fiYk4w5qOM8X4Y29vx7ZYKZq',
        'alex'=>'$2y$10$wZMygCNWRUl8DPcZm20VX.r.F7hEp78gHirW89zMQxtrFTS4GtT0y',
    ],
];