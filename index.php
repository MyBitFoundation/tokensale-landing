<?php

    require_once 'classes/common.php';

    if(isset($_GET['ln'])) {
        t::getInstance()->setLang($_GET['ln']);
        header("Location: /");
        die();
    }

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
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/media.css"/>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
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
            <ul class="mainNav__list">
                <li class="mainNav__item">
                    <a href="#aboutMybit" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','About MyBit'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#technology" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Core Technology'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#infrastructure" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Tokenizing AI Infrastructure'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#innovation" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Innovation'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#businessModel" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Business Model'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#roadmap" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Roadmap'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#icoDetails" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','ICO Details'); ?></span></a>
                </li>
                <li class="mainNav__item">
                    <a href="#structure" class="mainNav__link btn_scroll"><span class="title"><?php echo t::message('global','Pricing Structure'); ?></span></a>
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
                <h1 class="h1 wow animated fadeInUp" data-wow-delay="0.1s" ><?php echo t::message('global','Adding an otwnership layer to the internet'); ?></h1>
                <div class="date__box wow animated fadeInUp" data-wow-delay="0.2s">
                    <span class="date__title"><?php echo t::message('global','ICO Begins'); ?></span>
                    <span class="date">27 <?php echo t::message('global','April'); ?> 2017</span>
                </div>
                <form class="form form__updates form__updates_js wow animated fadeInUp form_subscribe" data-wow-delay="0.3s">
                    <span class="form__title">
                        <span class="usual"><?php echo t::message('global','Get Updates'); ?></span>
                        <span class="success"><?php echo t::message('global','Thank You For Subscribing'); ?>!</span>
                    </span>
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
                            <a href="javascript:;" class="btn_subscribe btn__inInput"><?php echo t::message('global','Submit'); ?></a>
                        </div>
                        <span class="form__errorTxt"></span>
                        <span class="form__hint"><?php echo t::message('global','You’re almost done! Please check your email to confirm your subscription'); ?>.</span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="aboutMybit" class="section section__aboutMybit wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-11 col-md-offset-1 col-lg-offset-0">
                    <h2 class="h2 section__title"><?php echo t::message('global','About MyBit'); ?></h2>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="video__wrap">
                                <img src="images/video_screen.jpg" alt="" class="img"/>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-10">
                            <div class="desc">
                                <p><?php echo t::message('global','MyBit revolutionizes asset management by enabling the secure administration of ownership via a decentralized, golden source ledger.  It effectively removes single point of failure risk, reliance on third-party escrow agents, and much of the friction in traditional systems.  MyBit’s design is optimized to increase the accessibility of asset management and investment services by utilizing innovative technology to lower costs.  Governed by a profit sharing smart contract, MyBit is the first DApp that truly bridges the gap between physical and digital realms while enabling investors to partake in revenue distributions.'); ?></p>
                                <div class="btn__row">
                                    <a href="/MyBit_Whitepaper_v0.9.pdf" target="_blank" class="btn btn-progress btn-download_js">
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
                            <a href="https://medium.com/@MyBit_Blog/what-is-mybit-acbe776cee51#.emhqzt1n9" target="_blank" class="btn btn-default"><span><?php echo t::message('global','Read Blog'); ?></span></a>
                            <a href="https://www.youtube.com/watch?v=X9WZh51_IpQ" target="_blank" class="btn btn-default"><span><?php echo t::message('global','Watch Interview'); ?></span></a>
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
                        <h2 class="h3 section__title"><?php echo t::message('global','Tokenizing AI Infrastructure'); ?></h2>
                        <div class="description__wrap">
                            <p><?php echo t::message('global','There are many socioeconomic factors that need to be carefully considered as the transition to AI becomes widespread. Unemployment will rise short-term and may remain long-term.'); ?><span class="continuation">
                                <?php echo t::message('global','Older generations will be the most affected as they have less incentive to learn new skills due to limited time remaining in the workforce. Companies will need to weigh financing options for equipment and system upgrades. While AI technology is becoming increasingly affordable, capital light (mainly service) companies must transition to capital intensive in order to fund massive investments into hardware. A disruptive global shift at this scale could easily become highly problematic.'); ?></span>
                            </p>
                            <p><span class="continuation"><?php echo t::message('global','MyBit is designed to fill the void between unemployment and AI-takeover during this disruptive transition by facilitating the creation of a new financing model and asset class that is beneficial to individuals, companies, and sustainability. MyBit provides companies with viable financing solutions through tokenized fractional assets, enables new methods of income generation for the average person; and strives towards sustainability by managing this vast amount of data and activity with minimal resource consumption.'); ?></span>
                            </p>
                            <a href="" class="description__link">
                                <span class="read"><?php echo t::message('global','Read More'); ?></span>
                                <span class="hide-txt"><?php echo t::message('global','Hide text'); ?></span>
                            </a>
                        </div>
                        <div class="btn__row">
                            <a href="https://medium.com/@MyBit_Blog/tokenizing-ai-infrastructure-9bd05ded6164" target="_blank" class="btn btn-inverse"><span><?php echo t::message('global','Read Blog'); ?></span></a>
                            <a href="https://www.youtube.com/watch?v=waYa-2l4m5s&t=68s" target="_blank" class="btn btn-inverse"><span><?php echo t::message('global','Watch Interview'); ?></span></a>
                        </div>
                    </div>
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
                        <span class="innovation__desc"><?php echo t::message('global','Creates new asset class for financing AI Infrastructure'); ?></span>
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
            <h2 class="h2 section__title"><?php echo t::message('global','Roadmap'); ?></h2>
            <ul class="roadmap__list">
                <li class="roadmap__progress">
                    <div class="roadmap__progressBar"></div>
                </li>
                <li class="roadmap__item active">
                    <div class="roadmap__date">
                        <span class="roadmap__year">2016</span>
                        <span class="roadmap__month"><?php echo t::message('global','November'); ?></span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr"><?php echo t::message('global','Idea Conceived'); ?></span>
                </li>
                <li class="roadmap__item active">
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month"><?php echo t::message('global','February'); ?></span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr"><?php echo t::message('global','Whitepaper Published'); ?></span>
                </li>
                <li class="roadmap__item active">
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month"><?php echo t::message('global','May'); ?></span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr"><?php echo t::message('global','ICO'); ?></span>
                </li>
                <li class="roadmap__item">
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month"><?php echo t::message('global','October'); ?></span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr"><?php echo t::message('global','Phase 1 Beta Release'); ?></span>
                </li>
                <li class="roadmap__item">
                    <div class="roadmap__date">
                        <span class="roadmap__year">2017</span>
                        <span class="roadmap__month"><?php echo t::message('global','November'); ?></span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr"><?php echo t::message('global','Revenue Distributions Begin'); ?></span>
                </li>
                <li class="roadmap__item">
                    <div class="roadmap__date">
                        <span class="roadmap__year">2018</span>
                        <span class="roadmap__month"><?php echo t::message('global','January'); ?></span>
                    </div>
                    <span class="roadmap__dot"></span>
                    <span class="roadmap__descr"><?php echo t::message('global','Phase 2 Beta Release'); ?></span>
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
                                <span class="details__heading"><?php echo t::message('global','TOKEN NAME'); ?>:</span>
                                <span class="details__subheading"><?php echo t::message('global','ICO Duration'); ?>: <?php echo t::message('global','March'); ?> 27<?php echo t::message('global','th'); ?> 2017 - <?php echo t::message('global','April'); ?> 27<?php echo t::message('global','th'); ?> 2017</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text"><?php echo t::message('global','MyBit'); ?></p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading"><?php echo t::message('global','WHAT DOES THIS TOKEN REPRESENT?'); ?></span>
                            </div>
                            <div class="details__content">
                                <p class="details__text"><?php echo t::message('global','MyBit tokens represent a Proof-of-Membership in a fund. It grants access to 50% of fund profits, executed by an Ethereum smart contract'); ?>.</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading"><?php echo t::message('global','PAYOUT STRUCTURE'); ?></span>
                            </div>
                            <div class="details__content">
                                <p class="details__text"><?php echo t::message('global','A smart contract lets token owners collect 50% of quarterly profits. Intuitively, it implies that investors with a larger share of tokens will collect a higher return. 25% of profits will be reinvested back into the fund, allowing the Net Asset Value (NAV) of a token to increase over time'); ?>.</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading"><?php echo t::message('global','TOTAL SUPPLY'); ?>:</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text">101,000,000 <?php echo t::message('global','tokens'); ?></p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading"><?php echo t::message('global','PRICE PER TOKEN'); ?>:</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text"><?php echo t::message('global','US'); ?>$1</p>
                            </div>
                        </div>
                        <div class="details__row">
                            <div class="details__title">
                                <span class="details__heading"><?php echo t::message('global','ADJUSTABLE'); ?>:</span>
                            </div>
                            <div class="details__content">
                                <p class="details__text"><?php echo t::message('global','Tokens not sold during the ICO will be burnt. No additional tokens will ever be created. TaaS will never trade or own its own tokens'); ?>.</p>
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
                    <h2 class="h3 section__title"><?php echo t::message('global','Pricing Structure'); ?></h2>
                    <div class="desc">
                        <p><?php echo t::message('global','To utilize our pre-sale script that automatically buys into the contract when it begins to ensure you are getting the optimal price , please email'); ?> <a href="mailto:info@mybit.io" class="link">info@mybit.io</a></p>
                    </div>
                    <!--<img src="images/graph.png" alt=""/>-->

                    <div class="chart__box">
                        <div class="chart__title chart__title_1">
                            <span class="value">4 568</span>
                            <span class="line"></span>
                            <span class="name"><?php echo t::message('global','Value Name'); ?></span>
                        </div>
                        <div class="chart__title chart__title_2">
                            <span class="value">3 256</span>
                            <span class="line"></span>
                            <span class="name"><?php echo t::message('global','Value Name'); ?></span>
                        </div>
                        <div class="chart__title chart__title_3">
                            <span class="value">2 526</span>
                            <span class="line"></span>
                            <span class="name"><?php echo t::message('global','Value Name'); ?></span>
                        </div>
                        <div class="chart__title chart__title_4">
                            <span class="value">5 825</span>
                            <span class="line"></span>
                            <span class="name"><?php echo t::message('global','Value Name'); ?></span>
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
                            <span><?php echo t::message('global','TOTAL'); ?></span>
                            <span class="value">11 936</span>
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

    <div id="media" class="section section__media section__inverse wow animated fadeInUp" data-wow-offset="50">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <h2 class="h3 section__title"><?php echo t::message('global','Media'); ?></h2>
                    <div class="desc">
                        <p><?php echo t::message('global','Some text about MyBit. MyBit is built on a fully decentralized technology stack with BigchainDB, IPFS, Bitcoin’s Ledger, and Ethereum’s EVM.  This enables MyBit to possess unparalleled functionality and arguably be the world’s most secure registry technology to date.'); ?></p>
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
                                <a href="https://www.linkedin.com/company/mybit?trk=biz-companies-cym" class="soc__link" target="_blank"><i class="icon-linkedin"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://www.reddit.com/user/MyBit_DApp/" class="soc__link" target="_blank"><i class="icon-redit"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://mybit-dapp.slack.com/ " class="soc__link" target="_blank"><i class="icon-slack"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://www.youtube.com/channel/UCtLn7Vi-3VbsY5F9uF1RJYg" class="soc__link" target="_blank"><i class="icon-youtube"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://bitcointalk.org/index.php?topic=1797720" class="soc__link" target="_blank"><i class="icon-bitcointalk"></i></a>
                            </li>
                            <li class="soc__item">
                                <a href="https://medium.com/@MyBit_Blog" class="soc__link" target="_blank"><i class="icon-medium"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer__download">
                        <a href="/MyBit_Whitepaper_v0.9.pdf" target="_blank" class="btn btn-progress btn-download_js">
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
                <a href="" class="btn-shadow"><span><?php echo t::message('global','Ask Question'); ?></span></a>
                <span class="copy"><?php echo t::message('global','Copyright'); ?> © MyBit <?php echo date('Y'); ?>. <span><?php echo t::message('global','All Rights Reserved'); ?></span></span>
            </div>
        </div>
    </footer>

</div>

<script src="js/easePack.min.js"></script>
<script src="js/rAF.js"></script>
<script src="js/tweenLite.min.js"></script>
<script src="js/animatedBg.js"></script>
</body>
</html>