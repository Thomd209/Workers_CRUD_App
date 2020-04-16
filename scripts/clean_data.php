<?php 
    function clean_data($string) {
        $string = strip_tags($string);
        $string = trim($string);
        return $string;
    }
?>