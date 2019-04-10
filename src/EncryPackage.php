<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019/4/9
 * Time: 13:46
 */

namespace Tmac\Encrypackages;


class EncryPackage
{
    public function __construct()
    {
        echo '123'.PHP_EOL;
    }
    
    /**
     * @param int $str
     * @return string
     * 
     */
    public static function hander(int $str):string
    {
        return md5($str);
    }
    
}