<?php
/**
 * Created by PhpStorm.
 * User: hanluoo
 * Date: 2023/11/01
 * Time: 18:07
 */

namespace Hanluoo\ThinkOss\Facade;

use Hanluoo\ThinkOss\ThinkOss;

/**
 * 对象存储工具类
 * @method array|bool|mixed localToOss(string $filePath = '', string $dir = 'DEFAULT') 本地文件上传到云存储
 * @method array|bool|mixed|string getImgPath($path, $timeout = 3600) 获取图片访问路径
 * @method bool|string getBucketByPath($path) 获取文件路径的存储桶
 * @method bool|string handleUrl($url) 获取文件路径
 * @method array|bool|mixed delete($path) 删除文件
 */
class Oss
{

    public static function __callStatic($method, $arguments)
    {
        $oss = new ThinkOss();
        return call_user_func_array(array($oss,$method), $arguments);
    }

}