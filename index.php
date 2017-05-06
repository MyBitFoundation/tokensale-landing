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
                    <a href="#aboutMybit" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','About MyBit'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#technology" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Core Technology'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#infrastructure" class="mainNav__link btn_scroll"><span class="title">Tokenization Of Energy</span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#businessModel" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Business Model'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#roadmap" class="mainNav__link btn_scroll"><span class="title">Crowdfunding Info</span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#team" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Team'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#media" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Media'); ?></span></a>
                </li>
            </ul>
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
                    <span class="title">Sign in to create, discover and connect with the global community.</span>
                    <a href="" class="btn btn-shadow blue" data-toggle="modal" data-target="#modal-signUp">sign Up</a>
                    <a href="" class="btn btn-shadow yellow" data-toggle="modal" data-target="#modal-signIn">sign in</a>
                </div>
                <div class="offer-box wow animated fadeInUp go-to-dashboard-block" data-wow-delay="0.3s" style="display: none;">
                    <a href="" class="btn btn-shadow yellow">Go to dashboard</a>
                </div>
                <div class="btn__row wow animated fadeInUp"  data-wow-delay="0.3s">
                    <a href="https://www.facebook.com/vejdiven/videos/1344609518964148/" class="btn btn-inverse" target="_blank"><span>Watch Presentation</span></a>
                    <a href="https://www.slideshare.net/IanMWorrall/mybit-deck" class="btn btn-inverse" target="_blank"><span>View Deck</span></a>
                </div>
            </div>
        </div>
    </div>

    <div id="aboutMybit" class="section section__aboutMybit wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-11 col-md-offset-1 col-lg-offset-0">
                    <h2 class="h2 section__title">About MyBit</h2>
                    <div class="desc">
                        <p>Mybit makes financing and maintaining revenue streams efficient and automatic.</p>
                        <p>How?</p>
                        <p>By commoditizing solar panel installation and other forms of renewable energy, investors and landowners can crowdfund the coming decentralized energy grid. With Mybit, investors get security on their investment, while landowners get access to investors willing to help in exchange for profit. By standardizing and automating setup, sales, and dividends, Mybit takes you one step closer to an equitable economy.</p>
                        <p>The Future Our 5 year goal is to be at the forefront of commoditizing the coming AI economy. Mybit will be Europe's platform tokenizing any automatable or machine infrastructure. And it will be owned by the crowd.</p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="technology" class="section section__technology section__inverse wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="desc">
                        <h2 class="h3 section__title"><?php echo t::message('global','Core Technology'); ?></h2>
                        <div class="description__wrap">
                            <p><?php echo t::message('global','MyBit is built on a fully decentralized technology stack with BigchainDB, IPFS, Bitcoin’s Ledger, and Ethereum’s EVM. This enables MyBit to possess unparalleled functionality and arguably be the world’s most secure registry technology to date.'); ?>
                               <span class="continuation"> <?php echo t::message('global','There has yet to be a successful uniformed global database of registries. This is due to centralized systems posing too large of a security threat and a single point of failure risk. Through decentralization, these risks are exponentially mitigated.'); ?></span>
                            </p>
                            <p>
                                <span class="continuation"><?php echo t::message('global','MyBit not only secures ownership data, but also extends the functionality into asset management with Smart Trust technology. Smart Trusts are governed by irrefutable computer code to make the process of divesting ownership much cleaner, affordable, and manageable. The administrator’s role to govern and act based on the outlined terms can be replaced by efficient computer code that is guaranteed to execute exactly as instructed. This results in massive cost savings, time reduction, and eliminates reliance on third-parties prone to human-error.'); ?></span>
                            </p>
                            <a href="" class="description__link">
                                <span class="read"><?php echo t::message('global','Read More'); ?></span>
                                <span class="hide-txt"><?php echo t::message('global','Hide text'); ?></span>
                            </a>
                        </div>
                        <div class="btn__row">
                            <a href="https://medium.com/@MyBit_Blog/what-is-mybit-acbe776cee51" class="btn btn-inverse"><span>Read Blog</span></a>
                            <a href="https://www.youtube.com/watch?v=X9WZh51_IpQ" class="btn btn-inverse"><span>Watch Interview</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="infrastructure" class="section section__infrastructure wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="desc">
                        <h2 class="h3 section__title">TOKENIZING ENERGY AND AI INFRASTRUCTURE</h2>
                        <div class="description__wrap">
                            <p>The proliferation of Artificial Intelligence (AI) and the Internet of Things (IoT) will result in massive demand increases for energy.
                                <span class="continuation">Traditional energy grids will not be able to scale rapidly enough to keep up with the demand. We believe
                                decentralized energy grids, composed of renewable energy technologies such as solar panels that can be
                                installed on homes and office buildings away from the traditional (centralized) energy production & storage facilities,
                                will be a critical component of the solution to the increased energy demand.</span>
                            </p>
                            <p><span class="continuation">A major issue with decentralized energy grids is the financial-barrier to entry. While companies
                                such as Solar City have done a good job providing alternative financing packages (although they heavily rely on incentives
                                such as tax breaks which will not last forever), the centralized model only permits scaling to a certain level (which demand will
                                surpass). Decentralizing this model via Blockchain tokenization and Ethereum based smart contract governance, provides
                                an infinitely scalable model that benefits consumers, investors, and enterprise.</span>
                            </p>
                            <p>
                                <span class="continuation">Our goal is to remove the financial barriers to entry and the friction currently present in the alternative
                                    assets investment space; thereby, enabling anyone to benefit from sustainable infrastructure regardless of their socioeconomic
                                    status or location. Aside from energy this model can be replicated across many industries including AI - specifically autonomous mobiles.</span>
                            </p>
                            <a href="" class="description__link">
                                <span class="read">Read More</span>
                                <span class="hide-txt">Hide text</span>
                            </a>
                        </div>
                        <div class="btn__row">
                            <a href="https://medium.com/@MyBit_Blog/tokenizing-ai-infrastructure-9bd05ded6164" class="btn btn-default"><span>Read Blog</span></a>
                            <a href="https://www.youtube.com/watch?v=waYa-2l4m5s&t=68s" class="btn btn-default"><span>Watch Interview</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tokenizationModel" class="section section__tokenizationModel section__inverse wow  fadeInUp animated" data-wow-offset="50">
        <h2 class="h3 section__title center">Tokenization Model</h2>
        <div class="container tokenization__model__container">
            <div class="row tokenization__model__step tokenization__model__step__odd">
                <div class="col-xs-5">
                    <p class="tokenization__model__description">
                        <b>
                            Asset Share Issuance
                        </b>
                    </p>
                </div>
                <div class="col-xs-2">
                    <img class="tokenization__model__yellow__image tokenization__model__yellow__image__odd" src="images/tokenization_model/num_1.png">
                    <div class="vertical__bar"> </div>
                </div>
                <div class="col-xs-5">
                    <div class="tokenization__model__image asset__share">
                    </div>
                </div>
            </div>
            <div class="row tokenization__model__step tokenization__model__step__even">
                <div class="col-xs-5">
                    <div class="tokenization__model__image public__platform">
                    </div>
                </div>
                <div class="col-xs-2">
                    <img class="tokenization__model__yellow__image tokenization__model__yellow__image__even" src="images/tokenization_model/num_2.png">
                    <div class="vertical__bar"> </div>
                </div>
                <div class="col-xs-5">
                    <p class="tokenization__model__description">
                        <b>
                            Open to investors on public platform
                        </b>
                    </p>
                </div>
            </div>
            <div class="row tokenization__model__step tokenization__model__step__odd">
                <div class="col-xs-5">
                    <p class="tokenization__model__description tokenization__model__description__long__text">
                        <b>
                            Once $ amount is achieved
                            smart contract automatically
                            sends money to distributor
                            to send/install machinery.
                        </b>
                    </p>
                </div>
                <div class="col-xs-2">
                    <img class="tokenization__model__yellow__image tokenization__model__yellow__image__odd" src="images/tokenization_model/num_3.png">
                    <div class="vertical__bar"> </div>
                </div>
                <div class="col-xs-5">
                    <div class="tokenization__model__image smart__contract">
                    </div>
                </div>
            </div>
            <div class="row tokenization__model__step tokenization__model__step__even">
                <div class="col-xs-5">
                    <div class="tokenization__model__image revenue__distribution">
                    </div>
                </div>
                <div class="col-xs-2">
                    <img class="tokenization__model__yellow__image tokenization__model__yellow__image__even" src="images/tokenization_model/num_4.png">
                    <div class="vertical__bar vertical__bar__long"> </div>
                </div>
                <div class="col-xs-5">
                    <p class="tokenization__model__description">
                        <b>
                            Revenue Distributions begin based on stake %
                        </b>
                    </p>
                </div>
            </div>
            <div class="row tokenization__model__step tokenization__model__step__even">
                <div class="horizontal__bar"> </div>
                <div class="vertical__branch__bar vertical__branch__left__bar"> </div>
                <div class="vertical__branch__bar vertical__branch__right__bar"> </div>

            </div>
            <div class="row tokenization__model__step tokenization__model__step__even">
                <div class="col-xs-4">
                    <img class="tokenization__model__yellow__image tokenization__model__yellow__image__even tokenization__model__yellow__image__footer__left" src="images/tokenization_model/hold.png">
                    <p class="tokenization__model__footer__description">
                        <b>
                            Revenue Distributions <br>
                            in real-time
                        </b>
                    </p>
                </div>
                <div class="col-xs-4">
                    <img class="tokenization__model__yellow__image tokenization__model__yellow__image__even tokenization__model__yellow__image__footer__center" src="images/tokenization_model/place_in_trustwill.png">
                    <p class="tokenization__model__footer__description">
                        <b>
                            Ownership is automatically <br>
                            distributed to new owners you <br>
                            choose if an event occurs <br>
                            (such as graduation, age, death, etc.)
                        </b>
                    </p>
                </div>
                <div class="col-xs-4">
                    <img class="tokenization__model__yellow__image tokenization__model__yellow__image__even tokenization__model__yellow__image__footer__right" src="images/tokenization_model/liquidate_stake.png">
                    <p class="tokenization__model__footer__description">
                        <b>
                            in exchange for <br>
                            cash on exchange
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="innovation" class="section section__innovation section__inverse wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <h2 class="h3 section__title center"><?php echo t::message('global','Innovation'); ?> </h2>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-0">
                    <div class="innovation__item">
                        <i class="icon-data"></i>
                        <span class="innovation__desc"><?php echo t::message('global','Next generation <br/> of securing ownership data'); ?></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-0">
                    <div class="innovation__item">
                        <i class="icon-increasing"></i>
                        <span class="innovation__desc"><?php echo t::message('global','Increases the accessibility  of asset management and investment services'); ?></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-0">
                    <div class="innovation__item">
                        <i class="icon-control"></i>
                        <span class="innovation__desc"><?php echo t::message('global','Fully transparent and democratic governance model'); ?></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-0">
                    <div class="innovation__item">
                        <i class="icon-newAsset"></i>
                        <span class="innovation__desc">Creates new asset class for financing revenue-generating assets in Energy, AI, and many additional verticals.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="businessModel" class="section section__businessModel wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <h2 class="h3 section__title"><?php echo t::message('global','Business Model'); ?></h2>
                    <div class="desc">
                        <div class="description__wrap">
                            <p><?php echo t::message('global','The Decentralized business model enables anyone to participate and benefit by partaking in profit sharing and revenue distributions. This creates an opportunity for the average person to get involved from the beginning.'); ?>
                            </p>
                            <p><span class="continuation"><?php echo t::message('global','We believe that over the next decade there will be a global shift towards decentralizing business models and want to stay ahead of the curve. For MyBit, a decentralized model makes the most sense.  When dealing with ownership records, payments, and other critical information a <strong>decentralized model provides the most secure route for the protection of information and the end user</strong>'); ?>.</span>
                            </p>
                            <div class="continuation">
                                <p>
                                    <strong><?php echo t::message('global','Incentive structures are crucial components to ensuring the ongoing success of decentralized applications'); ?>.</strong>
                                    <?php echo t::message('global','Incentivizing participants drives the ecosystem and encourages growth. To use certain services of the platform, a token specific to MyBit must be utilized. These tokens are offered in a crowdsale to fairly distribute among the network. <strong>The value of each is determined by the laws of supply and demand.</strong> Since there is a fixed supply of tokens it is expected that as popularity (demand) of the platform increases, the value will rise.'); ?>
                                </p></div>
                            <a href="" class="description__link">
                                <span class="read"><?php echo t::message('global','Read More'); ?></span>
                                <span class="hide-txt"><?php echo t::message('global','Hide text'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="roadmap" class="section section__roadmap section__inverse wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
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

    <div id="icoDetails" class="section section__details wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <h2 class="h3 section__title"><?php echo t::message('global','ICO Details'); ?></h2>
                    <div class="details__wrap">
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">TOKEN NAME:</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text">MyBit ($MyB)</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">WHAT DOES THIS TOKEN REPRESENT?</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text">MyBit tokens are used to access certain functionalities of the platform including registering a new asset, transferring an asset, and a variety of financing features. Holders of MyBit tokens will also receive real-time revenue distributions proportionate to their stake percentage.</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">PAYOUT STRUCTURE</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text">A smart contract governs revenue distributions as a percentage based on individual stake divided by total MyB supply. Any incoming MyBit network fees (minus ethereum network fees) are automatically distributed to tokenholders in the next mined block.</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">TOTAL SUPPLY:</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text">Maximum of 10,000,000 tokens</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">PRICE PER TOKEN:</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text">Variable, see pricing structure below</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">Crowdfunding Milestones:</span>
                            </div>
                            <div class="details__content">
                                <a href="javascript:;" class="btn btn-default crowdfunding__milestones__link"><span>Click to view</span></a>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">Escrow Release Terms:</span>
                            </div>
                            <div class="details__content">
                                <a href="javascript:;" class="btn btn-default escrow__release__terms__link"><span>Click to view</span></a>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading">Token Document:</span>
                            </div>
                            <div class="details__content">
                                <a href="javascript:;" class="btn btn-default"><span>Click to view</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="structure" class="section section__structure section__inverse wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <h2 class="h3 section__title">Pricing Structure</h2>
                    <div class="desc">
                        <p>To utilize our pre-sale script that automatically buys into the contract when it begins to ensure you are getting the optimal price , please email <a href="" class="link">info@mybit.io</a> A 10% discount is applied in the form of Ethereum refund for any pre-sale order greater in value than 25 ETHER, and 20% discount for orders greater than 100 ETHER.</p>
                    </div>

                    <div class="chart__box">
                        <div class="chart__title chart__title_1">
                            <span class="value">25% Discount</span>
                            <span class="line"></span>
                            <span class="name">Week 1</span>
                        </div>
                        <div class="chart__title chart__title_2">
                            <span class="value">Full-Price</span>
                            <span class="line"></span>
                            <span class="name">Week 4</span>
                        </div>
                        <div class="chart__title chart__title_3">
                            <span class="value">15% Discount</span>
                            <span class="line"></span>
                            <span class="name">Week 2</span>
                        </div>
                        <div class="chart__title chart__title_4">
                            <span class="value">10% Discount</span>
                            <span class="line"></span>
                            <span class="name">Week 3</span>
                        </div>
                        <div class="circle__box">
                            <svg width="290" height="290" class="circle__wrap">
                                <circle fill="none" cx="145" cy="145" r="125" class="circle circle_1"/>
                                <circle fill="none" cx="145" cy="145" r="106" class="circle circle_2"/>
                                <circle fill="none" cx="145" cy="145" r="89" class="circle circle_3"/>
                                <circle fill="none" cx="145" cy="145" r="71" class="circle circle_4"/>
                            </svg>
                        </div>
                        <div class="chart__total">
                            <a href="javascript:;" class="btn btn-inverse deal__sheet__link"><span>View Deal Sheet</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="team" class="section section__team wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <h2 class="h3 section__title center"><?php echo t::message('global','Meet Our Team'); ?></h2>
            <div class="team__wrap">
                <div class="team__list">
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/garrett.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name"><?php echo t::message('global','Garrett MacDonald'); ?></span>
                        <div class="team__professionWrap">
                            <span class="team__profession"><?php echo t::message('global','Blockchain Design / Entrepreneurial Background in Bitcoin and Blockchain'); ?></span>
                            <a href="" class="btn-more team__btnMore_js"><?php echo t::message('global','MORE'); ?></a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/garrett.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName"><?php echo t::message('global','Garrett MacDonald'); ?></span>
                                <span class="team__detailsProfession"><?php echo t::message('global','Blockchain Design / Entrepreneurial Background in Bitcoin and Blockchain'); ?></span>
                                <p class="team__history">
                                    <?php echo t::message('global','Garrett has been involved fullAtime in the Blockchain industry since early 2013 when he began a small mining operation that grew rapidly.  Since then he has managed a company that builds custom software for small businesses up to large corporations.  His true passion is decentralized applications and the potential they have to disrupt traditional business models.'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/thomas.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name"><?php echo t::message('global','Thomas Pollan'); ?></span>
                        <div class="team__professionWrap">
                            <span class="team__profession"><?php echo t::message('global','Enterprise Business Applications / Sales & Strategy Background'); ?></span>
                            <a href="" class="btn-more team__btnMore_js"><?php echo t::message('global','MORE'); ?></a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/thomas.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName"><?php echo t::message('global','Thomas Pollan'); ?></span>
                                <span class="team__detailsProfession"><?php echo t::message('global','Enterprise Business Applications / Sales & Strategy Background'); ?></span>
                                <p class="team__history">
                                    <?php echo t::message('global','Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/ian.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name"><?php echo t::message('global','Ian Worrall'); ?></span>
                        <div class="team__professionWrap">
                            <span class="team__profession"><?php echo t::message('global','Decentralized Solutions Architect / Entrepreneurial Background in Finance and SaaS'); ?></span>
                            <a href="" class="btn-more team__btnMore_js"><?php echo t::message('global','MORE'); ?></a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/ian.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName"><?php echo t::message('global','Ian Worrall'); ?></span>
                                <span class="team__detailsProfession"><?php echo t::message('global','Decentralized Solutions Architect / Entrepreneurial Background in Finance and SaaS'); ?></span>
                                <p class="team__history">
                                    <?php echo t::message('global','Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/pedro.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name"><?php echo t::message('global','Pedro Barrosl'); ?></span>
                        <div class="team__professionWrap">
                            <span class="team__profession"><?php echo t::message('global','Full Stack Developer'); ?></span>
                            <a href="" class="btn-more team__btnMore_js"><?php echo t::message('global','MORE'); ?></a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/pedro.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName"><?php echo t::message('global','Pedro Barrosl'); ?></span>
                                <span class="team__detailsProfession"><?php echo t::message('global','Full Stack Developer'); ?></span>
                                <p class="team__history">
                                    <?php echo t::message('global','Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <div class="team__photoWrap">
                            <img src="images/team/jacob.jpg" alt="" class="team__photo"/>
                        </div>
                        <span class="team__name"><?php echo t::message('global','Jacob DeBenedetto'); ?></span>
                        <div class="team__professionWrap">
                            <span class="team__profession"><?php echo t::message('global','UI/UX Designer'); ?></span>
                            <a href="" class="btn-more team__btnMore_js"><?php echo t::message('global','MORE'); ?></a>
                        </div>
                        <div class="team__details">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/team/jacob.jpg" alt="" class="team__photo"/>
                                </div>
                                <span class="team__detailsName"><?php echo t::message('global','Jacob DeBenedetto'); ?></span>
                                <span class="team__detailsProfession"><?php echo t::message('global','UI/UX Designer'); ?></span>
                                <p class="team__history">
                                    <?php echo t::message('global','Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?>
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

    <div id="advisor" class="section section__advisor section__inverse wow  fadeInUp animated" data-wow-offset="50" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            <h2 class="h3 section__title center">Advisors</h2>
            <div class="team__wrap">
                <div class="team__list inverse">
                    <div class="team__item" style="" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide10">
                        <div class="team__photoWrap">
                            <img src="images/advisor/peter.png" alt="" class="team__photo">
                        </div>
                        <span class="team__name">Peter Kleissner</span>
                        <div class="team__professionWrap">
                            <span class="team__profession">Hacker, Founder of AV Tracker &amp; Stoned Bootkit</span>
                            <a href="" class="btn-more team__btnMore_js" tabindex="-1">MORE</a>
                        </div>
                        <div class="team__details team__details__inverse">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js team__detailsClose__inverse" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/peter.png" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName team__detailsName__inverse">Peter Kleissner</span>
                                <span class="team__detailsProfession team__detailsProfession__inverse">Hacker, Founder of AV Tracker &amp; Stoned Bootkit</span>
                                <p class="team__history team__history__inverse">
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
                        <div class="team__details team__details__inverse">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js team__detailsClose__inverse" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/nick.jpg" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName team__detailsName__inverse">Nick Ayton</span>
                                <span class="team__detailsProfession team__detailsProfession__inverse">Public Relations, Co-founder of The 21Million Project</span>
                                <p class="team__history team__history__inverse">
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
                        <div class="team__details team__details__inverse">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js team__detailsClose__inverse" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/mitchell.png" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName team__detailsName__inverse">Mitchell Loureiro</span>
                                <span class="team__detailsProfession team__detailsProfession__inverse">Marketing Strategy, VP of Marketing at Steemit</span>
                                <p class="team__history team__history__inverse">
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
                        <div class="team__details team__details__inverse">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js team__detailsClose__inverse" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/mihaela.jpg" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName team__detailsName__inverse">Dr. Mihaela Ulieru</span>
                                <span class="team__detailsProfession team__detailsProfession__inverse">Technology, Global Advisor for World Economic Forum</span>
                                <p class="team__history team__history__inverse">
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
                        <div class="team__details team__details__inverse">
                            <div class="team__detailsIn">
                                <a href="" class="team__detailsClose team__detailsClose_js team__detailsClose__inverse" tabindex="-1"><i class="icon-close"></i></a>
                                <div class="team__photoWrap">
                                    <img src="images/advisor/bogdan.jpg" alt="" class="team__photo">
                                </div>
                                <span class="team__detailsName team__detailsName__inverse">Bogdan Fiedur</span>
                                <span class="team__detailsProfession team__detailsProfession__inverse">Technology, Co-founder at BitJob</span>
                                <p class="team__history team__history__inverse">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div></div>
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

    <footer class="footer">
        <div class="container wow animated fadeInUp" data-wow-offset="50">
            <h2 class="h4"><?php echo t::message('global','Get Updates'); ?></h2>
            <div class="row">
                <div class="col-sm-6">
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
                                <a href="https://www.facebook.com/MyBitDApp/" class="soc__link" target="_blank"><i class="icon-fb"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://twitter.com/MyBit_DApp" class="soc__link" target="_blank"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://t.me/mybit_dapp" class="soc__link" target="_blank"><i class="icon-telegram"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://www.reddit.com/user/MyBit_DApp/" class="soc__link" target="_blank"><i class="icon-redit"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://slack.mybit.io/" class="soc__link" target="_blank"><i class="icon-slack"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://www.youtube.com/channel/UCtLn7Vi-3VbsY5F9uF1RJYg" class="soc__link" target="_blank"><i class="icon-youtube"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://bitcointalk.org/index.php?topic=1797720.0" class="soc__link" target="_blank"><i class="icon-bitcointalk"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://medium.com/@MyBit_Blog" class="soc__link" target="_blank"><i class="icon-medium"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
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
                    <span class="hint">Don’t have an account? <a href="javascript:;" class="link" onclick="$('#modal-signIn').modal('hide'); $('#modal-signUp').modal('show');">Get started</a></span>
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
                            <input type="email" name="email" class="input" placeholder="Enter email"/>
                            <span class="form__errorTxt"></span>
                        </div>
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