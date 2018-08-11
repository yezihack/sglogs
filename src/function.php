<?php
/**
 * Created by PhpStorm.
 * User: wangzl
 * Date: 2018/8/11
 * Time: 下午4:12
 */
/**
 * 时光日志
 * User: sgfoot
 * Date: 2017/11/13
 * Time: 13:45
 */
if(!function_exists('sglogs')) {
    /**
     * @param $data mixed 任意数据类型
     * @param $flag string 标识
     * @param $isClear bool/string 清除数据,true/false/all
     */
    function sglogs($data, $flag, $isClear = false) {
        \Sgfoot\SgLogs::write($data, $flag, $isClear);
    }
}