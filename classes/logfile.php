<?php
/**
 * Created by PhpStorm.
 * User: furs
 * Date: 6.6.17
 * Time: 12.13
 */
class LogFile {

    private $filename;

    private $path = '/logs/';

    function __construct($name = '') {
        $this->filename = $name.date('d_m_Y__H_i_s').'.log';

    }

    public function writeLog($message) {
        $f = fopen(dirname(__FILE__).$this->path.$this->filename, "a");

        fwrite($f, $message."\n");

        fclose($f);
    }

}