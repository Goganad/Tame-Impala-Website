<?php
    function paintNumbers($str, $regex, bool $type){
        if ($type){
            $class = "'phone'";
        } else{
             $class = "'codePhone'";
        }
        $matches = array();
        if (preg_match_all($regex, $str, $matches) != false){
            foreach($matches[0] as $match){
                $str = str_replace($match, "<span class=$class>$match</span>", $str);
            }
            return $str;
        }
        else{
            return $str;
        }
     }                      
     //examples - 8(029)1232694, 8029123-34-56, 1234567, 123-02-22, 123 04 56
     $phoneRegex = "/(\b)(8(\(\d{3}\)|\d{3}))?\d{3}[\- ]?\d{2}[\- ]?\d{2}(\b)/";
     //examples - +375(29)1231294, +375331230694, +37544111-22-32
     $codePhoneRegex = "/\+375(\(\d{2}\)|\d{2})\d{3}[\- ]?\d{2}[\- ]?\d{2}(\b)/";

     if (isset($_GET["user_text"])){
         $str = $_GET["user_text"];
         $newStr = paintNumbers(paintNumbers($str, $codePhoneRegex, false), $phoneRegex, true);
         echo "<br>";
         echo $newStr;    
     }
 ?>