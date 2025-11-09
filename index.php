<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    session_start(); // Bắt đầu phiên làm việc
    ob_start(); // Tránh trường hợp bị lỗi khi sử dụng các hàm header, cookie
    require_once 'config.php';
    require_once './modules/auth/login.php';
    require_once './includes/connect.php';
    require_once './includes/database.php';

    // http://localhost:8080/CRM/?module=auth&action=login

    $rel = getAll("SELECT * FROM course");
    echo '<pre>';    
    print_r($rel);
    echo '</pre>';    

    $module = _MODULES;
    $action = _ACTION;

    if (!empty($_GET['module'])){
        $module = $_GET['module'];
    }

    if (!empty($_GET['action'])){
        $action = $_GET['action'];
    }

    $path = 'modules/' . $module . '/' . $action . '.php';
    if (!empty($path)) {
        if (file_exists($path)){
            require_once $path;
        } else {
            require_once './modules/error/404.php';
        }
    } else {
        require_once './modules/error/500.php';
    }
    
?>