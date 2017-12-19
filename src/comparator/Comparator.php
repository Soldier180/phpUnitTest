<?php
/**
 * Created by PhpStorm.
 * User: Nikolion
 * Date: 19.12.2017
 * Time: 20:06
 */

class Comparator
{
    public static function isGreater($a, $b){
        return $a>$b?true:false;
    }
    /**
     * @codeCoverageIgnore
     */
    public static function isGreater1($a, $b){
        return $a>$b?true:false;
    }
    private static function isGreater2($a, $b){
        return $a>$b?true:false;
    }


}