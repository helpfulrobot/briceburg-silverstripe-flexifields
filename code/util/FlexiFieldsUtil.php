<?php

/**
 * Utility functions for the FlexiFields module.
 */
class FlexiFieldsUtil
{
    public static function get_module_dir()
    {
        return basename(dirname(dirname(__DIR__)));
    }

    public static function css(Array $cssFiles)
    {
        $moduleDir = self::get_module_dir();

        foreach($cssFiles as $file) {
            Requirements::css($moduleDir . '/css/' . $file);
        }
    }


    public static function js(Array $jsFiles)
    {
        $moduleDir = self::get_module_dir();

        foreach($jsFiles as $file) {
            Requirements::javascript($moduleDir . '/js/' . $file);
        }
    }
}
