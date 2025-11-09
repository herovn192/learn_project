<?php
    if (!defined('_HERO')){
        die ('Truy cập không hợp lệ');
    }

    function getAll($sql) {
        global $conn;

        $stm = $conn -> prepare($sql);
        
        $stm -> execute(); 
        
        $result = $stm -> fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }





?>