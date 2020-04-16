<?php 
    //Функция, приводящая в порядок поле форм "имя"
    
    function clean_data($string) {
        $string = strip_tags($string);
        $string = trim($string);
        return $string;
    }
?>