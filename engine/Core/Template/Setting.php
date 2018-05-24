<?php


namespace Engine\Core\Template;

use Admin\Model\Setting\SettingRepository;
use Engine\DI\DI;

/**
 * Class Setting
 * @package  Engine\Core\Template
 */
class Setting
{
    protected static $di;

    protected static $settingRepository;

    public function __construct($di)
    {
        self::$di = $di;
        self::$settingRepository = new SettingRepository(self::$di);
    }


    /**
     * @param $keyField
     * @return null
     */
    public static function get($keyField)
    {
        return self::$settingRepository->getSettingValue($keyField);
    }



}