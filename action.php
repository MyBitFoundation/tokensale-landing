<?php

session_start();

require_once('classes/common.php');

if (!isset($_REQUEST['action'])){
    header('Location: /');
}

$response   = array();
$result     = true;
$errors     = array();
$data       = $_REQUEST;

switch ($_REQUEST['action']) {

    case 'subscribe':

        if(!isset($data['email']) || !$data['email'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;

            $response = array(
                'result' => $result,
                'errors' => t::message('global','Incorrect e-mail'),
            );
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

        if(!isset($data['g_recaptcha_response'])) {
            $result = false;
            $errors['g_recaptcha_response'] = 'Incorrect recaptcha';
        } else {
            $recapcha = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET."&response=".$data['g_recaptcha_response']."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);
            if (!$recapcha["success"]) {
                $result = false;
                $errors['g_recaptcha_response'] = 'Incorrect recaptcha';
            }
        }

        if($result) {
            $resultMailChimp = Common::getInstance()->sayInTouchMail($data['email'],isset($data['name']) ? $data['name'] : '', isset($data['reference']) ? $data['reference'] : '', isset($data['message']) ? $data['message'] : '' );
            $response = array(
                'result' => $resultMailChimp['result'],
                'r' => $resultMailChimp['r'],
                'errors' => isset($resultMailChimp['error']) ? $resultMailChimp['error'] : '',
            );
        } else {
            $response = array(
                'result' => $result,
                'errors' => $errors,
            );
        }


        break;
}

echo json_encode($response);
die;