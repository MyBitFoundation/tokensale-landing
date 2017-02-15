<?php

session_start();

require_once('classes/lib/db.php');
require_once('classes/common.php');
require_once('classes/model/user.php');

if (!isset($_REQUEST['action'])){
    header('Location: /');
}

$response   = array();
$result     = true;
$errors     = array();
$data       = $_REQUEST;

switch ($_REQUEST['action']) {

    case 'registration':
        if(!isset($data['email']) || !$data['email'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;
            $errors['registerEmail'] = 'Incorrect e-mail';
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

        $response = array(
            'result' => $result,
            'errors' => $errors,
        );

        break;

    case 'authorisation':
        if(!isset($data['email']) || !$data['email'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;
            $errors['loginEmail'] = 'Incorrect e-mail';
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
                $errors['loginEmail'] = 'E-mail or Password incorrect';
            }
        }

        $response = array(
            'result' => $result,
            'errors' => $errors,
        );


        break;

    case 'subscribe':
        if(!isset($data['email']) || !$data['email'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;
            $errors['email'] = 'Incorrect e-mail';
        }

        if($result) {
           $resultMailChimp = Common::getInstance()->subscribeMailChimp($data['email']);

            $response = array(
                'result' => $resultMailChimp['result'],
                'errors' => isset($resultMailChimp['error']) ? $resultMailChimp['error'] : '',
            );
        }

        break;

    case 'say_in_touch':

        if(!isset($data['email']) || !$data['email'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;
            $errors['email'] = 'Incorrect e-mail';
        }

        if($result) {
            $resultMailChimp = Common::getInstance()->sayInTouchMail($data['email'],isset($data['name']) ? $data['name'] : '', isset($data['reference']) ? $data['reference'] : '', isset($data['message']) ? $data['message'] : '' );
            $response = array(
                'result' => $resultMailChimp['result'],
                'errors' => isset($resultMailChimp['error']) ? $resultMailChimp['error'] : '',
            );
        }

        break;
}

echo json_encode($response);
die;