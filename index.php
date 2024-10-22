<?php

    session_start();

    require_once 'classes/common.php';

    if(isset($_GET['ln'])) {
        t::getInstance()->setLang($_GET['ln']);

        $redirect = Common::getInstance()->http();
        if(isset($_SERVER['HTTP_REFERER']))
            $redirect = $_SERVER['HTTP_REFERER'];

        header("Location: ".$redirect);
        die();
    }

    if(!$_SESSION['country_code']) {
        $country_code = Common::getInstance()->getCountryByIp($_SERVER['REMOTE_ADDR']);
        $_SESSION['country_code'] = $country_code;
    } else
        $country_code = $_SESSION['country_code'];

    $uri = parse_url($_SERVER['REQUEST_URI']);
    $uri = substr($uri['path'], 1);

    $list_uri = array(
        'tokensale' => array(
            'wrapper_class' => 'page__tokensale fix_footer'
        )
    );

    $wrapper_class = '';

    $referral_key = '';
    if(isset($_SESSION['ref']))
        $referral_key = $_SESSION['ref'];

    if(isset($_GET['ref']) && $_GET['ref']) {
        $_SESSION['ref'] = $_GET['ref'];
        $referral_key = $_GET['ref'];
    }

    if($uri) {
        if(!isset($list_uri[$uri])) {
            header("HTTP/1.0 404 Not Found");
            header("HTTP/1.1 404 Not Found");
            header("Status: 404 Not Found");
            $content = '404';
            $wrapper_class = 'page__notFound fix_footer';
        } else {
            $content = $uri;
            $wrapper_class = Common::getInstance()->getWrapperClass($list_uri[$uri]);
        }
    } else {
        $content = 'index';
    }

    $path_whitepaper = '/docs/MyBit_Whitepaper_v0.13.pdf';

    include_once 'classes/templates/main.php';
