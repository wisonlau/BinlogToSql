<?php
/**
 * User: wisonlau
 * Date: 2017/12/4
 * Time: 上午10:45
 */

namespace BinlogToSql;

/**
 * Class Util
 * @package BinlogToSql
 */
class Util
{

    /**
     * @param array $params
     */
    public static function console(array $params)
    {
        $print = date('Y-m-d H:i:s') . "\t";
        array_map(function ($v) use (&$print) {
            $print .= $v . " ";
        }, $params);
        echo $print;
    }

    /**
     *
     */
    public static function dd()
    {
        self::console(func_get_args());
        die(1);
    }

    /**
     * @param $file
     * @return mixed
     */
    public static function getFile($file)
    {
        if (!is_file($file)) {
            fopen($file, 'w') || self::dd('created failed');
        }
        is_writable($file) || chmod($file, 0666);
        return $file;
    }
}