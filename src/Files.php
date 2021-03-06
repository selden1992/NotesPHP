<?php
/**
 * Created by PhpStorm.
 * User: selden1992
 * Date: 2017/2/23
 * Time: 22:22
 */

namespace NotesPHP;


class Files
{
    /**
     * 写入文件
     *
     * @param $path
     * @param $string
     */
    public static function put($path,$string)
    {
        $dir = dirname($path);
        if(!is_dir($dir)){
            mkdir($dir,775,true);
        }
        file_put_contents($path,$string);
    }

    /**
     * 获取文件内容
     *
     * @param $path
     * @return string
     */
    public static function get($path)
    {
        if( file_exists($path) ){
            return file_get_contents($path);
        }
        return '';
    }
}