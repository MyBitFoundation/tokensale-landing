<?php

    require_once 'classes/common.php';

    if(isset($_GET['ln'])) {
        t::getInstance()->setLang($_GET['ln']);
        header("Location: /");
        die();
    }

    $currentTime = time();
    $roadMapDays = array(
        strtotime('01-11-2016 12:00:00'),
        strtotime('01-02-2017 12:00:00'),
        strtotime('01-05-2017 12:00:00'),
        strtotime('01-07-2017 12:00:00'),
        strtotime('01-08-2017 12:00:00'),
        strtotime('01-01-2018 12:00:00'),
        strtotime('15-02-2018 00:00:00')
    );

?>
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

    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/icomoon.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/jquery.scrollbar.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/media.css"/>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/common.js"></script>
    <script src="js/action.js"></script>
</head>
<body>
<div class="wrapper">
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
            <a href="/" class="header__logo"><img src="images/logo_black.png" alt=""/></a>
            <ul class="mainNav__list">
                <li class="mainNav__item">
                    <a href="#aboutMybit" class="mainNav__link btn_scroll"><span class="title">About</span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#team" class="mainNav__link btn_scroll"><span class="title">Team</span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#community" class="mainNav__link btn_scroll"><span class="title">Community</span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#media" class="mainNav__link btn_scroll"><span class="title">Media</span><i class="icon-arrow_dropdown"></i></a>
                    <div class="mainNav__dropdown">
                        <ul>
                            <li>
                                <a href="#media" class="link btn_scroll">Press</a>
                            </li>
                            <li>
                                <a href="https://medium.com/@MyBit_Blog" class="link" target="_blank">Blog</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mainNav__item">
                    <a href="#tokensale" class="mainNav__link btn_scroll"><span class="title">Tokensale</span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#partnerships" class="mainNav__link btn_scroll"><span class="title">Partnerships</span></a>
                </li>
            </ul>
            <a href="/docs/MyBit_Whitepaper_v0.9.pdf" class="btn btn-shadow yellow small btn-whitepaper" target="_blank"><span class="title">Whitepaper</span></a>
        </div>
    </div>
    <div class="lang__wrap">
        <div class="dropdown__wrap">
            <a href="javascript:;" class="dropdown__current"><?php echo t::getInstance()->getCurrentLang(); ?> <i class="icon-arrow_dropdown"></i></a>
            <div class="dropdown__in">
                <ul class="dropdown__list">
                    <?php foreach (t::getInstance()->languages as $key => $lang) : ?>
                        <li class="dropdown__item">
                            <a href="/?ln=<?php echo $key; ?>" class="dropdown__link"><?php echo $lang['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div id="large-header" class="section large-header section__inverse">
        <canvas id="demo-canvas" class="canvas__bg"></canvas>
        <div class="section__intro">
            <div class="container">
                <img src="images/logo_full.png" alt="" class="logo wow animated fadeInUp"/>
                <h1 class="h1 wow animated fadeInUp" data-wow-delay="0.1s" >The platform for tokenizing revenue streams</h1>
                <div class="date__box wow animated fadeInUp" data-wow-delay="0.2s">
                    <span class="date__title">Join Tokensale</span>
                    <span id="countdown" class="date"></span>
                </div>
                <div class="offer-box wow animated fadeInUp sign-in-block" data-wow-delay="0.3s">
                    <span class="title">Pre-Register Today</span>

                    <form class="form form__offer pre_offer">
                        <div class="form__row"> <!--add class error-->
                            <div class="input__wrap">
                                <input type="email" name="email" placeholder="Enter email" class="input">
                                <a href="javascript:;" class="btn__inInput btn_pre_sign_up">sign Up</a>
                            </div>
                            <span class="form__hint">You’re almost done! Please check your email to confirm your subscription.</span>
                            <span class="form__errorTxt"></span>
                        </div>
                    </form>
                    <span class="title small">Already have an account? <a href="#" class="link yellow" data-toggle="modal" data-target="#modal-signIn"> Sign in</a></span>
                </div>
                <div class="offer-box wow animated fadeInUp go-to-dashboard-block" data-wow-delay="0.3s" style="display: none;">
                    <a href="" class="btn btn-shadow yellow">Go to dashboard</a>
                </div>
            </div>
        </div>
    </div>

    <div id="aboutMybit" class="section section__aboutMybit wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-11 col-md-offset-1 col-lg-offset-0">
                    <div class="desc">
                        <p>Mybit makes financing and maintaining revenue streams efficient and automatic.</p>
                        <p>How?</p>
                        <p>By commoditizing solar panel installation and other forms of renewable energy, investors and landowners can crowdfund the coming decentralized energy grid. With Mybit, investors get security on their investment, while landowners get access to investors willing to help in exchange for profit. By standardizing and automating setup, sales, and dividends, Mybit takes you one step closer to an equitable economy.</p>
                        <p>The Future Our 5 year goal is to be at the forefront of commoditizing the coming AI economy. Mybit will be Europe's platform tokenizing any automatable or machine infrastructure. And it will be owned by the crowd.</p>
                    </div>
                </div>
            </div>
            <div class="btn__row">
                <a href="/docs/MyBit_Whitepaper_v0.9.pdf" target="_blank" class="btn btn-progress btn-download_js">
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
                    <span class="title title_calm">Download whitepaper</span>
                    <span class="title title_during">Downloading <span class="value">38</span>%</span>
                    <span class="title title_ready">Downloaded</span>
                </a>
            </div>
            <div class="video__wrap">
                <div class="video__box">
                    <span class="video__play">
                        <i class="icon-play"></i>
                        <span class="video__title">Video Coming Soon</span>
                    </span>
                    <span class="video"></span>
                </div>
            </div>
            <h2 class="h2 section__title">Roadmap</h2>
            <ul class="roadmap__list">
                <li class="roadmap__progressBase">
                    <!--<div class="roadmap__progressBar"></div>-->
                </li>
                <li class="roadmap__progressPart first"><div class="roadmap__progressBar" style="width: 100%;"></div></li>

                <li class="roadmap__item active">
                    <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[0],$roadMapDays[1]);  ?>
                    <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                    <div class="roadmap__date">
                        <span class="roadmap__year">2016</span>
                        <span class="roadmap__month">November</span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr">Idea Conceived</span>
                </li>
                <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[0],$roadMapDays[1]) == 100 ? 'active' : ''; ?>">
                    <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[1],$roadMapDays[2]);  ?>
                    <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month">February</span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr">Whitepaper Published</span>
                </li>
                <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[1],$roadMapDays[2]) == 100 ? 'active' : ''; ?>">
                    <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[2],$roadMapDays[3]);  ?>
                    <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month">May</span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr">Wireframes</span>
                </li>
                <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[2],$roadMapDays[3]) == 100 ? 'active' : ''; ?>">
                    <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[3],$roadMapDays[4]);  ?>
                    <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month">July</span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr">Crowdfund</span>
                </li>
                <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[3],$roadMapDays[4]) == 100 ? 'active' : ''; ?>">
                    <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[4],$roadMapDays[5]);  ?>
                    <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month">August</span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr">Ethereum Testnet Demo</span>
                </li>
                <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[4],$roadMapDays[5]) == 100 ? 'active' : ''; ?>">
                    <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[5],$roadMapDays[6]);  ?>
                    <div class="roadmap__progressPart last"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                    <div class="roadmap__date">
                        <span class="roadmap__year">2018</span>
                        <span class="roadmap__month">January</span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr">Beta Release and Pilot</span>
                </li>
            </ul>
        </div>
    </div>

    <div id="team" class="section section__team section__inverse wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <h2 class="h3 section__title center">Meet Our Team</h2>
            <div class="team__wrap">
                <div class="team__list">
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/garrett.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name">Garrett MacDonald</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Blockchain Design / Entrepreneurial Background in Bitcoin and Blockchain</span>
                            <a href="" class="btn-more team__btnMore_js">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/garrett.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName">Garrett MacDonald</span>
                                <span class="team__detailsProfession">Blockchain Design / Entrepreneurial Background in Bitcoin and Blockchain</span>
                                <p class="team__history">
                                    Garrett has been involved fullAtime in the Blockchain industry since early 2013 when he began a small mining operation that grew rapidly.  Since then he has managed a company that builds custom software for small businesses up to large corporations.  His true passion is
                                    decentralized applications and the potential they have to disrupt traditional business models.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/thomas.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name">Thomas Pollan</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Enterprise Business Applications / Sales & Strategy Background</span>
                            <a href="" class="btn-more team__btnMore_js">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/thomas.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName">Thomas Pollan</span>
                                <span class="team__detailsProfession">Enterprise Business Applications / Sales & Strategy Background</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/ian.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name">Ian Worrall</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Decentralized Solutions Architect / Entrepreneurial Background in Finance and SaaS</span>
                            <a href="" class="btn-more team__btnMore_js">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/ian.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName">Ian Worrall</span>
                                <span class="team__detailsProfession">Decentralized Solutions Architect / Entrepreneurial Background in Finance and SaaS</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/pedro.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name">Pedro Barrosl</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Full Stack Developer</span>
                            <a href="" class="btn-more team__btnMore_js">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/pedro.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName">Pedro Barrosl</span>
                                <span class="team__detailsProfession">Full Stack Developer</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/jacob.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name">Jacob DeBenedetto</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">UI/UX Designer</span>
                            <a href="" class="btn-more team__btnMore_js">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/jacob.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName">Jacob DeBenedetto</span>
                                <span class="team__detailsProfession">UI/UX Designer</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="team__item">-->
                    <!--<div class="team__photoWrap">-->
                    <!--<img src="images/team/alex.jpg" alt="" class="team__photo"/>-->
                    <!--</div>-->
                    <!--<span class="team__name">Alex Dulub</span>-->
                    <!--<div class="team__professionWrap">-->
                    <!--<span class="team__profession">Solidity Developer</span>-->
                    <!--<a href="" class="btn-more team__btnMore_js">MORE</a>-->
                    <!--</div>-->
                    <!--<div class="team__details">-->
                    <!--<div class="team__detailsIn">-->
                    <!--<a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>-->
                    <!--<div class="team__photoWrap">-->
                    <!--<img src="images/team/alex.jpg" alt="" class="team__photo"/>-->
                    <!--</div>-->
                    <!--<span class="team__detailsName">Alex Dulub</span>-->
                    <!--<span class="team__detailsProfession">Solidity Developer</span>-->
                    <!--<p class="team__history">-->
                    <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
                    <!--</p>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>

    <div id="advisor" class="section section__advisor wow  fadeInUp animated" data-wow-offset="50">
        <div class="container">
            <h2 class="h3 section__title center">Advisors</h2>
            <div class="team__wrap">
                <div class="team__list">
                    <div class="team__item" style="" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide10">
                        <div class="team__photoWrap">
                            <img src="images/advisor/peter.png" alt="" class="team__photo">
                        </div>
                        <span class="team__name">Peter Kleissner</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Hacker, Founder of AV Tracker &amp; Stoned Bootkit</span>
                            <a href="" class="btn-more team__btnMore_js" tabindex="-1">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/peter.png" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName">Peter Kleissner</span>
                                <span class="team__detailsProfession">Hacker, Founder of AV Tracker &amp; Stoned Bootkit</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div><div class="team__item" style="" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide11">
                        <div class="team__photoWrap">
                            <img src="images/advisor/nick.jpg" alt="" class="team__photo">
                        </div>
                        <span class="team__name">Nick Ayton</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Public Relations, Co-founder of The 21Million Project</span>
                            <a href="" class="btn-more team__btnMore_js" tabindex="-1">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/nick.jpg" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName">Nick Ayton</span>
                                <span class="team__detailsProfession">Public Relations, Co-founder of The 21Million Project</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div><div class="team__item" style="" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide12">
                        <div class="team__photoWrap">
                            <img src="images/advisor/mitchell.png" alt="" class="team__photo">
                        </div>
                        <span class="team__name">Mitchell Loureiro</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Marketing Strategy, VP of Marketing at Steemit</span>
                            <a href="" class="btn-more team__btnMore_js" tabindex="-1">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/mitchell.png" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName">Mitchell Loureiro</span>
                                <span class="team__detailsProfession">Marketing Strategy, VP of Marketing at Steemit</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div><div class="team__item" style="" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide13">
                        <div class="team__photoWrap">
                            <img src="images/advisor/mihaela.jpg" alt="" class="team__photo">
                        </div>
                        <span class="team__name">Dr. Mihaela Ulieru</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Technology, Global Advisor for World Economic Forum</span>
                            <a href="" class="btn-more team__btnMore_js" tabindex="-1">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/mihaela.jpg" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName">Dr. Mihaela Ulieru</span>
                                <span class="team__detailsProfession">Technology, Global Advisor for World Economic Forum</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div><div class="team__item" style="" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide14">
                        <div class="team__photoWrap">
                            <img src="images/advisor/bogdan.jpg" alt="" class="team__photo">
                        </div>
                        <span class="team__name">Bogdan Fiedur</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Technology, Co-founder at BitJob</span>
                            <a href="" class="btn-more team__btnMore_js" tabindex="-1">MORE</a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/bogdan.jpg" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName">Bogdan Fiedur</span>
                                <span class="team__detailsProfession">Technology, Co-founder at BitJob</span>
                                <p class="team__history">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>

    <div id="community" class="section section__community section__inverse wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <h2 class="h3 section__title center">Community</h2>
                    <div class="soc__wrap in_bl">
                        <ul class="soc__list">
                            <li class="soc__item">
                                <a href="https://www.facebook.com/MyBitDApp/" class="soc__link colored fb" target="_blank"><i class="icon-fb"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://twitter.com/MyBit_DApp" class="soc__link colored twitter" target="_blank"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://t.me/mybit_dapp" class="soc__link colored telegram" target="_blank"><i class="icon-telegram"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://www.reddit.com/user/MyBit_DApp/" class="soc__link colored redit" target="_blank"><i class="icon-redit"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://mybit-dapp.slack.com/ " class="soc__link colored slack" target="_blank"><i class="icon-slack"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://www.youtube.com/channel/UCtLn7Vi-3VbsY5F9uF1RJYg" class="soc__link colored youtube" target="_blank"><i class="icon-youtube"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://bitcointalk.org/index.php?topic=1797720.0" class="soc__link colored bitcointalk" target="_blank"><i class="icon-bitcointalk"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://medium.com/@MyBit_Blog" class="soc__link colored medium" target="_blank"><i class="icon-medium"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="media" class="section section__media wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <h2 class="h3 section__title center">Media</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="media__img">
                        <a href="https://bravenewcoin.com/news/mybit-tackles-data-manipulation-an-emerging-art-of-war-in-cyberspace/">
                            <img src="images/media/bnc.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media__img">
                        <a href="http://www.digitaljournal.com/pr/3295444">
                            <img src="images/media/digital.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="media__img">
                        <a href="http://www.futureofeverything.io/2017/04/12/future-smart-home-technology/">
                            <img src="images/media/final_future.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media__img">
                        <a href="https://cointelegraph.com/news/the-unbreachable-data-made-possible-with-bitcoin-ethereum-blockchain-heres-how&#10;">
                            <img src="images/media/press-cointelegraph.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="media__img">
                        <a href="https://blockgeeks.com/ama/ian-worrall-tokenizing-ai-smart-energy-and-ownership/">
                            <img src="images/media/block.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media__img">
                        <a href="https://www.facebook.com/vejdiven/videos/1344609518964148/">
                            <img src="images/media/paral.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tokensale" class="section section__tokensale section__inverse wow animated fadeInUp"  data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <h2 class="h3 section__title">Tokensale</h2>
                    <p>Coming soon</p>
                </div>
            </div>
        </div>
    </div>

    <div id="partnerships" class="section section__partners wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <h2 class="h3 section__title">Partnerships</h2>
                    <div class="team__wrap inline">
                        <div class="team__list">
                            <div class="team__item">
                                <a href="https://bravenewcoin.com/news/mybit-tackles-data-manipulation-an-emerging-art-of-war-in-cyberspace/" target="_blank" class="team__photoWrap">
                                    <img src="images/media/bnc.jpeg" alt="" class="team__photo"/>
                                </a>
                                <span class="team__name">BraveNewCoin</span>
                                <div class="team__professionWrap">
                                    <span class="team__profession">Escrow/Marketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container wow animated fadeInUp" data-wow-offset="50">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="h4">Get Updates</h2>
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
                                <a href="javascript:;" class="btn__inInput btn_subscribe"><?php echo t::message('global','Submit'); ?></a>
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
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h2 class="h4">Resources</h2>
                    <p>Coming soon</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="footer__download">
                        <a href="/docs/MyBit_Whitepaper_v0.9.pdf" target="_blank" class="btn btn-progress btn-download_js">
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

    <!-- Modal -->
    <div class="modal fade" id="modal-signIn" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Welcome Back!</h5>
                    <span class="desc">Sign in with your login to continue</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signIn">
                        <div class="form__row">
                            <input type="email" name="email" class="input" placeholder="Enter email"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="password" name="password" class="input" placeholder="Your password"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="btn__row">
                            <a href="javascript:;" class="btn btn-shadow yellow send_login">Login</a>
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
                    <h5 class="modal-title">Let’s Get Started!</h5>
                    <span class="desc">Sign in with your login to continue</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signUp">
                        <div class="form__row">
                            <input type="password" name="password" class="input" placeholder="Your password"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="password" name="repeat_password" class="input" placeholder="Repeat password"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="text" name="address" class="input" placeholder="Ethereum address"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="btn__row">
                            <a href="javascript:;" class="btn btn-shadow yellow send_registration">Sign up</a>
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
                    <h5 class="modal-title">Login</h5>
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
                            <a href="javascript:;" class="btn btn-shadow yellow send_2fa">Submit</a>
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
                    <h5 class="modal-title">Thank you for registration!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="btn__row" >
                        <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal" aria-label="Close">ok</a>
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
                    <h5 class="modal-title">Let’s Get Started!</h5>
                    <span class="desc">Sign in with your login to continue</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form__row">
                            <input type="text" name="name" class="input" placeholder="Enter name"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="email" name="email" class="input" placeholder="Enter email"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <input type="text" name="reference" class="input" placeholder="Please tell us what this is in reference to"/>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="form__row">
                            <textarea name="message" class="scrollbar-outer textarea-scrollbar textarea" id="textarea-scrollbar_js"  placeholder="Please describe your message here..."></textarea>
                            <span class="form__errorTxt"></span>
                        </div>
                        <div class="btn__row">
                            <a href="javascript:;" class="btn btn-shadow yellow send_question">Ask Question</a>
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
                    <h5 class="modal-title">Thank you! We will contact you shortly.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="btn__row" >
                        <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal" aria-label="Close">ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/easePack.min.js"></script>
<script src="js/rAF.js"></script>
<script src="js/tweenLite.min.js"></script>
<script src="js/animatedBg.js"></script>

</body>
</html>