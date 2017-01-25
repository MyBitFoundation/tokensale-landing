<?php

$config = [];

require_once(realpath(dirname(__FILE__)).'/../config/main.local.php');
require_once('simpleMysqli.php');

db::$setting = $config['db'];


class db {
    public static $setting;
	private static $link;

	public static function GetLink() {
		if(self::$link == null)
			self::connect();
		return self::$link;
	}

	static function connect() {
		self::$link = new simpleMysqli(self::$setting);
	}
	
	public static function SimpleMysqli() {
        $simpleMysqli = self::GetLink();
        return $simpleMysqli;
    }

}
