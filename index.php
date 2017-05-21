<?php

    require_once 'classes/common.php';

    if(isset($_GET['ln'])) {
        t::getInstance()->setLang($_GET['ln']);
        header("Location: /");
        die();
    }

    $path_whitepaper = '/docs/MyBit_Whitepaper_v0.12.pdf';

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
	<script src="js/page/index.js"></script>
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
                <li class="mainNav__item">
                    <a href="#partnerships" class="mainNav__link btn_scroll"><span class="title">Partnerships</span></a>
                </li>
            </ul>
            <a href="<?php echo $path_whitepaper; ?>" class="btn btn-shadow yellow small btn-whitepaper" target="_blank"><span class="title">Whitepaper</span></a>
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
                        <p>The Future</p>
	                    <p>Our 5 year goal is to be at the forefront of commoditizing the coming AI economy. Mybit will be Europe's platform tokenizing any automatable or machine infrastructure. And it will be owned by the crowd.</p>
                    </div>
                </div>
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
	        <div class="row">
		        <div class="col-xs-12 col-md-11 col-md-offset-1 col-lg-offset-0">
			        <div class="desc">
				        <p>Why Decentralized Energy?</p>
				        <p>The explosion of Artificial Intelligence (AI) and the Internet of Things (IoT) will result in massive demand increases for energy. Traditional energy grids will not be able to scale rapidly enough to keep up with the demand. Decentralized energy grids, composed of renewable energy technologies such as solar panels that can be installed on homes and office buildings away from the traditional (centralized) energy production & storage facilities, will be a critical component of the solution to the increased energy demand.</p>
				        <p>A major issue with decentralized energy grids is the financial-barrier to entry. While companies such as Solar City have done a good job providing alternative financing packages (although they heavily rely on incentives such as tax breaks which will not last forever), the centralized model only permits scaling to a certain level (which demand will surpass). Decentralizing this model via Blockchain tokenization and Ethereum based smart contract governance, provides an infinitely scalable model that benefits consumers, investors, and enterprise.</p>
				        <p>Our goal is to remove the financial barriers to entry and the friction currently present in the alternative assets investment space; thereby, enabling anyone to benefit from sustainable infrastructure regardless of their socioeconomic status or location. Aside from energy this model can be replicated across many industries including Land, Commercial Property, and AI - specifically autonomous mobiles.</p>
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
                                <a href="https://slack.mybit.io/ " class="soc__link colored slack" target="_blank"><i class="icon-slack"></i></a>
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
					<div class="partners__wrap">
						<div class="partners__list slick_mob">
							<div class="partners__item">
								<a href="https://bravenewcoin.com/news/mybit-tackles-data-manipulation-an-emerging-art-of-war-in-cyberspace/" target="_blank" class="partners__logo">
									<img src="images/media/bnc.jpeg" alt="" class="partners__pic"/>
								</a>
								<span class="partners__profession">Escrow/Marketing</span>
							</div>
							<div class="partners__item">
								<a href="http://btc.pacatum.com" target="_blank" class="partners__logo">
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
	            <div class="col-md-5 col-sm-6">
		            <h2 class="h4">Resources</h2>
		            <ul class="resources__list">
			            <li class="resources__item"><a href="javascript:void(0)" class="resources__link">Wireframes</a></li>
			            <li class="resources__item"><a href="javascript:void(0)" class="resources__link">Demo</a></li>
			            <li class="resources__item"><a href="javascript:void(0)" class="resources__link">Presentation</a></li>
			            <li class="resources__item"><a href="javascript:void(0)" class="resources__link">Deck</a></li>
			            <li class="resources__item"><a href="javascript:void(0)" class="resources__link">Deal Sheet</a></li>
		            </ul>
	            </div>
	            <div class="col-md-3 col-sm-6">
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
</div>

<script src="js/easePack.min.js"></script>
<script src="js/rAF.js"></script>
<script src="js/tweenLite.min.js"></script>
<script src="js/animatedBg.js"></script>

</body>
</html>