<?php
    require_once('classes/lib/db.php');
    require_once('classes/model/user.php');

    if(isset($_COOKIE['user_hash']) && $_COOKIE['user_hash']) {
        if(!User::getInstance()->getUserByHash($_COOKIE['user_hash'])) {
            header('Location: /');
            die;
        }
    } else {
        header('Location: /');
        die;
    }

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>MyBit - Platform</title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/icomoon.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/media.css"/>
</head>
<body>
<div class="wrapper">
    <div class="section__logged">
        <div class="intro__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-0 col-sm-offset-1">
                        <div class="intro__logo">
                            <img src="images/logo_txt.png" alt="" class="logo-txt"/>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-0 col-sm-offset-1">
                        <div class="intro__info">
                            <h1 class="h1">Welcome <br/>
                                to the MyBit <br/>
                                portal</h1>
                            <span class="intro__desc">
                                You will be able to monitor activity, chat, and contribute in the near future.
                                <strong>Please check back soon!</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="google_translate_element"></div><script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>