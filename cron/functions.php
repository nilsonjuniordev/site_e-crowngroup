<?php

    function slugify($text){
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, '-');
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // lowercase
        $text = strtolower($text);
            if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }



    function clean_num( $num ){
        $pos = strpos($num, '.');
        if($pos === false) { // it is integer number
            return $num;
        }else{ // it is decimal number
            return rtrim(rtrim($num, '0'), '.');
        }
    }