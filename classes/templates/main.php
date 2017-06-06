<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>MyBit</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/reset.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/icomoon.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/slick.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/jquery.scrollbar.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/style.css"/>
    <link rel="stylesheet" href="<?php echo Common::getInstance()->http(); ?>css/media.css"/>

    <script src="<?php echo Common::getInstance()->http(); ?>js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/device.min.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/wow.min.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/slick.min.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/jquery.scrollbar.min.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/config.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/common.js"></script>
    <script src="<?php echo Common::getInstance()->http(); ?>js/action.js"></script>

    <script>
        <?php if($country_code) : ?>
            Action.countryCode = '<?php echo $country_code; ?>';
        <?php endif; ?>
    </script>
</head>
<body>
<div class="wrapper <?php echo $wrapper_class; ?>">
    <div class="overlay"></div>
    <div class="header-mob bg">
        <a href="" class="btn-mobMenu hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </a>
    </div>
    <div class="mainNav__wrap">
        <div class="mainNav__in">
            <a href="<?php echo Common::getInstance()->http(); ?>" class="header__logo"><img src="/images/logo_black.svg" alt=""/></a>
            <ul class="mainNav__list">
                <li class="mainNav__item">
                    <a href="<?php echo Common::getInstance()->http(); ?>#aboutMybit" data-scroll="aboutMybit" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','About'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="<?php echo Common::getInstance()->http(); ?>#team" data-scroll="team" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Team'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="<?php echo Common::getInstance()->http(); ?>#community" data-scroll="community" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Community'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="<?php echo Common::getInstance()->http(); ?>#media" data-scroll="media" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Media'); ?></span><i class="icon-arrow_dropdown"></i></a>
                    <div class="mainNav__dropdown">
                        <ul>
                            <li>
                                <a href="<?php echo Common::getInstance()->http(); ?>#media" data-scroll="media" class="link btn_scroll"><?php echo t::message('global','Press'); ?></a>
                            </li>
                            <li>
                                <a href="https://medium.com/@MyBit_Blog" class="link" target="_blank"><?php echo t::message('global','Blog'); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mainNav__item">
                    <a href="<?php echo Common::getInstance()->http(); ?>#partnerships" class="mainNav__link btn_scroll" data-scroll="partnerships"><span class="title"><?php echo t::message('global','Partnerships'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="<?php echo Common::getInstance()->http(); ?>tokensale" class="mainNav__link"><span class="title"><?php echo t::message('global','Tokensale'); ?></span></a>
                </li>
            </ul>
            <div class="lang__wrap">
                <div class="dropdown__wrap">
                    <a href="javascript:;" class="dropdown__current"><?php echo t::getInstance()->getCurrentLang(); ?> <i class="icon-arrow_dropdown"></i></a>
                    <div class="dropdown__in">
                        <ul class="dropdown__list">
                            <?php foreach (t::getInstance()->languages as $key => $lang) : ?>
                                <li class="dropdown__item">
                                    <a href="<?php echo Common::getInstance()->http(); ?>?ln=<?php echo $key; ?>" class="dropdown__link"><?php echo $lang['title']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="<?php echo $path_whitepaper; ?>" class="btn btn-shadow yellow small btn-whitepaper" target="_blank"><span class="title"><?php echo t::message('global','Whitepaper'); ?></span></a>
        </div>
    </div>

    <?php
        if(isset($content))
            include_once 'content/'.$content.'.php';
    ?>

    <!-- Modal -->
    <div class="modal fade" id="modal-signIn" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo t::message('global','Welcome Back'); ?>!</h5>
                    <span class="desc"><?php echo t::message('global','Sign in with your login to continue'); ?></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signIn">
                        <div class="form__row">
                            <input type="email" name="email" class="input" placeholder="<?php echo t::message('global','Enter email'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="password" name="password" class="input" placeholder="<?php echo t::message('global','Your password'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="btn__row">
                            <a href="javascript:;" class="btn btn-shadow yellow send_login submit_event"><?php echo t::message('global','Login'); ?></a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--                   <a href="#" class="link">Forgot password?</a>-->
                    <!--                    <span class="hint">Don’t have an account? <a href="javascript:;" class="link" onclick="$('#modal-signIn').modal('hide'); $('#modal-signUp').modal('show');">Get started</a></span>-->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-signUp" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo t::message('global','Let’s Get Started'); ?>!</h5>
                    <span class="desc"><?php echo t::message('global','Sign in with your login to continue'); ?></span>
                    <span class="statusBox"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signUp">
                        <div class="form__row">
                            <input type="password" name="password" class="input" placeholder="<?php echo t::message('global','Your password'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="password" name="repeat_password" class="input" placeholder="<?php echo t::message('global','Repeat password'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="text" name="address" class="input" placeholder="<?php echo t::message('global','Ethereum address'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="btn__row">
                            <a href="javascript:;" data-text-send="<?php echo t::message('global','Sign up'); ?>" data-text-back="<?php echo t::message('global','Back'); ?>" class="btn btn-shadow yellow send_registration submit_event"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-2fa" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo t::message('global','Login'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-2fa">
                        <div class="form__row">
                            <input type="text" name="token" class="input" placeholder="6 Digit_Key"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="btn__row">
                            <a href="javascript:;" class="btn btn-shadow yellow send_2fa submit_event"><?php echo t::message('global','Submit'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-success" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo t::message('global','Thank you for registration'); ?>!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="btn__row" >
                        <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal" aria-label="Close"><?php echo t::message('global','ok'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="crowdfunding__milestones" class="modal fade" role="dialog">
        <div class="modal-dialog lg">
            <!-- Modal content-->
            <div class="modal-content white-bg">
                <img src="/images/tokenization_model/crowdfunding_milestones.png" width="100%">
            </div>

        </div>
    </div>
    <div id="crowdfunding__milestones__mobile" class="modal fade" role="dialog">
        <div class="modal-dialog lg">
            <!-- Modal content-->
            <div class="modal-content white-bg">
                <img src="/images/tokenization_model/crowdfunding_milestones_mobile.png" width="100%">
            </div>

        </div>
    </div>
    <div id="escrow__release__terms" class="modal fade" role="dialog">
        <div class="modal-dialog lg">
            <!-- Modal content-->
            <div class="modal-content white-bg">
                <img src="/images/tokenization_model/escrow_release.png" width="100%">
            </div>

        </div>
    </div>
    <div id="escrow__release__terms__mobile" class="modal fade" role="dialog">
        <div class="modal-dialog lg">
            <!-- Modal content-->
            <div class="modal-content white-bg">
                <img src="/images/tokenization_model/escrow_release_mobile.png" width="100%">
            </div>

        </div>
    </div>
    <div id="deal__sheet" class="modal fade" role="dialog">
        <div class="modal-dialog lg">
            <!-- Modal content-->
            <div class="modal-content white-bg">
                <img src="/images/tokenization_model/deal_sheet.png" width="100%">
            </div>

        </div>
    </div>

    <div class="modal fade" id="modal-askQuestion" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo t::message('global','Let’s Get Started'); ?>!</h5>
                    <span class="desc"><?php echo t::message('global','Sign in with your login to continue'); ?></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form__row">
                            <input type="text" name="name" class="input" placeholder="<?php echo t::message('global','Enter name'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="email" name="email" class="input" placeholder="<?php echo t::message('global','Enter email'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="text" name="reference" class="input" placeholder="<?php echo t::message('global','Please tell us what this is in reference to'); ?>"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <textarea name="message" class="scrollbar-outer textarea-scrollbar textarea" id="textarea-scrollbar_js"  placeholder="<?php echo t::message('global','Please describe your message here...'); ?>"></textarea>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="btn__row">
                            <a href="javascript:;" class="btn btn-shadow yellow send_question submit_event"><?php echo t::message('global','Ask Question'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-success-question" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo t::message('global','Thank you! We will contact you shortly.'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="btn__row" >
                        <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal" aria-label="Close"><?php echo t::message('global','ok'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-disabled-dashboard" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo t::message('global','Sorry, the TokenSale is unavailable to individuals from your country.'); ?></h5>
                </div>
                <div class="modal-body">
                    <div class="btn__row" >
                        <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal" aria-label="Close"><?php echo t::message('global','Return to website'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<footer class="footer">
    <div class="container wow animated fadeInUp" data-wow-offset="50">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <h2 class="h4"><?php echo t::message('global','Get Updates'); ?></h2>
                <form class="form form__updates_js form__updatesFooter form_subscribe">
                    <div class="form__row "> <!--add class error-->
                        <div class="btn-success">
                            <span class="icon"><i class="icon-check"></i></span>
                            <span class="text"><?php echo t::message('global','Success'); ?></span>
                            <span class="text-submit"><?php echo t::message('global','Submit'); ?></span>
                            <span class="spinner">
                                   <svg width="44" height="44">
                                       <circle r="20.5" cx="22" cy="22" />
                                   </svg>
                              </span>
                        </div>
                        <div class="input__wrap">
                            <input type="email" name="email" placeholder="<?php echo t::message('global','Enter email'); ?>" class="input">
                            <a href="javascript:;" class="btn__inInput btn_subscribe submit_event"><?php echo t::message('global','Submit'); ?></a>
                        </div>
                        <span class="form__errorTxt"></span>
                        <span class="form__hint"><?php echo t::message('global','You’re almost done! Please check your email to confirm your subscription.'); ?></span>
                    </div>
                </form>
                <div class="soc__wrap">
                    <ul class="soc__list">
                        <li class="soc__item">
                            <a href="https://www.facebook.com/MyBitDApp/" class="soc__link circle " target="_blank"><i class="icon-fb"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://twitter.com/MyBit_DApp" class="soc__link circle" target="_blank"><i class="icon-twitter"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://t.me/mybit_dapp" class="soc__link circle" target="_blank"><i class="icon-telegram"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://www.reddit.com/user/MyBit_DApp/" class="soc__link circle" target="_blank"><i class="icon-redit"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://slack.mybit.io/" class="soc__link circle" target="_blank"><i class="icon-slack"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://www.youtube.com/channel/UCtLn7Vi-3VbsY5F9uF1RJYg" class="soc__link circle" target="_blank"><i class="icon-youtube"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://bitcointalk.org/index.php?topic=1797720.0" class="soc__link circle" target="_blank"><i class="icon-bitcointalk"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://medium.com/@MyBit_Blog" class="soc__link circle" target="_blank"><i class="icon-medium"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="http://weixin.qq.com/r/ystywajet1xiruyj95hy" class="soc__link circle" target="_blank"><i class="icon-wechat"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <h2 class="h4"><?php echo t::message('global','Resources'); ?></h2>
                <ul class="resources__list">
                    <li class="resources__item"><a href="https://www.fluidui.com/editor/live/livePreview/cF9YZTZ1NldrdGZSNkJ1bElUVG9UUFdPZkQ5YXJOdGZsTg==" target="_blank" class="resources__link"><?php echo t::message('global','Wireframes'); ?></a></li>
                    <li class="resources__item"><a href="#" class="resources__link"><?php echo t::message('global','Demo'); ?></a></li>
                    <li class="resources__item"><a href="https://www.facebook.com/vejdiven/videos/1344609518964148/" target="_blank" class="resources__link"><?php echo t::message('global','Presentation'); ?></a></li>
                    <li class="resources__item"><a href="https://app.xtensio.com/folio/9q93e8z3" target="_blank" class="resources__link"><?php echo t::message('global','One-Pager'); ?></a></li>
                    <li class="resources__item"><a href="#" class="resources__link"><?php echo t::message('global','Deal Sheet'); ?></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
                <div class="footer__download">
                    <a href="<?php echo $path_whitepaper; ?>" target="_blank" class="btn btn-progress btn-download_js">
                        <span class="progress" style="transition-duration: 4s"></span>
                        <span class="download-icon__wrap">
                                    <span class="download-icon__top">
                                        <i class="icon-download-top"></i>
                                    </span>
                                    <span class="line"></span>
                                    <span class="download-icon__btm">
                                        <i class="icon-download-btm"></i>
                                    </span>
                                </span>
                        <span class="download-icon__check"><i class="icon-check"></i></span>
                        <span class="title title_calm"><?php echo t::message('global','Download whitepaper'); ?></span>
                        <span class="title title_during"><?php echo t::message('global','Downloading'); ?> <span class="value">38</span>%</span>
                        <span class="title title_ready"><?php echo t::message('global','Downloaded'); ?></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__info">
            <span class="country"><?php echo t::message('global','Country of Incorporation'); ?>: <span><?php echo t::message('global','Switzerland'); ?></span></span>
            <a href="" class="btn-shadow"  data-toggle="modal" data-target="#modal-askQuestion"><span><?php echo t::message('global','Ask Question'); ?></span></a>
            <span class="copy"><?php echo t::message('global','Copyright'); ?> © MyBit <?php echo date('Y'); ?>. <span><?php echo t::message('global','All Rights Reserved'); ?></span></span>
        </div>
    </div>
</footer>

</body>
</html>