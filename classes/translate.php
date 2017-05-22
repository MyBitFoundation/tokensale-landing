<?php
/**
 * Created by PhpStorm.
 * User: furs
 * Date: 17.4.17
 * Time: 17.36
 */
class t {

    const DEFAULT_LANG = 'en';
    const FOLDER_MESSAGE = 'messages';

    public $languages = array(
        'en' => array(
            'title' => 'En'
        ),
        'ch' => array(
            'title' => 'Ch'
        )
    );

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new self();
        }
        return $instance;
    }

    public function setLang($lang = self::DEFAULT_LANG) {
        if(!isset($this->languages[$lang]))
            $lang = self::DEFAULT_LANG;
        $_SESSION['lang'] = $lang;
        return $lang;
    }

    public function getCurrentLang() {
        if(isset($_SESSION['lang'])) {
            return $_SESSION['lang'];
        } else {
            return self::getInstance()->setLang();
        }
    }

    public static function message($category,$message) {
        $current_lang = self::getInstance()->getCurrentLang();
        $result = $message;

        if (!file_exists(__DIR__.'/'.self::FOLDER_MESSAGE.'/') || !file_exists(__DIR__.'/'.self::FOLDER_MESSAGE.'/'.$current_lang.'/'))
            return $result;

        if (!file_exists(__DIR__.'/'.self::FOLDER_MESSAGE.'/'.$current_lang.'/'.$category.'.php') )
            return $result;

        $messages = include __DIR__.'/'.self::FOLDER_MESSAGE.'/'.$current_lang.'/'.$category.'.php';

        if($messages && isset($messages[$message]))
            $result = $messages[$message];

        return $result;
    }


}