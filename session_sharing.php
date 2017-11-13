<?php
/**
 *  @Author: richard 
 *  @Description：session 入库共享
 */

// 设置session存储路径
ini_set('session.save_handler', 'memcache');
ini_set('session.save_path', 'tcp://127.0.0.1:11211');
// 开启session
session_start();
// 存储数据到session
$_SESSION['username'] = 'foo';
// 读取session
echo $_SESSION['username'];