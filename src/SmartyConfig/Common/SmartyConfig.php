<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-jingkai-share-config/src/SmartyConfig/Jk',
            S_ROOT.'vendor/qixinyun/pingxiang-jingkai-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-jingkai-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
