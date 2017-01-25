<?php

session_start();

require_once('classes/lib/db.php');
require_once('classes/model/user.php');

if (!isset($_REQUEST['action'])){
    header('Location: /');
}

switch ($_REQUEST['action']) {

    case 'registration':
        $result = true;
        $errors = array();
        $data = $_REQUEST;

        if(!isset($data['email']) || !$data['email'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;
            $errors['registerEmail'] = 'Incorrect email';
        } else {
            if(User::getInstance()->checkExistUserByEmail($data['email'])) {
                $result = false;
                $errors['registerEmail'] = 'This e-mail already exists';
            }
        }

        if(!isset($data['password']) || !$data['password'] || mb_strlen($data['password']) < 5) {
            $result = false;
            $errors['registerPassword'] = 'The password must be at least 5 characters';
        }

        if(!isset($data['passwordCopy']) || !$data['passwordCopy'] || $data['password'] != $data['passwordCopy']) {
            $result = false;
            $errors['registerPasswordCopy'] = 'Passwords do not match';
        }

        if($result) {
            $user_id = User::getInstance()->addUser($data['email'],$data['password']);

            $hash = User::getInstance()->login($data['email'],$data['password']);

            if($hash) {
                setcookie('user_hash', $hash, time() + 60 * 60 * 24 * 30, '/');
            }
        }

        $data = array(
            'result' => $result,
            'errors' => $errors,
        );
        echo json_encode($data);
        die;

        break;

    case 'authorisation':
        $result = true;
        $errors = array();
        $data = $_REQUEST;

        if(!isset($data['email']) || !$data['email'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;
            $errors['loginEmail'] = 'Incorrect email';
        }

        if(!isset($data['password']) || !$data['password'] || mb_strlen($data['password']) < 5) {
            $result = false;
            $errors['loginPassword'] = 'The password must be at least 5 characters';
        }

        if($result) {
            $hash = User::getInstance()->login($data['email'],$data['password']);

            if($hash) {
                setcookie('user_hash', $hash, time()+60*60*24*30, '/');
            } else {
                $result = false;
                $errors['loginEmail'] = 'Email or Password incorrect';
            }
        }

        $data = array(
            'result' => $result,
            'errors' => $errors,
        );
        echo json_encode($data);
        die;

        break;
}