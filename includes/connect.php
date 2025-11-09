<?php
    if (!defined('_HERO')){
        die ('Truy cập không hợp lệ');
    }

    // Kết nối DB
    try {
        if (class_exists('PDO')) {
            $option = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
            );

            $dns = _DRIVER.':host='._HOST.';dbname='._DB;

            $conn = new PDO ($dns, _USER, _PASS,$option);

        }
    } catch (Exception $ex) {
        require_once './modules/error/404.php';
    }
?>@