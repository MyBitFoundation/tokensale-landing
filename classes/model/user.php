<?php

class User {

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new self();
        }
        return $instance;
    }

    public function addUser($email,$password) {
        db::simpleMysqli()->insert("INSERT INTO user(email,password)VALUES(?,?)",$email,md5($password));

        $info = db::simpleMysqli()->queryInfo;
        return $info['insert_id'];
    }

    public function checkExistUserByEmail($email) {
        $user = db::simpleMysqli()->select("SELECT * FROM user WHERE email = ?",$email);
        if($user)
            return true;

        return false;
    }

    public function getUserByHash($hash) {
        $user = db::simpleMysqli()->select("SELECT * FROM user WHERE hash = ?",$hash);
        if($user) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email,$password) {
        $user = db::simpleMysqli()->select("SELECT * FROM user WHERE email = ? AND password = ?",$email,md5($password));
        if($user) {
           $hash = md5($this->generateCode(10).time());

           db::simpleMysqli()->update("update user set hash = ? where id = ?",$hash,$user[0]['id']);

           return $hash;
        }


        return false;
    }

    public function generateCode($length=6) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
        }
        return $code;
    }
}