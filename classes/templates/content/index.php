<?php

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
        <div class="team__wrap team__block"></div>
    </div>
</div>

<div id="advisor" class="section section__advisor wow  fadeInUp animated" data-wow-offset="50">
    <div class="container">
        <h2 class="h3 section__title center">Advisors</h2>
        <div class="team__wrap">
            <div class="team__list slick_mob">
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/peter.png" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Peter Kleissner</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Hacker, Founder of AV Tracker Stoned Bootkit</span>
                    </div>
                </div>
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/nick.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Nick Ayton</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Public Relations, Co-founder of The 21Million Project</span>
                    </div>
                </div>
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/mitchell.png" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Mitchell Loureiro</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Marketing Strategy, VP of Marketing at Steemit</span>
                    </div>
                </div>
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/mihaela.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Dr. Mihaela Ulieru</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Technology, Global Advisor for World Economic Forum</span>
                    </div>
                </div>
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/alvaro_portellano.jpeg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Alvaro Portellano</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Energy, Renewables and Regulatory Affairs Manager, Iberdola</span>
                    </div>
                </div>
            </div>
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
            <div class="slick_desktop">
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://bravenewcoin.com/news/mybit-tackles-data-manipulation-an-emerging-art-of-war-in-cyberspace/">
                            <img src="images/media/bnc.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="http://www.digitaljournal.com/pr/3295444">
                            <img src="images/media/digital.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="http://www.futureofeverything.io/2017/04/12/future-smart-home-technology/">
                            <img src="images/media/final_future.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://cointelegraph.com/news/the-unbreachable-data-made-possible-with-bitcoin-ethereum-blockchain-heres-how&#10;">
                            <img src="images/media/press-cointelegraph.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://blockgeeks.com/ama/ian-worrall-tokenizing-ai-smart-energy-and-ownership/">
                            <img src="images/media/block.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://www.facebook.com/vejdiven/videos/1344609518964148/">
                            <img src="images/media/paral.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="partnerships" class="section section__partners wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h2 class="h3 section__title">Partnerships</h2>
                <div class="partners__wrap">
                    <div class="partners__list slick_mob">
                        <div class="partners__item">
                            <a href="https://bravenewcoin.com/news/mybit-tackles-data-manipulation-an-emerging-art-of-war-in-cyberspace/" target="_blank" class="partners__logo">
                                <img src="images/media/bnc.jpeg" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession">Escrow/Marketing</span>
                        </div>
                        <div class="partners__item">
                            <a href="https://btc.pacatum.com" target="_blank" class="partners__logo">
                                <img src="images/media/pacatum.png" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession">Technology</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team__template">
    <div class="team__list slick_laptop">

        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/garrett.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name">Garrett McDonald</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Blockchain Design & Marketing Strategy</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/thomas.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name">Thomas Pollan</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Business Development & Partnerships</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/ian.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name">Ian Worrall</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Founder</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/pedro.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name">Pedro Barros</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Engineer</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/jacob.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name">Jacob DeBenedetto</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">UI/UX</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/bogdan.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Bogdan Fiedur</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Solidity Dev</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/ching_pong_su(Kenji).jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Ching Pong Siu (Kenji)</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Chief Technology Officer</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/maclin.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Maclin Macalindong</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Graphic Design</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/hua_Li.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Hua Li</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Chinese Community Manager</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/jake_vartanian.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Jake Vartanian</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Community Strategy</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/no_photo.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Pedro Augusto</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Bounty Campaign Manager</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/fran_stajnar.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name">Fran Strajnar</span>
                    <div class="team__professionWrap">
                        <span class="team__profession">Escrow Manager</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?php echo Common::getInstance()->http(); ?>js/easePack.min.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/rAF.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/tweenLite.min.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/animatedBg.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/page/index.js"></script>