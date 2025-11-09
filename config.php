<?php

    /** HỆ THỐNG QUẢN LÝ KHÓA HỌC (6 bảng)
     * 
     * Users: 
     *  id int primary key
     *  fullname varchar 200
     *  email varrchar 100
     *  phone varchar 50
     *  address varchar 500
     *  forget_token varchar 500
     *  active_token varchar 500
     *  status int (1: da active, 0: chua active)
     *  permission text: id khóa học
     *  group_id int    => Bảng Group
     *  create_at datetime
     *  update_at datetime
     * 
     * Token_login
     *  id int primary key
     *  user_id int => bảng user
     *  token varchar 200
     *  create_at datetime
     *  update_at datetime
     * 
     * Course
     *  id int primary key
     *  name varchar 100
     *  slug varchar 100
     *  category_id int => Bảng categogy
     *  description text
     *  price int
     *  thumbnail varchar 300
     *  created_at datetime
     *  updated_at datetime
     *  
     * Course_Category
     *  id int primary key
     *  name varchar 100
     *  slug varchar 100
     *  created_at datetime
     *  updated_at datetime
     * 
     * Groups
     *  id int primary key
     *  name varchar 100
     *  created_at datetime
     *  updated_at datetime
     * 
     */

    const _HERO = true;

    const _MODULES = 'dashboard';
    const _ACTION = 'index';
    
    // Khai báo db
    const _HOST = 'localhost';
    const _DB =  'manager_hero';
    const _USER = 'root';
    const _PASS = '';
    const _DRIVER = 'mysql';

    // debug error
    const _DEBUG = true;

    // Thiet lap host
    define('_HOST_URL', 'http://'.$_SERVER['HTTP_HOST'].'/CRM');
    define('_HOST_URL_TEMPLATE', _HOST_URL.'/template');

    // Thiet lap path
    define('_PATH_URL', __DIR__);
    define('_PATH_URL_TEMPLATE', _PATH_URL.'/template');

    // echo _HOST_URL.'<br/>';
    // echo _HOST_URL_TEMPLATE.'<br/>';
    // echo _PATH_URL.'<br/>';
    // echo _PATH_URL_TEMPLATE.'<br/>';

    










?>