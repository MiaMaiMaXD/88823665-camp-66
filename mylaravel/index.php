<?php
/*
 * @Author: Nattapong Kamma Icezazarun@gmail.com
 * @Date: 2024-12-25 17:41:43
 * @LastEditors: Nattapong Kamma Icezazarun@gmail.com
 * @LastEditTime: 2024-12-25 17:42:29
 * @FilePath: \undefinedc:\XXXAP\htdocs\88823665-camp-66\mylaravel\index.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/bootstrap/app.php')
    ->handleRequest(Request::capture());
